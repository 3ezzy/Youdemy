
---

# 🎓 Youdemy - Your Ultimate Learning Platform 🚀

Welcome to **Youdemy**, the fun and interactive online learning platform where knowledge meets creativity! Whether you're a student, teacher, or admin, Youdemy has something for everyone. Dive into a world of courses, manage your learning journey, and unlock your potential! 🌟

---

## ✨ Features

### 🧑‍🎓 **For Students**
- **Browse Courses** 🔍: Explore a wide range of courses by category, tags, or search.
- **Enroll in Courses** 📚: Access video lessons, text content, and resources.
- **Track Progress** 📊: Keep track of your learning journey.
- **Leave Comments** 💬: Engage with the community and share your thoughts.

### 👩‍🏫 **For Teachers**
- **Create Courses** 🎥: Upload videos, text, and resources to share your knowledge.
- **Manage Courses** 🛠️: Edit or update course details and content.
- **View Enrollment** 👥: Track how many students are enrolled in your courses.

### 👨‍💻 **For Admins**
- **Manage Users** 👤: Approve or suspend users (students, teachers, and admins).
- **Manage Categories and Tags** 🏷️: Add, edit, or remove course categories and tags.
- **View Statistics** 📈: Get insights into platform-wide activity.

---

## 🛠️ Technologies Used

- **Frontend**: HTML, CSS, Tailwind CSS, JavaScript
- **Backend**: PHP, MySQL
- **Database**: MySQL for storing users, courses, enrollments, and more.
- **Other Tools**:
  - 🎨 **Font Awesome** for icons.
  - 📹 **Video.js** or native HTML5 video player for video content.

---

## 🚀 Installation and Setup

### Prerequisites
- PHP (>= 7.4)
- MySQL (>= 5.7)
- Composer (for dependency management, if applicable)
- Web server (e.g., Apache, Nginx)

### Steps to Set Up

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/3ezzy/Youdemy.git
   cd Youdemy
   ```

2. **Set Up the Database**:
   - Create a MySQL database for the project.
   - Import the provided SQL file (if available) to set up the necessary tables and data.

3. **Configure Environment Variables**:
   - Rename `.env.example` to `.env` and update the database credentials:
     ```env
     DB_HOST=localhost
     DB_NAME=your_database_name
     DB_USER=your_database_user
     DB_PASS=your_database_password
     ```

4. **Run the Application**:
   - Start your local server (e.g., using PHP's built-in server):
     ```bash
     php -S localhost:8000 -t public
     ```
   - Open your browser and navigate to `http://localhost:8000`.

5. **Admin Access**:
   - Use the default admin credentials (if provided) or create an admin account via the database.

---

## 📂 Folder Structure

```
Youdemy/
├── assets/               # Static assets (CSS, JS, images)
├── uploads/              # Uploaded files (course covers, videos, etc.)
├── pages/                # PHP pages for different sections of the app
│   ├── admin/            # Admin-related pages
│   ├── auth/             # Authentication pages (login, register)
│   ├── courses/          # Course-related pages
│   ├── profile/          # User profile pages
│   └── student/          # Student dashboard and course management
├── includes/             # Shared PHP files (e.g., database connection, functions)
├── index.php             # Main entry point
└── README.md             # Project documentation
```

---

## 📸 Screenshots

### 🏠 Homepage
![Homepage](screenshots/Screenshot%202025-01-22%2022091033.png)

### 📚 Course Details
![Course Details](screenshots/Screenshot%202025-01-22%2022100155.png)

### 🛠️ Admin Dashboard
![Admin Dashboard](screenshots/admin-dashboard.png)

---

## 🤝 Contributing

We welcome contributions from the community! If you'd like to contribute to Youdemy, follow these steps:

1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Commit your changes and push to your branch.
4. Submit a pull request with a detailed description of your changes.

---

## 📜 License

This project is licensed under the **MIT License**. See the [LICENSE](LICENSE) file for details.

---

## 💖 Acknowledgments

- Inspired by platforms like **Udemy** and **Coursera**.
- Built with ❤️ by [3ezzy](https://github.com/3ezzy).

---

## 🌟 Why Youdemy?

Youdemy is more than just a learning platform—it's a community of learners, teachers, and creators. Whether you're here to learn something new or share your expertise, Youdemy is the place to be. Let's grow together! 🌱

---

Feel free to customize this further to match your style! If you need more help, just let me know. 😊