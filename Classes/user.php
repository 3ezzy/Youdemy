<?php



// Database connection (db_connection.php)

class User
{
    protected $id;
    protected $name;
    protected $email;
    protected $password;
    protected $role;
    protected $db;

    public function __construct($db, $id = null, $name = null, $email = null, $password = null, $role = null)
    {
        $this->db = $db;
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }
    public function register($name, $email, $password, $role)
    {
        // Check if name already exists
        if (isset($name)) {
            $stmt = $this->db->query("SELECT * FROM users WHERE name = '$name'");
            $result = $stmt->fetch();

            if ($result) {
                $_SESSION['emailError'] = "Email already in use.";
                $_SESSION['nameError'] = "name already in use.";
            }
        }

        // Check if email already exists
        if (isset($email)) {
            $stmt = $this->db->query("SELECT * FROM users WHERE email = '$email'");
            $result = $stmt->fetch();
            if ($result) {
                $_SESSION['emailError'] = "Email already in use.";
                $_SESSION['nameError'] = "name already in use.";
            }
        }

        if ($name !== $result['name'] && $email !== $result['email']) {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $this->db->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
            if ($stmt->execute([$name, $email, $hashedPassword, $role])) {
                return true;
            } else {
                $_SESSION['error'] = "Registration failed.";
                return false;
            }
        } else {
            return false;
        }
    }

    public function login($nameOrEmail, $password)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM users WHERE name = ? OR email = ?");
            $stmt->execute([$nameOrEmail, $nameOrEmail]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['email'] = $user['email'];
                return true;
            } else {
                $_SESSION['loginError'] = "Invalid name, email, or password.";
                return false;
            }
        } catch (PDOException $e) {
            $_SESSION['loginError'] = "Database error: " . $e->getMessage();
            return false;
        }
    }

    public static function logout()
    {
        session_unset();
        session_destroy();
    }

    public function getRole()
    {
        return $_SESSION['role'] ?? null;
    }

    public function isAuthenticated()
    {
        return isset($_SESSION['user_id']);
    }

    public function isAdmin()
    {
        return $this->getRole() === 'admin';
    }

    public function isTeacher()
    {
        return $this->getRole() === 'teacher';
    }

    public function isStudent()
    {
        return $this->getRole() === 'student';
    }
}

class Student extends User
{
    private $courses = [];

    public function __construct($db, $id = null, $name = null, $email = null, $password = null, $role = 'student')
    {
        parent::__construct($db, $id, $name, $email, $password, $role);
    }

    public function enrollCourse($courseId)
    {
        $stmt = $this->db->prepare("INSERT INTO course_enrollments (course_id, student_id) VALUES (?, ?)");
        return $stmt->execute([$courseId, $_SESSION['user_id']]);
    }

    public function getCourses()
    {
        $stmt = $this->db->prepare("SELECT c.* FROM courses c JOIN course_enrollments ce ON c.id = ce.course_id WHERE ce.student_id = ?");
        $stmt->execute([$_SESSION['user_id']]);
        return $stmt->fetchAll();
    }

    public function viewCourses()
    {
        $stmt = $this->db->query("SELECT * FROM courses");
        return $stmt->fetchAll();
    }

    public function searchCourse($keyword)
    {
        $stmt = $this->db->prepare("SELECT * FROM courses WHERE title LIKE ? OR description LIKE ?");
        $stmt->execute(['%' . $keyword . '%', '%' . $keyword . '%']);
        return $stmt->fetchAll();
    }

    public function joinCourse($courseId)
    {
        $stmt = $this->db->prepare("INSERT INTO course_enrollments (course_id, student_id) VALUES (?, ?)");
        $stmt->execute([$courseId, $_SESSION['user_id']]);
    }

    public function viewMyCourses()
    {
        $stmt = $this->db->prepare("SELECT c.* FROM courses c JOIN course_enrollments ce ON c.id = ce.course_id WHERE ce.student_id = ?");
        $stmt->execute([$_SESSION['user_id']]);
        return $stmt->fetchAll();
    }
}

