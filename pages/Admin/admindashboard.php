<?php
session_start();
require_once '../../config/database.php';
require_once '../../classes/admin.php';
require_once '../../classes/teacher.php';
require_once '../../classes/student.php';
require_once '../../classes/user.php';
require_once '../../classes/course.php';
require_once '../../classes/videoCourse.php';
require_once '../../classes/documentCourse.php';
require_once '../../classes/enrollment.php';
require_once '../../classes/category.php';
require_once '../../classes/tag.php';


if (isset($_SESSION['user'])) {
  $user = unserialize($_SESSION['user']);
  if (!($user instanceof Admin)) {
    header('Location: ../../index.php');
    exit();
  }
} else {
  header('Location: ../auth/login.php');
  exit();
}

if (isset($_GET['search']) || isset($_GET['role'])) {

  $search = trim($_GET['search']) ?? '';
  $role = trim($_GET['role']) ?? '';
  $acUsers = User::getActiveUsers($PDOConn);
  $activeUsers = $user->filterActiveUsers($acUsers, $search, $role);
} else {
  $activeUsers = User::getActiveUsers($PDOConn);
}


$suspendedUsers = User::getSuspendedUsers($PDOConn);
$pendingTeachers = Teacher::getPendingTeachers($PDOConn);

$tags = Tag::getAllTags($PDOConn);
$categories = Category::getAllCategories($PDOConn);


$totalUsers = User::usersCount($PDOConn);
$totalAdmins = Admin::adminsCount($PDOConn);
$totalTeachers = Teacher::teachersCount($PDOConn);
$totalStusents = Student::studentsCount($PDOConn);

