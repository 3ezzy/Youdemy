<?php
session_start();
require_once '../../config/database.php';
require_once '../../classes/teacher.php';
require_once '../../classes/course.php';
require_once '../../classes/videoCourse.php';
require_once '../../classes/documentCourse.php';
require_once '../../classes/category.php';
require_once '../../classes/tag.php';


if (isset($_SESSION['user'])) {
  $user = unserialize($_SESSION['user']);
  if (!($user instanceof Teacher)) {
    header('Location: ../../index.php');
    exit();
  }
} else {
  header('Location: ../auth/login.php');
  exit();
}

$tags = Tag::getAllTags($PDOConn);
$categories = Category::getAllCategories($PDOConn);
$courses = $user->getTeacherCourses($PDOConn);

$totalCourses = count($courses);
$totalEnrollments = $user->teacherTotalEnrollments($PDOConn);
$totalDocumtns = $user->teacherTotalDocuments($PDOConn);
$totalVideos = $user->teacherTotalVideos($PDOConn);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Youdemy - Teacher Dashboard</title>
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
                  class="text-gray-600 hover:text-orange-600 transition-colors duration-300">Home</a>
              </li>
              <li>
                <a href="../courses/courses.php"
                  class="text-gray-600 hover:text-orange-600 transition-colors duration-300">Courses</a>
              </li>
              <li>
                <a href="../contact/contact.php"
                  class="text-gray-600 hover:text-orange-600 transition-colors duration-300">Contact</a>
              </li>
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
                    class="block px-4 py-2 text-sm text-gray-800 font-medium hover:bg-[#344CB7] hover:text-white transition-colors duration-300">Teacher
                    Dashboard</a>
                  <a href="../auth/process/logout.php"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#344CB7] hover:text-white transition-colors duration-300">Logout</a>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <main class="flex-grow py-12 px-6">
    <div class="max-w-7xl mx-auto">
      <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Teacher Dashboard</h1>
        <p class="text-gray-600 mt-2">Manage your courses and view statistics</p>
      </div>

      <!-- error/success msg -->
      <?php if (isset($_SESSION['teacherActionError'])) { ?>
        <div class="message bg-red-50 border border-red-300 p-4 rounded-lg mb-6 flex justify-between items-center">
          <div class="flex items-center">
            <i class="fas fa-times-circle text-red-500 text-xl mr-3"></i>
            <p class="text-red-700 font-medium"><?= htmlspecialchars($_SESSION['teacherActionError']) ?></p>
          </div>
          <button class="dismiss-button text-red-600 hover:underline focus:outline-none">
            Dismiss
          </button>
        </div>
        <?php unset($_SESSION['teacherActionError']); ?>
      <?php } ?>

      <?php if (isset($_SESSION['teacherActionSuccess'])) { ?>
        <div class="message bg-green-50 border border-green-300 p-4 rounded-lg mb-6 flex justify-between items-center">
          <div class="flex items-center">
            <i class="fas fa-check-circle text-green-500 text-xl mr-3"></i>
            <p class="text-green-700 font-medium"><?= htmlspecialchars($_SESSION['teacherActionSuccess']) ?></p>
          </div>
          <button class="dismiss-button text-green-600 hover:underline focus:outline-none">
            Dismiss
          </button>
        </div>
        <?php unset($_SESSION['teacherActionSuccess']); ?>
      <?php } ?>

      <!-- nav -->
      <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden mb-6">
        <div class="flex flex-wrap">
          <button data-section="newCourse"
            class="dashboard-nav-btn flex items-center space-x-2 px-6 py-4 text-[#344CB7] border-b-2 border-[#344CB7] font-medium">
            <i class="fas fa-plus-circle"></i>
            <span>New Course</span>
          </button>
          <button data-section="manageCourses"
            class="dashboard-nav-btn flex items-center space-x-2 px-6 py-4 text-gray-600 hover:text-[#344CB7] font-medium">
            <i class="fas fa-book"></i>
            <span>Manage Courses</span>
          </button>
          <button data-section="statistics"
            class="dashboard-nav-btn flex items-center space-x-2 px-6 py-4 text-gray-600 hover:text-[#344CB7] font-medium">
            <i class="fas fa-chart-bar"></i>
            <span>Statistics</span>
          </button>
        </div>
      </div>
      <?php
      if ($user->isActive() && !$user->isSuspended()) {
      ?>

        <!-- add course form section -->
        <div id="newCourse" class="contentSection bg-white rounded-xl shadow-sm p-4 border border-gray-100">
          <form class="w-full space-y-4" action="process/addCourse.php" method="POST" enctype="multipart/form-data">
            <h2 class="text-xl font-bold text-gray-900">Create New Course</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
              <div class="md:col-span-1">
                <label for="courseTitle" class="block text-sm font-medium text-gray-700 mb-1">Course Title</label>
                <input type="text" id="courseTitle" name="title" required
                  class="w-full px-3 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition"
                  placeholder="Enter course title">
              </div>

              <div class="md:col-span-2 grid grid-cols-2 gap-3">
                <div>
                  <label for="courseType" class="block text-sm font-medium text-gray-700 mb-1">Content Type</label>
                  <select id="courseType" name="type" required
                    class="w-full px-3 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition">
                    <option value="" selected disabled>Select a Type</option>
                    <option value="document">Document</option>
                    <option value="video">Video</option>
                  </select>
                </div>

                <div>
                  <label for="courseCategory" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                  <select id="courseCategory" name="category" required
                    class="w-full px-3 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition">
                    <option value="" selected disabled>Select category</option>
                    <?php foreach ($categories as $category): ?>
                      <option value="<?= htmlspecialchars($category['id']) ?>">
                        <?= htmlspecialchars($category['name']) ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div class="space-y-4">
                <div>
                  <label for="courseDescription" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                  <textarea id="courseDescription" name="description" rows="3" required
                    class="w-full px-3 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition resize-none"
                    placeholder="Enter course description"></textarea>
                </div>

                <div>
                  <label for="courseCover" class="block text-sm font-medium text-gray-700 mb-1">Cover Image</label>
                  <label for="courseCover"
                    class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-200 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition">
                    <div class="flex flex-col items-center justify-center pt-3 pb-4">
                      <i class="fas fa-cloud-upload-alt text-2xl text-gray-400 mb-2"></i>
                      <p class="text-sm text-gray-500">
                        <span class="font-medium">Click to upload</span>
                      </p>
                      <p class="text-xs text-gray-500">PNG, JPG or JPEG (MAX. 5MB)</p>
                    </div>
                    <input id="courseCover" name="image" type="file" class="hidden"
                      accept="image/png, image/jpeg, image/jpg, image/webp" required>
                  </label>
                </div>

                <div>
                  <label for="courseTags" class="block text-sm font-medium text-gray-700 mb-1">Tags</label>
                  <select id="courseTags" name="tags[]" multiple required
                    class="w-full px-3 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition">
                    <?php foreach ($tags as $tag): ?>
                      <option value="<?= htmlspecialchars($tag['id']) ?>"><?= htmlspecialchars($tag['name']) ?></option>
                    <?php endforeach; ?>
                  </select>
                  <p class="mt-1 text-xs text-gray-500">Hold Ctrl (Cmd on Mac) to select multiple tags</p>
                </div>
              </div>

              <div class="space-y-4">
                <div id="documentContent">
                  <label for="courseDocument" class="block text-sm font-medium text-gray-700 mb-1">Course Content</label>
                  <textarea id="courseDocument" name="text" rows="12"
                    class="w-full px-3 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-orange-500 focus:border-transparent transition resize-none"
                    placeholder="Enter your course content here"></textarea>
                </div>

                <div id="videoContent" class="hidden">
                  <label for="courseVideo" class="block text-sm font-medium text-gray-700 mb-1">Course Video</label>
                  <label for="courseVideo"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-200 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition">
                    <div class="flex flex-col items-center justify-center pt-3 pb-4">
                      <i class="fas fa-video text-2xl text-gray-400 mb-2"></i>
                      <p class="text-sm text-gray-500">
                        <span class="font-medium">Upload video file</span>
                      </p>
                      <p class="text-xs text-gray-500">MP4, MKV or WebM (MAX. 100MB)</p>
                    </div>
                    <input id="courseVideo" name="video" type="file" class="hidden" accept="video/*" required>
                  </label>
                </div>
              </div>
            </div>

            <div class="flex justify-end pt-2">
              <button type="submit"
                class="bg-[#344CB7] text-white px-6 py-2 rounded-full hover:bg-[#577BC1] transform hover:-translate-y-0.5 transition">
                Create Course
              </button>
            </div>
          </form>
        </div>

        <!-- courses -->
        <div id="manageCourses" class="contentSection hidden bg-white rounded-xl shadow-sm p-6 border border-gray-100">
          <?php if (empty($courses)): ?>
            <div class="text-center py-8 mx-auto">
              <i class="fas fa-chalkboard-teacher text-gray-400 text-4xl mb-4"></i>
              <p class="text-gray-500 mb-4">You haven’t shared your expertise yet. Start your teaching journey by adding
                your first course!</p>
              <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <h2 class="text-xl font-semibold text-gray-800">Welcome to Your Dashboard</h2>
                <p class="text-gray-600 mt-2">Get started by adding your first course.</p>
                <div class="mt-6">
                  <button data-section="newCourse"
                    class="dashboard-nav-btn bg-[#344CB7] text-white px-6 py-2 rounded-full hover:bg-[#577BC1] transform hover:-translate-y-0.5 transition">
                    Add Your First Course
                  </button>
                </div>
              </div>
            </div>
          <?php else: ?>
            <div class="overflow-x-auto mx-auto bg-white shadow-md rounded-lg w-full">
              <table class="min-w-full table-auto">
                <thead class="bg-blue-100 text-gray-800">
                  <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Title</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Type</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Category</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Created At</th>
                    <th class="px-6 py-3 text-center text-xs font-medium uppercase tracking-wider">Actions</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                  <?php foreach ($courses as $course): ?>
                    <tr class="hover:bg-gray-50">
                      <td class="px-6 py-4 text-sm text-gray-900">
                        <a href="../courses/courseDetails.php?id=<?= urlencode($course['id']) ?>"
                          class="text-gray-700 font-medium hover:text-orange-700 hover:underline focus:outline-none focus:ring-2 focus:ring-orange-500">
                          <?= htmlspecialchars($course['title']) ?>
                        </a>
                      </td>
                      <td class="px-6 py-4 text-sm text-gray-900">
                        <?= htmlspecialchars(ucfirst($course['type'])) ?>
                      </td>
                      <td class="px-6 py-4 text-sm text-gray-900">
                        <?= htmlspecialchars($course['category_name']) ?>
                      </td>
                      <td class="px-6 py-4 text-sm text-gray-900">
                        <?= date('F j, Y', strtotime($course['created_at'])) ?>
                      </td>
                      <td class="px-6 py-4 text-center text-sm font-medium">
                        <div class="flex justify-center gap-4">
                          <!-- Edit Form -->
                          <form action="editCourse.php" method="POST" class="inline">
                            <input type="hidden" name="courseId" value="<?= htmlspecialchars($course['id']) ?>">
                            <button type="submit"
                              class="text-blue-600 hover:text-blue-800 transform hover:scale-110 transition duration-200">
                              <i class="fas fa-edit"></i>
                            </button>
                          </form>
                          <!-- Delete Form -->
                          <form action="process/deleteCourse.php" method="POST" class="deleteForm inline">
                            <input type="hidden" name="courseId" value="<?= htmlspecialchars($course['id']) ?>">
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
          <?php endif; ?>
        </div>


        <!-- statistics -->
        <div id="statistics" class="contentSection hidden bg-white rounded-xl shadow-sm p-6 border border-gray-100">
          <div class="mb-8">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Course Overview</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
              <div class="bg-gradient-to-br from-purple-50 to-white p-6 rounded-xl border border-purple-100">
                <div class="flex items-center justify-between mb-4">
                  <div class="text-purple-500">
                    <i class="fas fa-graduation-cap text-2xl"></i>
                  </div>
                  <span class="text-xs font-medium text-purple-600 bg-purple-100 px-2 py-1 rounded-full">Total
                    Courses</span>
                </div>
                <div class="text-2xl font-bold text-gray-800 mb-1"><?= $totalCourses ?></div>
                <p class="text-sm text-gray-500">Your published courses</p>
              </div>

              <div class="bg-gradient-to-br from-yellow-50 to-white p-6 rounded-xl border border-yellow-100">
                <div class="flex items-center justify-between mb-4">
                  <div class="text-yellow-500">
                    <i class="fas fa-file-alt text-2xl"></i>
                  </div>
                  <span class="text-xs font-medium text-yellow-600 bg-yellow-100 px-2 py-1 rounded-full">Documents</span>
                </div>
                <div class="text-2xl font-bold text-gray-800 mb-1"><?= $totalDocumtns ?></div>
                <p class="text-sm text-gray-500">Document lessons</p>
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
                <p class="text-sm text-gray-500">Total student enrollments</p>
              </div>
            </div>
          </div>
        </div>

      <?php } elseif (!$user->isActive()) { ?>

        <!-- not approved acc -->
        <div class="bg-gray-50 flex items-center justify-center p-4">
          <div class="max-w-md w-full bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6">
              <div class="text-center mb-6">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-orange-100 rounded-full mb-4">
                  <i class="fas fa-clock text-2xl text-orange-500"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Account Pending Approval</h2>
                <p class="text-gray-600">Your teacher account is currently under review.</p>
              </div>
              <div class="bg-orange-50 rounded-lg p-4 mb-6">
                <div class="flex items-start">
                  <div class="flex-shrink-0">
                    <i class="fas fa-info-circle text-orange-500 mt-1"></i>
                  </div>
                  <div class="ml-3">
                    <p class="text-sm text-orange-700">
                      Our admin team will review your application shortly. You'll receive an email
                      notification once your account is approved.
                    </p>
                  </div>
                </div>
              </div>
              <div class="space-y-4">
                <h3 class="text-lg font-medium text-gray-900">While you wait, you can:</h3>
                <ul class="space-y-3">
                  <li class="flex items-start">
                    <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                    <span class="text-gray-600">
                      Browse available <a href="../courses/courses.php" class="text-orange-500 underline">courses</a>
                    </span>
                  </li>
                  <li class="flex items-start">
                    <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                    <span class="text-gray-600">Complete your profile information</span>
                  </li>
                  <li class="flex items-start">
                    <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                    <span class="text-gray-600">Prepare your course materials</span>
                  </li>
                </ul>
              </div>

              <div class="mt-8">
                <a href="../../index.php"
                  class="block w-full bg-orange-500 text-white text-center px-6 py-3 rounded-lg hover:bg-orange-600 transition-colors">
                  Return to Homepage
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- suspended acc -->
      <?php } elseif ($user->isSuspended()) { ?>
        <div class="bg-gray-50 flex items-center justify-center p-4">
          <div class="max-w-md w-full bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6">
              <div class="text-center mb-6">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 rounded-full mb-4">
                  <i class="fas fa-ban text-2xl text-red-500"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Account Suspended</h2>
                <p class="text-gray-600">Your account has been suspended due to a policy violation or pending
                  investigation.</p>
              </div>
              <div class="bg-red-50 rounded-lg p-4 mb-6">
                <div class="flex items-start">
                  <div class="flex-shrink-0">
                    <i class="fas fa-info-circle text-red-500 mt-1"></i>
                  </div>
                  <div class="ml-3">
                    <p class="text-sm text-red-700">
                      Please contact our support team to resolve this issue. Include any relevant details to expedite the
                      process.
                    </p>
                  </div>
                </div>
              </div>
              <div class="space-y-4">
                <h3 class="text-lg font-medium text-gray-900">You may also:</h3>
                <ul class="space-y-3">
                  <li class="flex items-start">
                    <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                    <span class="text-gray-600">Review our <a href="#" class="text-orange-500 underline">terms of
                        service</a></span>
                  </li>
                  <li class="flex items-start">
                    <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                    <span class="text-gray-600">Update your account information</span>
                  </li>
                </ul>
              </div>

              <div class="mt-8">
                <a href="../contact/contact.php"
                  class="block w-full bg-red-500 text-white text-center px-6 py-3 rounded-lg hover:bg-red-600 transition-colors">
                  Contact Support
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>

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
            <li><a href="../../index.php" class="text-gray-400 hover:text-white transition text-sm">Home</a></li>
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
  <script src="../../js/teacherDashboard.js"></script>

</body>

</html>