class Teacher extends User
{
    public function __construct($db, $id = null, $name = null, $email = null, $password = null, $role = 'teacher')
    {
        parent::__construct($db, $id, $name, $email, $password, $role);
    }

    public function addCourse($title, $description, $content, $categoryId)
    {
        $stmt = $this->db->prepare("INSERT INTO courses (title, description, content, category_id, teacher_id) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$title, $description, $content, $categoryId, $_SESSION['user_id']]);
    }

    public function getCourses()
    {
        $stmt = $this->db->prepare("SELECT * FROM courses WHERE teacher_id = ?");
        $stmt->execute([$_SESSION['user_id']]);
        return $stmt->fetchAll();
    }

    public function getCourseStatistics()
    {
        $stmt = $this->db->prepare("SELECT c.id, c.title, COUNT(ce.id) as student_count FROM courses c LEFT JOIN course_enrollments ce ON c.id = ce.course_id WHERE c.teacher_id = ? GROUP BY c.id");
        $stmt->execute([$_SESSION['user_id']]);
        return $stmt->fetchAll();
    }
}

class Admin extends User
{
    public function __construct($db, $id = null, $name = null, $email = null, $password = null, $role = 'admin')
    {
        parent::__construct($db, $id, $name, $email, $password, $role);
    }

    public function validateTeacher($teacherId)
    {
        $stmt = $this->db->prepare("UPDATE users SET status = 'active' WHERE id = ? AND role = 'teacher'");
        return $stmt->execute([$teacherId]);
    }

    public function manageUser($userId, $action)
    {
        $status = $action === 'activate' ? 'active' : ($action === 'suspend' ? 'suspended' : 'deleted');
        if ($action === 'delete') {
            $stmt = $this->db->prepare("DELETE FROM users WHERE id = ?");
            return $stmt->execute([$userId]);
        } else {
            $stmt = $this->db->prepare("UPDATE users SET status = ? WHERE id = ?");
            return $stmt->execute([$status, $userId]);
        }
    }

    public function getStatistics()
    {
        $stmt = $this->db->query("SELECT 
            (SELECT COUNT(*) FROM courses) as total_courses,
            (SELECT COUNT(*) FROM users WHERE role = 'teacher') as total_teachers,
            (SELECT COUNT(*) FROM users WHERE role = 'student') as total_students,
            (SELECT title FROM courses ORDER BY (SELECT COUNT(*) FROM course_enrollments WHERE course_id = courses.id) DESC LIMIT 1) as most_popular_course,
            (SELECT name FROM users WHERE role = 'teacher' ORDER BY (SELECT COUNT(*) FROM courses WHERE teacher_id = users.id) DESC LIMIT 3) as top_teachers
        ");
        return $stmt->fetch();
    }
}

class Tag
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addTag($name)
    {
        $stmt = $this->db->prepare("INSERT INTO tags (name) VALUES (?)");
        return $stmt->execute([$name]);
    }

    public function getTags()
    {
        $stmt = $this->db->query("SELECT * FROM tags");
        return $stmt->fetchAll();
    }
}

class Category
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addCategory($name)
    {
        $stmt = $this->db->prepare("INSERT INTO categories (name) VALUES (?)");
        return $stmt->execute([$name]);
    }

    public function getCategories()
    {
        $stmt = $this->db->query("SELECT * FROM categories");
        return $stmt->fetchAll();
    }
}

class Course
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getCourse($courseId)
    {
        $stmt = $this->db->prepare("SELECT * FROM courses WHERE id = ?");
        $stmt->execute([$courseId]);
        return $stmt->fetch();
    }

    public function getCourses($limit, $offset)
    {
        $stmt = $this->db->prepare("SELECT * FROM courses LIMIT ? OFFSET ?");
        $stmt->execute([$limit, $offset]);
        return $stmt->fetchAll();
    }

    public function searchCourses($keyword)
    {
        $stmt = $this->db->prepare("SELECT * FROM courses WHERE title LIKE ? OR description LIKE ?");
        $stmt->execute(['%' . $keyword . '%', '%' . $keyword . '%']);
        return $stmt->fetchAll();
    }
}