$totalCourses = Course::coursesCount($PDOConn);
$totalDocumtns = DocumentCourse::documentCoursesCount($PDOConn);
$totalVideos = videoCourse::videoCoursesCount($PDOConn);
$totalEnrollments = Enrollment::enrollmentsCount($PDOConn);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Youdemy - Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="bg-gray-50 min-h-screen flex flex-col">
  <header class="w-full">
    <div class="bg-white backdrop-blur-md bg-opacity-90">
      <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between h-20">
          <div class="flex items-center">
            <div class="text-2xl font-bold bg-gradient-to-r from-[#000957] to-[#344CB7] text-transparent bg-clip-text">
              Youdemy
            </div>
          </div>

          <nav class="flex items-center">
            <ul class="hidden md:flex items-center space-x-6">
              <li>
                <a href="../../index.php"
                  class="text-gray-800 hover:text-orange-600 transition-colors duration-300">Home</a>
              </li>
              <li>
                <a href="../courses/courses.php"
                  class="text-gray-600 hover:text-orange-600 transition-colors duration-300">Courses</a>
              </li>
              <li>
                <a href="../contact/contact.php"
                  class="text-gray-600 hover:text-orange-600 transition-colors duration-300">Contact</a>
              </li>
              <ul class="flex items-center space-x-4">
                <li class="relative">
                  <button id="dropdownButton"
                    class="flex items-center space-x-2 bg-[#344CB7] text-white px-4 py-2 rounded-full hover:bg-[#577BC1] transition-colors duration-300">
                    <i class="fas fa-user-circle text-lg"></i>
                    <span><?= $user ?></span>
                    <i class="fas fa-chevron-down text-sm"></i>
                  </button>
                  <div id="dropdownMenu"
                    class="hidden w-full absolute mt-2 bg-white rounded-xl shadow-lg py-2 border border-gray-100">
                    <a href="../profile/profile.php"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#344CB7] hover:text-white transition-colors duration-300">Profile</a>
                    <a href="#"
                      class="block px-4 py-2 text-sm text-gray-700 font-medium hover:bg-[#344CB7] hover:text-white transition-colors duration-300">Admin
                      Dashboard</a>
                    <a href="../auth/process/logout.php"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#344CB7] hover:text-white transition-colors duration-300">Logout</a>
                  </div>
                </li>
              </ul>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <main class="flex-grow py-12 px-6">
    <div class="max-w-7xl mx-auto">
      <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Admin Dashboard</h1>
        <p class="text-gray-600 mt-2">Manage users, content, and platform settings</p>
      </div>

      <!-- error/success msg -->
      <?php if (isset($_SESSION['adminActionError'])) { ?>
        <div class="message bg-red-50 border border-red-300 p-4 rounded-lg mb-6 flex justify-between items-center">
          <div class="flex items-center">
            <i class="fas fa-times-circle text-red-500 text-xl mr-3"></i>
            <p class="text-red-700 font-medium"><?= htmlspecialchars($_SESSION['adminActionError']) ?></p>
          </div>
          <button class="dismiss-button text-red-600 hover:underline focus:outline-none">
            Dismiss
          </button>
        </div>
        <?php unset($_SESSION['adminActionError']); ?>
      <?php } ?>

      <?php if (isset($_SESSION['adminActionSuccess'])) { ?>
        <div class="message bg-green-50 border border-green-300 p-4 rounded-lg mb-6 flex justify-between items-center">
          <div class="flex items-center">
            <i class="fas fa-check-circle text-green-500 text-xl mr-3"></i>
            <p class="text-green-700 font-medium"><?= htmlspecialchars($_SESSION['adminActionSuccess']) ?></p>
          </div>
          <button class="dismiss-button text-green-600 hover:underline focus:outline-none">
            Dismiss
          </button>
        </div>
        <?php unset($_SESSION['adminActionSuccess']); ?>
      <?php } ?>



      <!-- Dashboard Navigation -->
      <div class="flex flex-wrap">
        <button data-section="activeUsers"
          class="dashboard-nav-btn flex items-center space-x-2 px-6 py-4 text-[#344CB7] border-b-2 border-[#344CB7] font-medium">
          <i class="fas fa-users"></i>
          <span>Active Users</span>
        </button>
        <button data-section="suspendedUsers"
          class="dashboard-nav-btn flex items-center space-x-2 px-6 py-4 text-gray-600 hover:text-[#344CB7] font-medium">
          <i class="fas fa-user-slash"></i>
          <span>Suspended Users</span>
        </button>
        <button data-section="teachers"
          class="dashboard-nav-btn flex items-center space-x-2 px-6 py-4 text-gray-600 hover:text-[#344CB7] font-medium">
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Approve Teachers</span>
        </button>
        <button data-section="categories"
          class="dashboard-nav-btn flex items-center space-x-2 px-6 py-4 text-gray-600 hover:text-[#344CB7] font-medium">
          <i class="fas fa-folder"></i>
          <span>Categories</span>
        </button>
        <button data-section="tags"
          class="dashboard-nav-btn flex items-center space-x-2 px-6 py-4 text-gray-600 hover:text-[#344CB7] font-medium">
          <i class="fas fa-tags"></i>
          <span>Tags</span>
        </button>
        <button data-section="statistics"
          class="dashboard-nav-btn flex items-center space-x-2 px-6 py-4 text-gray-600 hover:text-[#344CB7] font-medium">
          <i class="fas fa-chart-bar"></i>
          <span>Statistics</span>
        </button>
      </div>

      <!-- active users -->
      <div id="activeUsers"
        class="contentSection flex flex-col bg-white rounded-xl shadow-sm p-6 border border-gray-100">
        <div class="mb-6 w-full lg:w-3/4 mx-auto">
          <form action="" method="GET" id="filterForm"
            class="grid grid-cols-1 md:grid-cols-[60%,30%] justify-between gap-4">
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-search text-gray-400"></i>
              </div>
              <input type="text" name="search" placeholder="Search by name..."
                class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            </div>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-filter text-gray-400"></i>
              </div>
              <select name="role" id="roleInput"
                class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent appearance-none">
                <option value="" <?= (isset($_GET['role']) && $_GET['role'] === '') ? 'selected' : '' ?>>All Roles</option>
                <option value="admin" <?= (isset($_GET['role']) && $_GET['role'] === 'admin') ? 'selected' : '' ?>>Admin
                </option>
                <option value="teacher" <?= (isset($_GET['role']) && $_GET['role'] === 'teacher') ? 'selected' : '' ?>>
                  Teacher</option>
                <option value="student" <?= (isset($_GET['role']) && $_GET['role'] === 'student') ? 'selected' : '' ?>>
                  Student</option>
              </select>
              <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                <i class="fas fa-chevron-down text-gray-400"></i>
              </div>
            </div>
          </form>
        </div>

        <!-- Active Users Section -->
        <div class="overflow-x-auto mx-auto bg-white shadow-md rounded-lg w-full max-w-4xl">
          <?php if (empty($activeUsers)): ?>
            <div class="text-center py-12">
              <i class="fas fa-users text-gray-400 text-5xl mb-4"></i>
              <h3 class="text-lg font-medium text-gray-900 mb-2">No Result Found</h3>
              <p class="text-gray-500">There are no active users that match </p>
            </div>
          <?php else: ?>
            <table class="min-w-full table-auto">

              <div class="overflow-x-auto mx-auto bg-white shadow-md rounded-lg w-full lg:w-3/4">
                <table class="min-w-full table-auto">
                  <thead class="bg-orange-100 text-gray-800">
                    <tr>
                      <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Full Name
                      </th>
                      <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Email</th>
                      <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Joined</th>
                      <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Role</th>
                      <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">Suspend
                      </th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200">
                    <?php foreach ($activeUsers as $user): ?>
                      <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-900">
                          <?= htmlspecialchars("{$user['first_name']}  {$user['last_name']}") ?>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900">
                          <?= htmlspecialchars($user['email']) ?>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900">
                          <?= date('F j, Y', strtotime($user['created_at'])) ?>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900">
                          <?= htmlspecialchars(ucfirst($user['role'])) ?>
                          <?php if ($user['role'] === 'student'): ?>
                            <i class="fas fa-user-graduate text-blue-500"></i>
                          <?php elseif ($user['role'] === 'teacher'): ?>
                            <i class="fas fa-chalkboard-teacher text-green-500"></i>
                          <?php elseif ($user['role'] === 'admin'): ?>
                            <i class="fas fa-user-shield text-red-500"></i>
                          <?php endif; ?>
                        </td>
                        <td class="px-6 py-4 text-center text-sm font-medium">
                          <?php if ($user['role'] !== 'admin'): ?>
                            <div class="flex justify-center gap-4">
                              <form action="process/suspendUser.php" method="POST" class="inline">
                                <input type="hidden" name="userId" value="<?= htmlspecialchars($user['id']) ?>">
                                <button type="submit"
                                  class="text-yellow-600 hover:text-yellow-800 transform hover:scale-110 transition duration-200">
                                  <i class="fas fa-ban"></i>
                                </button>
                              </form>
                            </div>
                          <?php else: ?>
                            <span class="text-gray-400">No Actions</span>
                          <?php endif; ?>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </table>
          <?php endif; ?>
        </div>
      </div>


      <!-- Suspended Users -->
      <div id="suspendedUsers" class="contentSection hidden bg-white rounded-xl shadow-sm p-6 border border-gray-100">
        <div class="overflow-x-auto mx-auto bg-white shadow-md rounded-lg w-full max-w-4xl">
          <?php if (empty($suspendedUsers)): ?>
            <div class="text-center py-12">
              <i class="fas fa-user-shield text-gray-400 text-5xl mb-4"></i>
              <h3 class="text-lg font-medium text-gray-900 mb-2">No Suspended Users</h3>
              <p class="text-gray-500">All users are currently active on the platform.</p>
            </div>
          <?php else: ?>
            <table class="min-w-full table-auto">
              <thead class="bg-red-100 text-gray-800">
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Full Name
                  </th>
                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Email</th>
                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Joined</th>
                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Role</th>
                  <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">Actions
                  </th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200">
                <?php foreach ($suspendedUsers as $user): ?>
                  <?php if ($user['role'] !== 'admin'): ?>
                    <tr class="hover:bg-gray-50">
                      <td class="px-6 py-4 text-sm text-gray-900">
                        <?= htmlspecialchars("{$user['first_name']} {$user['last_name']}") ?>
                      </td>
                      <td class="px-6 py-4 text-sm text-gray-900">
                        <?= htmlspecialchars($user['email']) ?>
                      </td>
                      <td class="px-6 py-4 text-sm text-gray-900">
                        <?= date('F j, Y', strtotime($user['created_at'])) ?>
                      </td>
                      <td class="px-6 py-4 text-sm text-gray-900">
                        <?= htmlspecialchars(ucfirst($user['role'])) ?>
                        <?php if ($user['role'] === 'student'): ?>
                          <i class="fas fa-user-graduate text-blue-500"></i>
                        <?php elseif ($user['role'] === 'teacher'): ?>
                          <i class="fas fa-chalkboard-teacher text-green-500"></i>
                        <?php endif; ?>
                      </td>
                      <td class="px-6 py-4 text-center text-sm font-medium">
                        <div class="flex justify-center gap-4">
                          <form action="process/unsuspendUser.php" method="POST" class="inline">
                            <input type="hidden" name="userId" value="<?= htmlspecialchars($user['id']) ?>">
                            <button type="submit"
                              class="text-green-600 hover:text-green-800 transform hover:scale-110 transition duration-200">
                              <i class="fas fa-check"></i>
                            </button>
                          </form>
                          <form action="process/deleteUser.php" method="POST" class="deleteForm inline">
                            <input type="hidden" name="userId" value="<?= htmlspecialchars($user['id']) ?>">
                            <button type="submit"
                              class="text-red-600 hover:text-red-800 transform hover:rotate-12 transition duration-200">
                              <i class="fas fa-trash"></i>
                            </button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  <?php endif; ?>
                <?php endforeach; ?>
              </tbody>
            </table>
          <?php endif; ?>
        </div>
      </div>

      <!-- teacher section -->
      <div id="teachers" class="contentSection hidden bg-white rounded-xl shadow-sm p-6 border border-gray-100">
        <div class="overflow-x-auto mx-auto bg-white shadow-md rounded-lg w-full md:w-3/4">
          <?php if (empty($pendingTeachers)): ?>
            <div class="text-center py-12">
              <i class="fas fa-chalkboard-teacher text-gray-400 text-5xl mb-4"></i>
              <h3 class="text-lg font-medium text-gray-900 mb-2">No Pending Applications</h3>
              <p class="text-gray-500">There are currently no teachers waiting for approval.</p>
            </div>
          <?php else: ?>
            <table class="min-w-full table-auto">
              <thead class="bg-orange-100 text-gray-800">
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Full Name
                  </th>
                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Email</th>
                  <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Joined</th>
                  <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">Actions
                  </th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200">
                <?php foreach ($pendingTeachers as $teacher): ?>
                  <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm text-gray-900">
                      <?= htmlspecialchars("{$teacher['first_name']} {$teacher['last_name']}") ?>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900"><?= htmlspecialchars($teacher['email']) ?>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">
                      <?= date('F j, Y', strtotime($teacher['created_at'])) ?>
                    </td>
                    <td class="px-6 py-4 text-center text-sm font-medium">
                      <form action="process/approveTeacher.php" method="POST" class="inline">
                        <input type="hidden" name="teacherId" value="<?= htmlspecialchars($teacher['id']) ?>">
                        <button type="submit"
                          class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors">
                          <i class="fas fa-check-circle"></i>
                          <span class="inline-block">Approve</span>
                        </button>
                      </form>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          <?php endif; ?>
        </div>
      </div>


      <!-- category section -->
      <div id="categories"
        class="contentSection hidden bg-white rounded-xl shadow-sm p-6 border flex-col border-gray-100">

        <div class="max-w-2xl mx-auto mb-8">
          <form action="process/addCategory.php" method="POST" class="flex gap-4 items-center">
            <div class="flex-grow max-w-xs">
              <input type="text" name="categoryName" placeholder="Enter category name" required
                class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all">
            </div>
            <div class="flex-grow max-w-xs">
              <input type="text" name="categoryDescription" placeholder="Enter category description" required
                class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all">
            </div>
            <button type="submit"
              class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 transition-colors flex items-center gap-2">
              <i class="fas fa-plus"></i>
              <span>Add Category</span>
            </button>
          </form>
        </div>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
          <table class="min-w-full table-auto">
            <thead class="bg-orange-100 text-gray-800">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Category
                  Name</th>
                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Description
                </th>
                <th class="px-6 py-3 text-right text-xs font-medium uppercase tracking-wider">Actions
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <?php foreach ($categories as $category): ?>
                <tr class="hover:bg-gray-50">
                  <td class="px-6 py-4 text-sm text-gray-900"><?= htmlspecialchars($category['name']) ?>
                  </td>
                  <td class="px-6 py-4 text-sm text-gray-600">
                    <?= htmlspecialchars($category['description']) ?>
                  </td>
                  <td class="px-6 py-4 text-right text-sm font-medium">
                    <div class="flex justify-end gap-4">
                      <button data-category-id="<?= htmlspecialchars($category['id']) ?>"
                        data-category-name="<?= htmlspecialchars($category['name']) ?>"
                        data-category-description="<?= htmlspecialchars($category['description']) ?>"
                        class="edit-category-btn text-blue-600 hover:text-blue-800 transform hover:scale-110 transition duration-200">
                        <i class="fas fa-edit"></i>
                      </button>
                      <form action="process/deleteCategory.php" method="POST" class="deleteForm inline">
                        <input type="hidden" name="categoryId" value="<?= htmlspecialchars($category['id']) ?>">
                        <button type="submit"
                          class="text-red-600 hover:text-red-800 transform hover:rotate-12 transition duration-200">
                          <i class="fas fa-trash"></i>
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <div id="editCategoryPopup" class="hidden fixed inset-0 bg-black bg-opacity-50 items-center justify-center p-4">
          <div class="bg-white rounded-lg shadow-xl w-full max-w-md relative">
            <div class="p-6">
              <button type="button" id="closeEditCategoryPopup"
                class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 transition-colors">
                <i class="fas fa-times"></i>
              </button>
              <h3 class="text-lg font-medium text-gray-900 mb-4">Edit Category</h3>
              <form id="editCategoryForm" action="process/editCategory.php" method="POST">
                <input type="hidden" name="categoryId" id="editCategoryId">
                <div class="mb-4">
                  <input type="text" name="categoryName" id="editCategoryName" required
                    class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all">
                </div>
                <div class="mb-4">
                  <input type="text" name="categoryDescription" id="editCategoryDescription" required
                    class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all">
                </div>
                <div class="flex justify-end">
                  <button type="submit"
                    class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 transition-colors">
                    Update Category
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>



      <!-- tags section -->
      <div id="tags" class="contentSection hidden bg-white rounded-xl shadow-sm p-6 border flex-col border-gray-100">

        <div class="max-w-2xl mx-auto mb-8">
          <form action="process/addTag.php" method="POST" class="flex gap-4 items-center">
            <div class="flex-grow max-w-xs">
              <input type="text" name="tagName" placeholder="Enter tag name" required
                class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all">
            </div>
            <button type="submit"
              class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 transition-colors flex items-center gap-2">
              <i class="fas fa-plus"></i>
              <span>Add Tag</span>
            </button>
          </form>
        </div>

        <div class="w-full md:w-1/2 mx-auto overflow-x-auto bg-white shadow-md rounded-lg">
          <table class="min-w-full table-auto">
            <thead class="bg-orange-100 text-gray-800">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Tag Name
                </th>
                <th class="px-6 py-3 text-right text-xs font-medium uppercase tracking-wider">Actions
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              <?php foreach ($tags as $tag): ?>
                <tr class="hover:bg-gray-50">
                  <td class="px-6 py-4 text-sm text-gray-900"><?= htmlspecialchars($tag['name']) ?></td>
                  <td class="px-6 py-4 text-right text-sm font-medium">
                    <div class="flex justify-end gap-4">
                      <button data-tag-id="<?= htmlspecialchars($tag['id']) ?>"
                        data-tag-name="<?= htmlspecialchars($tag['name']) ?>"
                        class="edit-tag-btn text-blue-600 hover:text-blue-800 transform hover:scale-110 transition duration-200">
                        <i class="fas fa-edit"></i>
                      </button>
                      <form action="process/deleteTag.php" method="POST" class="deleteForm inline">
                        <input type="hidden" name="tagId" value="<?= htmlspecialchars($tag['id']) ?>">
                        <button type="submit"
                          class="text-red-600 hover:text-red-800 transform hover:rotate-12 transition duration-200">
                          <i class="fas fa-trash"></i>
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <div id="editTagPopup" class="hidden fixed inset-0 bg-black bg-opacity-50 items-center justify-center p-4">
          <div class="bg-white rounded-lg shadow-xl w-full max-w-md relative">
            <div class="p-6">
              <button type="button" id="closeEditTagPopup"
                class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 transition-colors">
                <i class="fas fa-times"></i>
              </button>
              <h3 class="text-lg font-medium text-gray-900 mb-4">Edit Tag</h3>
              <form id="editTagForm" action="process/editTag.php" method="POST">
                <input type="hidden" name="tagId" id="editTagId">
                <div class="mb-4">
                  <input type="text" name="tagName" id="editTagName" required
                    class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all">
                </div>
                <div class="flex justify-end">
                  <button type="submit"
                    class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 transition-colors">
                    Update Tag
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


      <div id="statistics" class="contentSection hidden bg-white rounded-xl shadow-sm p-6 border border-gray-100">
        <div class="w-full text-center text-gray-500">
          <i class="fas fa-chart-bar text-4xl mb-4"></i>
          <!-- <p>Statistics Section - Content Coming Soon</p> -->
          <div class="mb-8">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Users Overview</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
              <div class="bg-gradient-to-br from-orange-50 to-white p-6 rounded-xl border border-orange-100">
                <div class="flex items-center justify-between mb-4">
                  <div class="text-orange-500">
                    <i class="fas fa-users text-2xl"></i>
                  </div>
                  <span class="text-xs font-medium text-orange-600 bg-orange-100 px-2 py-1 rounded-full">Total
                    Users</span>
                </div>
                <div class="text-2xl font-bold text-gray-800 mb-1"><?= $totalUsers ?></div>
                <p class="text-sm text-gray-500">Registered members</p>
              </div>
              <div class="bg-gradient-to-br from-red-50 to-white p-6 rounded-xl border border-red-100">
                <div class="flex items-center justify-between mb-4">
                  <div class="text-red-500">
                    <i class="fas fa-user-shield text-2xl"></i>
                  </div>
                  <span class="text-xs font-medium text-red-600 bg-red-100 px-2 py-1 rounded-full">Admins</span>
                </div>
                <div class="text-2xl font-bold text-gray-800 mb-1"><?= $totalAdmins ?></div>
                <p class="text-sm text-gray-500">Platform administrators</p>
              </div>
              <div class="bg-gradient-to-br from-green-50 to-white p-6 rounded-xl border border-green-100">
                <div class="flex items-center justify-between mb-4">
                  <div class="text-green-500">
                    <i class="fas fa-chalkboard-teacher text-2xl"></i>
                  </div>
                  <span class="text-xs font-medium text-green-600 bg-green-100 px-2 py-1 rounded-full">Teachers</span>
                </div>
                <div class="text-2xl font-bold text-gray-800 mb-1"><?= $totalTeachers ?></div>
                <p class="text-sm text-gray-500">Active instructors</p>
              </div>
              <div class="bg-gradient-to-br from-blue-50 to-white p-6 rounded-xl border border-blue-100">
                <div class="flex items-center justify-between mb-4">
                  <div class="text-blue-500">
                    <i class="fas fa-user-graduate text-2xl"></i>
                  </div>
                  <span class="text-xs font-medium text-blue-600 bg-blue-100 px-2 py-1 rounded-full">Students</span>
                </div>
                <div class="text-2xl font-bold text-gray-800 mb-1"><?= $totalStusents ?></div>
                <p class="text-sm text-gray-500">Registered learners</p>
              </div>
            </div>
          </div>
          <div>
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Content Overview</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
              <div class="bg-gradient-to-br from-purple-50 to-white p-6 rounded-xl border border-purple-100">
                <div class="flex items-center justify-between mb-4">
                  <div class="text-purple-500">
                    <i class="fas fa-graduation-cap text-2xl"></i>
                  </div>
                  <span class="text-xs font-medium text-purple-600 bg-purple-100 px-2 py-1 rounded-full">Courses</span>
                </div>
                <div class="text-2xl font-bold text-gray-800 mb-1"><?= $totalCourses ?></div>
                <p class="text-sm text-gray-500">Available courses</p>
              </div>
              <div class="bg-gradient-to-br from-yellow-50 to-white p-6 rounded-xl border border-yellow-100">
                <div class="flex items-center justify-between mb-4">
                  <div class="text-yellow-500">
                    <i class="fas fa-file-alt text-2xl"></i>
                  </div>
                  <span class="text-xs font-medium text-yellow-600 bg-yellow-100 px-2 py-1 rounded-full">Documents</span>
                </div>
                <div class="text-2xl font-bold text-gray-800 mb-1"><?= $totalDocumtns ?></div>
                <p class="text-sm text-gray-500">Document Lessons</p>
              </div>
              <div class="bg-gradient-to-br from-indigo-50 to-white p-6 rounded-xl border border-indigo-100">
                <div class="flex items-center justify-between mb-4">
                  <div class="text-indigo-500">
                    <i class="fas fa-video text-2xl"></i>
                  </div>
                  <span class="text-xs font-medium text-indigo-600 bg-indigo-100 px-2 py-1 rounded-full">Videos</span>
                </div>
                <div class="text-2xl font-bold text-gray-800 mb-1"><?= $totalVideos ?></div>
                <p class="text-sm text-gray-500">Video lessons</p>
              </div>
              <div class="bg-gradient-to-br from-pink-50 to-white p-6 rounded-xl border border-pink-100">
                <div class="flex items-center justify-between mb-4">
                  <div class="text-pink-500">
                    <i class="fas fa-user-plus text-2xl"></i>
                  </div>
                  <span class="text-xs font-medium text-pink-600 bg-pink-100 px-2 py-1 rounded-full">Enrollments</span>
                </div>
                <div class="text-2xl font-bold text-gray-800 mb-1"><?= $totalEnrollments ?></div>
                <p class="text-sm text-gray-500">Total enrollments</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>

  <!-- <footer class="bg-gray-900 text-white mt-auto">
    <div class="container mx-auto px-4 py-6">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
        <div>
          <div class="text-2xl font-bold text-orange-500 mb-2">Youdemy</div>
          <p class="text-gray-400 text-sm">Share your knowledge with the world</p>
        </div>
        <div class="flex justify-center">
          <ul class="space-y-1 text-center">
            <li><a href="../../index.php" class="text-gray-400 hover:text-white transition text-sm">Home</a>
            </li>
            <li><a href="../courses/courses.php" class="text-gray-400 hover:text-white transition text-sm">Courses</a>
            </li>
            <li><a href="../contact/contact.php" class="text-gray-400 hover:text-white transition text-sm">Contact</a>
            </li>
          </ul>
        </div>
        <div class="flex flex-col items-end">
          <h3 class="text-sm font-semibold mb-2">Follow Us</h3>
          <div class="flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-white transition">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="border-t border-gray-800 mt-4 pt-4 text-center">
        <p class="text-gray-400 text-xs">&copy; 2024 Youdemy. All rights reserved.</p>
      </div>
    </div>
  </footer> -->

  <script src="../../js/menu.js"></script>
  <script src="../../js/messages.js"></script>
  <script src="../../js/alert.js"></script>
  <script src="../../js/adminDashboard.js"></script>
</body>

</html>