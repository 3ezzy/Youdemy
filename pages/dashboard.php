<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/pages/dashboards/student-enrolled-courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jan 2025 03:29:18 GMT -->
<head>
    <meta charset="UTF-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Student Enrolled Courses| Edurock - Education LMS Template</title>
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="../../assets/images/favicon.ico"
    >
    <!-- link stylesheet -->
    <link rel="stylesheet" href="../../assets/css/icofont.min.css" >
    <link rel="stylesheet" href="../../assets/css/popup.css" >

    <link rel="stylesheet" href="../../assets/css/swiper-bundle.min.css" >
    <link rel="stylesheet" href="../../assets/css/video-modal.css" >
    <link rel="stylesheet" href="../../assets/css/aos.css" >
    <link rel="stylesheet" href="../../assets/css/style.css" >
  </head>
  <body
    class="relative font-inter font-normal text-base leading-[1.8] bg-bodyBg dark:bg-bodyBg-dark"
  >
    <!-- preloader -->
    <div
      class="preloader flex fixed top-0 left-0 h-screen w-full items-center justify-center z-xxl bg-whiteColor opacity-100 visible transition-all duration-700"
    >
      <!-- spinner -->
      <div
        class="w-90px h-90px border-5px border-t-blue border-r-blue border-b-blue-light border-l-blue-light rounded-full animate-spin-infinit"
      ></div>
      <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2">
        <img src="../../assets/images/pre.png" alt="" class="h-10 w-10 block" >
      </div>
    </div>
    <!-- theme fixed shadow -->
    <div>
      <div class="fixed-shadow left-[-250px]"></div>
      <div class="fixed-shadow right-[-250px]"></div>
    </div>

    <!-- theme controller -->
    <div
      class="fixed top-[100px] 2xl:top-[300px] transition-all duration-300 right-[-50px] hover:right-0 z-xl"
    >
      <button
        class="theme-controller w-90px h-10 bg-primaryColor dark:bg-whiteColor-dark rounded-l-lg2 text-whiteColor px-10px flex items-center dark:shadow-theme-controller"
      >
        <!-- dark -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="mr-10px w-5 block dark:hidden"
          viewBox="0 0 512 512"
        >
          <path
            d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z"
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="32"
          ></path>
        </svg>
        <span class="text-base block dark:hidden">Dark</span>
        <!-- light -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="hidden mr-10px w-5 dark:block"
          viewBox="0 0 512 512"
        >
          <path
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-miterlimit="10"
            stroke-width="32"
            d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94"
          ></path>
          <circle
            cx="256"
            cy="256"
            r="80"
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-miterlimit="10"
            stroke-width="32"
          ></circle>
        </svg>
        <span class="text-base hidden dark:block">Light</span>
      </button>
    </div>
    <!-- scroll up button -->
    <div>
      <button
        class="scroll-up w-50px h-50px leading-50px text-center text-primaryColor bg-white hover:text-whiteColor hover:bg-primaryColor rounded-full fixed right-5 bottom-[60px] shadow-scroll-up z-medium text-xl dark:text-whiteColor dark:bg-primaryColor dark:hover:text-whiteColor-dark hidden"
      >
        <i class="icofont-rounded-up"></i>
      </button>
    </div>
    <!--======= Header area start =======-->
    <header>
      <!-- header top start -->
      
      <!-- header top end -->

      <!-- navbar start -->
      <div
      class="transition-all duration-500 sticky-header z-medium dark:bg-whiteColor-dark">
      <nav>
        <div
          class="py-15px lg:py-0 px-15px lg:container 3xl:container-secondary-lg 4xl:container mx-auto relative">
          <div class="grid grid-cols-2 lg:grid-cols-12 items-center gap-15px">
            <!-- navbar left -->
            <div class="lg:col-start-1 lg:col-span-2">
              <a href="../index.php" class="block"><img
                  src="../assets/images/logo/logo_1.png"
                  alt="Logo"
                  class="w-logo-sm lg:w-auto py-2"></a>
            </div>
            <!-- Main menu -->
            <div class="hidden lg:block lg:col-start-3 lg:col-span-7">
              <ul class="nav-list flex justify-center">
                <li class="nav-item">
                  <a
                    href="../index.php"
                    class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor hover:text-primaryColor">
                    Home
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="courses.php"
                    class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor hover:text-primaryColor">
                    Courses
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="dashboard.php"
                    class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor hover:text-primaryColor">
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="./pages/contact.php"
                    class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor hover:text-primaryColor">
                    Contact Us
                  </a>
                </li>
              </ul>
            </div>
            <!-- navbar right -->
            <div class="lg:col-start-10 lg:col-span-3">
              <ul class="relative nav-list flex justify-end items-center">

                <li class="hidden lg:block">
                  <a
                    href="./pages/login.php"
                    class="text-size-12 2xl:text-size-15 px-15px py-2 text-blackColor hover:text-whiteColor bg-whiteColor block hover:bg-primaryColor border border-borderColor1 rounded-standard font-semibold mr-[7px] 2xl:mr-15px dark:text-blackColor-dark dark:bg-whiteColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor dark:hover:border-primaryColor"><i class="icofont-user-alt-5"></i></a>
                </li>

                <li class="block lg:hidden">
                  <button
                    class="open-mobile-menu text-3xl text-darkdeep1 hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">
                    <i class="icofont-navigation-menu"></i>
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
      <!-- navbar end -->

      <!-- mobile menu -->
      <div class="mobile-menu w-mobile-menu-sm md:w-mobile-menu-lg fixed top-0 -right-[280px] md:-right-[330px] transition-all duration-500 w-mobile-menu h-full shadow-dropdown-secodary bg-whiteColor dark:bg-whiteColor-dark z-high block lg:hidden">
      <button class="close-mobile-menu text-lg bg-darkdeep1 hover:bg-secondaryColor text-white px-[11px] py-[6px] absolute top-0 right-full hidden">
        <i class="icofont icofont-close-line"></i>
      </button>
      <!-- mobile menu wrapper -->
      <div class="px-5 md:px-30px pt-5 md:pt-10 pb-50px h-full overflow-y-auto">
        <!-- search input  -->
        <div class="pb-10 border-b border-borderColor dark:border-borderColor-dark">
          <form class="flex justify-between items-center w-full bg-whitegrey2 dark:bg-whitegrey2-dark px-15px py-[11px]">
            <input type="text" placeholder="Search entire store..." class="bg-transparent w-4/5 focus:outline-none text-sm text-darkdeep1 dark:text-blackColor-dark">
            <button class="block text-lg text-darkdeep1 hover:text-secondaryColor dark:text-blackColor-dark dark:hover:text-secondaryColor">
              <i class="icofont icofont-search-2"></i>
            </button>
          </form>
        </div>

        <!-- mobile menu items (no dropdowns) -->
        <div class="pt-8 pb-6 border-b border-borderColor dark:border-borderColor-dark">
          <ul>
            <!-- Home -->
            <li>
              <a href="../index.php" class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor block">Home</a>
            </li>

            <!-- Courses -->
            <li>
              <a href="courses.php" class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor block">Courses</a>
            </li>

            <!-- Dashboard -->
            <li>
              <a href="dashboard.php" class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor block">Dashboard</a>
            </li>

            <!-- Contact Us -->
            <li>
              <a href="contact.php" class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor block">Contact Us</a>
            </li>
          </ul>
        </div>

        <!-- my account section (no dropdown) -->
        <div>
          <ul class="mt-9 mb-30px pb-9 border-b border-borderColor dark:border-borderColor-dark">
            <li>
              <a href="./pages/login.php" class="leading-1 text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor block">My Account</a>
            </li>
          </ul>
        </div>

        <!-- Mobile menu social area -->
        <div>
          <ul class="flex gap-6 items-center mb-5">
            <li>
              <a class="facebook" href="#"><i class="icofont icofont-facebook text-fb-color dark:text-whiteColor dark:hover:text-secondaryColor"></i></a>
            </li>
            <li>
              <a class="twitter" href="#"><i class="icofont icofont-twitter text-twiter-color dark:text-whiteColor dark:hover:text-secondaryColor"></i></a>
            </li>
            <li>
              <a class="pinterest" href="#"><i class="icofont icofont-pinterest dark:text-whiteColor dark:hover:text-secondaryColor"></i></a>
            </li>
            <li>
              <a class="instagram" href="#"><i class="icofont icofont-instagram dark:text-whiteColor dark:hover:text-secondaryColor"></i></a>
            </li>
            <li>
              <a class="google" href="#"><i class="icofont icofont-youtube-play dark:text-whiteColor dark:hover:text-secondaryColor"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- main body -->
    <main class="bg-transparent">
      <!-- banner section -->
      <section>
        <div class="container-fluid-2">
          <div
            class="bg-skycolor p-5 md:p-10 rounded-5 flex justify-center md:justify-between items-center flex-wrap gap-2"
          >
            <div
              class="flex items-center flex-wrap justify-center sm:justify-start"
            >
              <div class="mr-5">
                <img
                  src="../../assets/images/teacher/teacher__2.png"
                  alt=""
                  class="w-27 h-27 md:w-22 md:h-22 lg:w-27 lg:h-27 rounded-full p-1 border-2 border-darkdeep7 box-content"
                >
              </div>
              <div class="text-whiteColor font-bold text-center sm:text-start">
                <h5 class="text-2xl leading-1.24 mb-5px">Hello</h5>
                <ul class="flex items-center gap-15px">
                  <li class="text-sm font-normal flex items-center gap-0.5">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="14"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-book-open"
                    >
                      <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                      <path
                        d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"
                      ></path>
                    </svg>
                    9 Courses Enroled
                  </li>
                  <li class="text-sm font-normal flex items-center gap-0.5">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="14"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-award"
                    >
                      <circle cx="12" cy="8" r="7"></circle>
                      <polyline
                        points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"
                      ></polyline>
                    </svg>
                    8 Certificate
                  </li>
                </ul>
              </div>
            </div>

            <div>
              <a
                href="create-course.html"
                class="text-size-15 text-whiteColor bg-secondaryColor px-25px py-10px border border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor rounded group text-nowrap flex gap-1 items-center"
              >
                Create a New Course
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-arrow-right"
                >
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!--dashbord menu section -->
      <section>
        <div class="container-fluid-2">
          <div
            class="grid grid-cols-1 lg:grid-cols-12 gap-30px pt-30px pb-100px"
          >
            <div class="lg:col-start-1 lg:col-span-3">
              <!-- navigation menu -->
              <div
                class="p-30px pt-5 lg:p-5 2xl:p-30px 2xl:pt-5 rounded-lg2 shadow-accordion dark:shadow-accordion-dark bg-whiteColor dark:bg-whiteColor-dark"
              >
                <!-- greeting -->
                <h5
                  class="text-sm leading-1 font-semibold uppercase text-contentColor dark:text-contentColor-dark bg-lightGrey5 dark:bg-whiteColor-dark p-10px pb-7px mt-5 mb-10px"
                >
                  WELCOME, DOND TOND
                </h5>
                <ul>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="student-dashboard.html"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-home"
                      >
                        <path
                          d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"
                        ></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                      </svg>
                      Dashboard</a
                    >
                  </li>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="student-profile.html"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-user"
                      >
                        <path
                          d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"
                        ></path>
                        <circle cx="12" cy="7" r="4"></circle>
                      </svg>
                      My Profile</a
                    >
                  </li>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark flex justify-between items-center"
                  >
                    <a
                      href="student-message.html"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-book-open"
                      >
                        <path
                          d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"
                        ></path>
                        <path
                          d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"
                        ></path>
                      </svg>
                      Message
                    </a>
                    <span
                      class="text-size-10 font-medium text-whiteColor px-9px bg-primaryColor leading-14px rounded-2xl"
                      >12</span
                    >
                  </li>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="student-enrolled-courses.html"
                      class="text-primaryColor hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-bookmark"
                      >
                        <path
                          d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                        ></path>
                      </svg>
                      Enrolled Courses</a
                    >
                  </li>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="student-wishlist.html"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-bookmark"
                      >
                        <path
                          d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"
                        ></path>
                      </svg>
                      Wishlist</a
                    >
                  </li>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="student-reviews.html"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-star"
                      >
                        <polygon
                          points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
                        ></polygon>
                      </svg>
                      Reviews</a
                    >
                  </li>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="student-my-quiz-attempts.html"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-help-circle"
                      >
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                      </svg>
                      My Quiz Attempts</a
                    >
                  </li>
                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="student-assignments.html"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-volume-1"
                      >
                        <polygon
                          points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"
                        ></polygon>
                        <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                      </svg>
                      Assignments</a
                    >
                  </li>

                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="student-settings.html"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-settings"
                      >
                        <circle cx="12" cy="12" r="3"></circle>
                        <path
                          d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"
                        ></path>
                      </svg>
                      Settings</a
                    >
                  </li>

                  <li
                    class="py-10px border-b border-borderColor dark:border-borderColor-dark"
                  >
                    <a
                      href="#"
                      class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-volume-1"
                      >
                        <polygon
                          points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"
                        ></polygon>
                        <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                      </svg>
                      Logout</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <!-- dashboard content -->
            <div class="lg:col-start-4 lg:col-span-9">
              <!-- courses area -->
              <div
                class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-5"
              >
                <!-- heading -->
                <div
                  class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark"
                >
                  <h2
                    class="text-2xl font-bold text-blackColor dark:text-blackColor-dark"
                  >
                    My Profile
                  </h2>
                </div>
                <div class="tab">
                  <div
                    class="tab-links flex flex-wrap mb-10px lg:mb-50px rounded gap-10px"
                  >
                    <button
                      class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap active"
                    >
                      ENROLLED COURSES
                    </button>

                    <button
                      class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap"
                    >
                      ACTIVE COURSES
                    </button>

                    <button
                      class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap"
                    >
                      COMPLETED COURSES
                    </button>
                  </div>
                  <div class="tab-contents">
                    <div class="transition-all duration-300">
                      <div
                        class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-30px"
                      >
                        <!-- card 1 -->
                        <div class="group">
                          <div class="tab-content-wrapper" data-aos="fade-up">
                            <div
                              class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                            >
                              <!-- card image -->
                              <div class="relative mb-4">
                                <a
                                  href="../../course-details.html"
                                  class="w-full overflow-hidden rounded"
                                >
                                  <img
                                    src="../../assets/images/grid/grid_1.png"
                                    alt=""
                                    class="w-full transition-all duration-300 group-hover:scale-110"
                                  >
                                </a>
                                <div
                                  class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                                >
                                  <div>
                                    <p
                                      class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor rounded font-semibold"
                                    >
                                      Data &amp; Tech
                                    </p>
                                  </div>
                                  <a
                                    class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                    href="#"
                                    ><i
                                      class="icofont-heart-alt text-base py-1 px-2"
                                    ></i
                                  ></a>
                                </div>
                              </div>
                              <!-- card content -->
                              <div>
                                <div class="grid grid-cols-2 mb-15px">
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                        >23 Lesson</span
                                      >
                                    </div>
                                  </div>
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                        >1 hr 30 min</span
                                      >
                                    </div>
                                  </div>
                                </div>
                                <a
                                  href="../../course-details.html"
                                  class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                >
                                  Foundation course to under stand about
                                  softwere
                                </a>
                                <!-- price -->
                                <div
                                  class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                >
                                  $32.00
                                  <del
                                    class="text-sm text-lightGrey4 font-semibold"
                                    >/ $67.00</del
                                  >
                                  <span class="ml-6"
                                    ><del
                                      class="text-base font-semibold text-secondaryColor3"
                                      >Free</del
                                    ></span
                                  >
                                </div>
                                <!-- author and rating-->
                                <div
                                  class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                                >
                                  <div>
                                    <a
                                      href="instructor-details.html"
                                      class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                      ><img
                                        class="w-[30px] h-[30px] rounded-full mr-15px"
                                        src="../../assets/images/grid/grid_small_1.jpg"
                                        alt=""
                                      >
                                      <span class="flex">Micle john</span>
                                    </a>
                                  </div>
                                  <div class="text-start md:text-end">
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <span class="text-xs text-lightGrey6"
                                      >(44)</span
                                    >
                                  </div>
                                </div>

                                <!-- current status -->
                                <div>
                                  <div
                                    class="h-25px w-full bg-blue-x-light rounded-md relative mt-5 mb-15px"
                                  >
                                    <div
                                      class="text-center bg-primaryColor absolute top-0 left-0 w-full h-full rounded-md leading-25px"
                                    >
                                      <span
                                        class="text-size-10 text-whiteColor block leading-25px"
                                        >100% Complete</span
                                      >
                                    </div>
                                  </div>
                                  <div>
                                    <a
                                      href="create-course.html"
                                      class="text-size-15 text-whiteColor bg-secondaryColor w-full px-25px py-10px border border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor rounded group text-nowrap text-center"
                                    >
                                      Download Certificate
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- card 2 -->
                        <div class="group">
                          <div class="tab-content-wrapper" data-aos="fade-up">
                            <div
                              class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                            >
                              <!-- card image -->
                              <div class="relative mb-4">
                                <a
                                  href="../../course-details.html"
                                  class="w-full overflow-hidden rounded"
                                >
                                  <img
                                    src="../../assets/images/grid/grid_2.png"
                                    alt=""
                                    class="w-full transition-all duration-300 group-hover:scale-110"
                                  >
                                </a>
                                <div
                                  class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                                >
                                  <div>
                                    <p
                                      class="text-xs text-whiteColor px-4 py-[3px] bg-blue rounded font-semibold"
                                    >
                                      Mechanical
                                    </p>
                                  </div>
                                  <a
                                    class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                    href="#"
                                    ><i
                                      class="icofont-heart-alt text-base py-1 px-2"
                                    ></i
                                  ></a>
                                </div>
                              </div>
                              <!-- card content -->
                              <div>
                                <div class="grid grid-cols-2 mb-15px">
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                        >29 Lesson</span
                                      >
                                    </div>
                                  </div>
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                        >2 hr 10 min</span
                                      >
                                    </div>
                                  </div>
                                </div>
                                <a
                                  href="../../course-details.html"
                                  class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                >
                                  Nidnies course to under stand about softwere
                                </a>
                                <!-- price -->
                                <div
                                  class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                >
                                  $32.00
                                  <del
                                    class="text-sm text-lightGrey4 font-semibold"
                                    >/ $67.00</del
                                  >
                                  <span class="ml-6"
                                    ><del
                                      class="text-base font-semibold text-greencolor"
                                      >Free</del
                                    ></span
                                  >
                                </div>
                                <!-- author and rating-->
                                <div
                                  class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                                >
                                  <div>
                                    <a
                                      href="instructor-details.html"
                                      class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                      ><img
                                        class="w-[30px] h-[30px] rounded-full mr-15px"
                                        src="../../assets/images/grid/grid_small_2.jpg"
                                        alt=""
                                      >Rinis Jhon
                                    </a>
                                  </div>
                                  <div class="text-start md:text-end">
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <span class="text-xs text-lightGrey6"
                                      >(44)</span
                                    >
                                  </div>
                                </div>
                                <!-- current status -->
                                <div>
                                  <div
                                    class="h-25px w-full bg-blue-x-light rounded-md relative mt-5 mb-15px"
                                  >
                                    <div
                                      class="text-center bg-primaryColor absolute top-0 left-0 w-full h-full rounded-md leading-25px"
                                    >
                                      <span
                                        class="text-size-10 text-whiteColor block leading-25px"
                                        >100% Complete</span
                                      >
                                    </div>
                                  </div>
                                  <div>
                                    <a
                                      href="create-course.html"
                                      class="text-size-15 text-whiteColor bg-secondaryColor w-full px-25px py-10px border border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor rounded group text-nowrap text-center"
                                    >
                                      Download Certificate
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- card 3 -->
                        <div class="group">
                          <div class="tab-content-wrapper" data-aos="fade-up">
                            <div
                              class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                            >
                              <!-- card image -->
                              <div class="relative mb-4">
                                <a
                                  href="../../course-details.html"
                                  class="w-full overflow-hidden rounded"
                                >
                                  <img
                                    src="../../assets/images/grid/grid_3.png"
                                    alt=""
                                    class="w-full transition-all duration-300 group-hover:scale-110"
                                  >
                                </a>
                                <div
                                  class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                                >
                                  <div>
                                    <p
                                      class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor2 rounded font-semibold"
                                    >
                                      Development
                                    </p>
                                  </div>
                                  <a
                                    class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                    href="#"
                                    ><i
                                      class="icofont-heart-alt text-base py-1 px-2"
                                    ></i
                                  ></a>
                                </div>
                              </div>
                              <!-- card content -->
                              <div>
                                <div class="grid grid-cols-2 mb-15px">
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                      >
                                        25 Lesson</span
                                      >
                                    </div>
                                  </div>
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                      >
                                        1 hr 40 min</span
                                      >
                                    </div>
                                  </div>
                                </div>
                                <a
                                  href="../../course-details.html"
                                  class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                >
                                  Minws course to under stand about solution
                                </a>
                                <!-- price -->
                                <div
                                  class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                >
                                  $40.00
                                  <del
                                    class="text-sm text-lightGrey4 font-semibold"
                                    >/ $67.00</del
                                  >
                                  <span class="ml-6"
                                    ><del
                                      class="text-base font-semibold text-secondaryColor3"
                                      >Free</del
                                    ></span
                                  >
                                </div>
                                <!-- author and rating-->
                                <div
                                  class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                                >
                                  <div>
                                    <a
                                      href="instructor-details.html"
                                      class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                      ><img
                                        class="w-[30px] h-[30px] rounded-full mr-15px"
                                        src="../../assets/images/grid/grid_small_3.jpg"
                                        alt=""
                                      >Micle John
                                    </a>
                                  </div>
                                  <div class="text-start md:text-end">
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <span class="text-xs text-lightGrey6"
                                      >(44)</span
                                    >
                                  </div>
                                </div>
                                <!-- current status -->
                                <div>
                                  <div
                                    class="h-25px w-full bg-blue-x-light rounded-md relative mt-5 mb-15px"
                                  >
                                    <div
                                      class="text-center bg-primaryColor absolute top-0 left-0 w-full h-full rounded-md leading-25px"
                                    >
                                      <span
                                        class="text-size-10 text-whiteColor block leading-25px"
                                        >100% Complete</span
                                      >
                                    </div>
                                  </div>
                                  <div>
                                    <a
                                      href="create-course.html"
                                      class="text-size-15 text-whiteColor bg-secondaryColor w-full px-25px py-10px border border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor rounded group text-nowrap text-center"
                                    >
                                      Download Certificate
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- card 4 -->
                        <div class="group">
                          <div class="tab-content-wrapper" data-aos="fade-up">
                            <div
                              class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                            >
                              <!-- card image -->
                              <div class="relative mb-4">
                                <a
                                  href="../../course-details.html"
                                  class="w-full overflow-hidden rounded"
                                >
                                  <img
                                    src="../../assets/images/grid/grid_1.png"
                                    alt=""
                                    class="w-full transition-all duration-300 group-hover:scale-110"
                                  >
                                </a>
                                <div
                                  class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                                >
                                  <div>
                                    <p
                                      class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor rounded font-semibold"
                                    >
                                      Data &amp; Tech
                                    </p>
                                  </div>
                                  <a
                                    class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                    href="#"
                                    ><i
                                      class="icofont-heart-alt text-base py-1 px-2"
                                    ></i
                                  ></a>
                                </div>
                              </div>
                              <!-- card content -->
                              <div>
                                <div class="grid grid-cols-2 mb-15px">
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                        >23 Lesson</span
                                      >
                                    </div>
                                  </div>
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                        >1 hr 30 min</span
                                      >
                                    </div>
                                  </div>
                                </div>
                                <a
                                  href="../../course-details.html"
                                  class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                >
                                  Foundation course to under stand about
                                  softwere
                                </a>
                                <!-- price -->
                                <div
                                  class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                >
                                  $32.00
                                  <del
                                    class="text-sm text-lightGrey4 font-semibold"
                                    >/ $67.00</del
                                  >
                                  <span class="ml-6"
                                    ><del
                                      class="text-base font-semibold text-secondaryColor3"
                                      >Free</del
                                    ></span
                                  >
                                </div>
                                <!-- author and rating-->
                                <div
                                  class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                                >
                                  <div>
                                    <a
                                      href="instructor-details.html"
                                      class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                      ><img
                                        class="w-[30px] h-[30px] rounded-full mr-15px"
                                        src="../../assets/images/grid/grid_small_1.jpg"
                                        alt=""
                                      >
                                      <span class="flex">Micle john</span>
                                    </a>
                                  </div>
                                  <div class="text-start md:text-end">
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <span class="text-xs text-lightGrey6"
                                      >(44)</span
                                    >
                                  </div>
                                </div>
                                <!-- current status -->
                                <div>
                                  <div
                                    class="h-25px w-full bg-blue-x-light rounded-md relative mt-5 mb-15px"
                                  >
                                    <div
                                      class="text-center bg-primaryColor absolute top-0 left-0 w-4/5 h-full rounded-md leading-25px"
                                    >
                                      <span
                                        class="text-size-10 text-whiteColor leading-1.8"
                                        >80% Complete</span
                                      >
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- card 5 -->
                        <div class="group">
                          <div class="tab-content-wrapper" data-aos="fade-up">
                            <div
                              class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                            >
                              <!-- card image -->
                              <div class="relative mb-4">
                                <a
                                  href="../../course-details.html"
                                  class="w-full overflow-hidden rounded"
                                >
                                  <img
                                    src="../../assets/images/grid/grid_2.png"
                                    alt=""
                                    class="w-full transition-all duration-300 group-hover:scale-110"
                                  >
                                </a>
                                <div
                                  class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                                >
                                  <div>
                                    <p
                                      class="text-xs text-whiteColor px-4 py-[3px] bg-blue rounded font-semibold"
                                    >
                                      Mechanical
                                    </p>
                                  </div>
                                  <a
                                    class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                    href="#"
                                    ><i
                                      class="icofont-heart-alt text-base py-1 px-2"
                                    ></i
                                  ></a>
                                </div>
                              </div>
                              <!-- card content -->
                              <div>
                                <div class="grid grid-cols-2 mb-15px">
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                        >29 Lesson</span
                                      >
                                    </div>
                                  </div>
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                        >2 hr 10 min</span
                                      >
                                    </div>
                                  </div>
                                </div>
                                <a
                                  href="../../course-details.html"
                                  class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                >
                                  Nidnies course to under stand about softwere
                                </a>
                                <!-- price -->
                                <div
                                  class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                >
                                  $32.00
                                  <del
                                    class="text-sm text-lightGrey4 font-semibold"
                                    >/ $67.00</del
                                  >
                                  <span class="ml-6"
                                    ><del
                                      class="text-base font-semibold text-greencolor"
                                      >Free</del
                                    ></span
                                  >
                                </div>
                                <!-- author and rating-->
                                <div
                                  class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                                >
                                  <div>
                                    <a
                                      href="instructor-details.html"
                                      class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                      ><img
                                        class="w-[30px] h-[30px] rounded-full mr-15px"
                                        src="../../assets/images/grid/grid_small_2.jpg"
                                        alt=""
                                      >Rinis Jhon
                                    </a>
                                  </div>
                                  <div class="text-start md:text-end">
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <span class="text-xs text-lightGrey6"
                                      >(44)</span
                                    >
                                  </div>
                                </div>
                                <!-- current status -->
                                <div>
                                  <div
                                    class="h-25px w-full bg-blue-x-light rounded-md relative mt-5 mb-15px"
                                  >
                                    <div
                                      class="text-center bg-primaryColor absolute top-0 left-0 w-70% h-full rounded-md leading-25px"
                                    >
                                      <span
                                        class="text-size-10 text-whiteColor leading-1.8"
                                        >70% Complete</span
                                      >
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- card 6 -->
                        <div class="group">
                          <div class="tab-content-wrapper" data-aos="fade-up">
                            <div
                              class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                            >
                              <!-- card image -->
                              <div class="relative mb-4">
                                <a
                                  href="../../course-details.html"
                                  class="w-full overflow-hidden rounded"
                                >
                                  <img
                                    src="../../assets/images/grid/grid_8.png"
                                    alt=""
                                    class="w-full transition-all duration-300 group-hover:scale-110"
                                  >
                                </a>
                                <div
                                  class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                                >
                                  <div>
                                    <p
                                      class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor2 rounded font-semibold"
                                    >
                                      Development
                                    </p>
                                  </div>
                                  <a
                                    class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                    href="#"
                                    ><i
                                      class="icofont-heart-alt text-base py-1 px-2"
                                    ></i
                                  ></a>
                                </div>
                              </div>
                              <!-- card content -->
                              <div>
                                <div class="grid grid-cols-2 mb-15px">
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                      >
                                        25 Lesson</span
                                      >
                                    </div>
                                  </div>
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                      >
                                        1 hr 40 min</span
                                      >
                                    </div>
                                  </div>
                                </div>
                                <a
                                  href="../../course-details.html"
                                  class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                >
                                  Minws course to under stand about solution
                                </a>
                                <!-- price -->
                                <div
                                  class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                >
                                  $40.00
                                  <del
                                    class="text-sm text-lightGrey4 font-semibold"
                                    >/ $67.00</del
                                  >
                                  <span class="ml-6"
                                    ><del
                                      class="text-base font-semibold text-secondaryColor3"
                                      >Free</del
                                    ></span
                                  >
                                </div>
                                <!-- author and rating-->
                                <div
                                  class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                                >
                                  <div>
                                    <a
                                      href="instructor-details.html"
                                      class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                      ><img
                                        class="w-[30px] h-[30px] rounded-full mr-15px"
                                        src="../../assets/images/grid/grid_small_3.jpg"
                                        alt=""
                                      >Micle John
                                    </a>
                                  </div>
                                  <div class="text-start md:text-end">
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <span class="text-xs text-lightGrey6"
                                      >(44)</span
                                    >
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="hidden transition-all duration-300">
                      <div
                        class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-30px"
                      >
                        <!-- card 4 -->
                        <div class="group">
                          <div class="tab-content-wrapper" data-aos="fade-up">
                            <div
                              class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                            >
                              <!-- card image -->
                              <div class="relative mb-4">
                                <a
                                  href="../../course-details.html"
                                  class="w-full overflow-hidden rounded"
                                >
                                  <img
                                    src="../../assets/images/grid/grid_1.png"
                                    alt=""
                                    class="w-full transition-all duration-300 group-hover:scale-110"
                                  >
                                </a>
                                <div
                                  class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                                >
                                  <div>
                                    <p
                                      class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor rounded font-semibold"
                                    >
                                      Data &amp; Tech
                                    </p>
                                  </div>
                                  <a
                                    class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                    href="#"
                                    ><i
                                      class="icofont-heart-alt text-base py-1 px-2"
                                    ></i
                                  ></a>
                                </div>
                              </div>
                              <!-- card content -->
                              <div>
                                <div class="grid grid-cols-2 mb-15px">
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                        >23 Lesson</span
                                      >
                                    </div>
                                  </div>
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                        >1 hr 30 min</span
                                      >
                                    </div>
                                  </div>
                                </div>
                                <a
                                  href="../../course-details.html"
                                  class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                >
                                  Foundation course to under stand about
                                  softwere
                                </a>
                                <!-- price -->
                                <div
                                  class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                >
                                  $32.00
                                  <del
                                    class="text-sm text-lightGrey4 font-semibold"
                                    >/ $67.00</del
                                  >
                                  <span class="ml-6"
                                    ><del
                                      class="text-base font-semibold text-secondaryColor3"
                                      >Free</del
                                    ></span
                                  >
                                </div>
                                <!-- author and rating-->
                                <div
                                  class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                                >
                                  <div>
                                    <a
                                      href="instructor-details.html"
                                      class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                      ><img
                                        class="w-[30px] h-[30px] rounded-full mr-15px"
                                        src="../../assets/images/grid/grid_small_1.jpg"
                                        alt=""
                                      >
                                      <span class="flex">Micle john</span>
                                    </a>
                                  </div>
                                  <div class="text-start md:text-end">
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <span class="text-xs text-lightGrey6"
                                      >(44)</span
                                    >
                                  </div>
                                </div>
                                <!-- current status -->
                                <div>
                                  <div
                                    class="h-25px w-full bg-blue-x-light rounded-md relative mt-5 mb-15px"
                                  >
                                    <div
                                      class="text-center bg-primaryColor absolute top-0 left-0 w-4/5 h-full rounded-md leading-25px"
                                    >
                                      <span
                                        class="text-size-10 text-whiteColor leading-1.8"
                                        >80% Complete</span
                                      >
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- card 5 -->
                        <div class="group">
                          <div class="tab-content-wrapper" data-aos="fade-up">
                            <div
                              class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                            >
                              <!-- card image -->
                              <div class="relative mb-4">
                                <a
                                  href="../../course-details.html"
                                  class="w-full overflow-hidden rounded"
                                >
                                  <img
                                    src="../../assets/images/grid/grid_2.png"
                                    alt=""
                                    class="w-full transition-all duration-300 group-hover:scale-110"
                                  >
                                </a>
                                <div
                                  class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                                >
                                  <div>
                                    <p
                                      class="text-xs text-whiteColor px-4 py-[3px] bg-blue rounded font-semibold"
                                    >
                                      Mechanical
                                    </p>
                                  </div>
                                  <a
                                    class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                    href="#"
                                    ><i
                                      class="icofont-heart-alt text-base py-1 px-2"
                                    ></i
                                  ></a>
                                </div>
                              </div>
                              <!-- card content -->
                              <div>
                                <div class="grid grid-cols-2 mb-15px">
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                        >29 Lesson</span
                                      >
                                    </div>
                                  </div>
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                        >2 hr 10 min</span
                                      >
                                    </div>
                                  </div>
                                </div>
                                <a
                                  href="../../course-details.html"
                                  class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                >
                                  Nidnies course to under stand about softwere
                                </a>
                                <!-- price -->
                                <div
                                  class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                >
                                  $32.00
                                  <del
                                    class="text-sm text-lightGrey4 font-semibold"
                                    >/ $67.00</del
                                  >
                                  <span class="ml-6"
                                    ><del
                                      class="text-base font-semibold text-greencolor"
                                      >Free</del
                                    ></span
                                  >
                                </div>
                                <!-- author and rating-->
                                <div
                                  class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                                >
                                  <div>
                                    <a
                                      href="instructor-details.html"
                                      class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                      ><img
                                        class="w-[30px] h-[30px] rounded-full mr-15px"
                                        src="../../assets/images/grid/grid_small_2.jpg"
                                        alt=""
                                      >Rinis Jhon
                                    </a>
                                  </div>
                                  <div class="text-start md:text-end">
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <span class="text-xs text-lightGrey6"
                                      >(44)</span
                                    >
                                  </div>
                                </div>
                                <!-- current status -->
                                <div>
                                  <div
                                    class="h-25px w-full bg-blue-x-light rounded-md relative mt-5 mb-15px"
                                  >
                                    <div
                                      class="text-center bg-primaryColor absolute top-0 left-0 w-70% h-full rounded-md leading-25px"
                                    >
                                      <span
                                        class="text-size-10 text-whiteColor leading-1.8"
                                        >70% Complete</span
                                      >
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- card 6 -->
                        <div class="group">
                          <div class="tab-content-wrapper" data-aos="fade-up">
                            <div
                              class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                            >
                              <!-- card image -->
                              <div class="relative mb-4">
                                <a
                                  href="../../course-details.html"
                                  class="w-full overflow-hidden rounded"
                                >
                                  <img
                                    src="../../assets/images/grid/grid_8.png"
                                    alt=""
                                    class="w-full transition-all duration-300 group-hover:scale-110"
                                  >
                                </a>
                                <div
                                  class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                                >
                                  <div>
                                    <p
                                      class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor2 rounded font-semibold"
                                    >
                                      Development
                                    </p>
                                  </div>
                                  <a
                                    class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                    href="#"
                                    ><i
                                      class="icofont-heart-alt text-base py-1 px-2"
                                    ></i
                                  ></a>
                                </div>
                              </div>
                              <!-- card content -->
                              <div>
                                <div class="grid grid-cols-2 mb-15px">
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                      >
                                        25 Lesson</span
                                      >
                                    </div>
                                  </div>
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                      >
                                        1 hr 40 min</span
                                      >
                                    </div>
                                  </div>
                                </div>
                                <a
                                  href="../../course-details.html"
                                  class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                >
                                  Minws course to under stand about solution
                                </a>
                                <!-- price -->
                                <div
                                  class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                >
                                  $40.00
                                  <del
                                    class="text-sm text-lightGrey4 font-semibold"
                                    >/ $67.00</del
                                  >
                                  <span class="ml-6"
                                    ><del
                                      class="text-base font-semibold text-secondaryColor3"
                                      >Free</del
                                    ></span
                                  >
                                </div>
                                <!-- author and rating-->
                                <div
                                  class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                                >
                                  <div>
                                    <a
                                      href="instructor-details.html"
                                      class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                      ><img
                                        class="w-[30px] h-[30px] rounded-full mr-15px"
                                        src="../../assets/images/grid/grid_small_3.jpg"
                                        alt=""
                                      >Micle John
                                    </a>
                                  </div>
                                  <div class="text-start md:text-end">
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <span class="text-xs text-lightGrey6"
                                      >(44)</span
                                    >
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="hidden transition-all duration-300">
                      <div
                        class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-30px"
                      >
                        <!-- card 1 -->
                        <div class="group">
                          <div class="tab-content-wrapper" data-aos="fade-up">
                            <div
                              class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                            >
                              <!-- card image -->
                              <div class="relative mb-4">
                                <a
                                  href="../../course-details.html"
                                  class="w-full overflow-hidden rounded"
                                >
                                  <img
                                    src="../../assets/images/grid/grid_1.png"
                                    alt=""
                                    class="w-full transition-all duration-300 group-hover:scale-110"
                                  >
                                </a>
                                <div
                                  class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                                >
                                  <div>
                                    <p
                                      class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor rounded font-semibold"
                                    >
                                      Data &amp; Tech
                                    </p>
                                  </div>
                                  <a
                                    class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                    href="#"
                                    ><i
                                      class="icofont-heart-alt text-base py-1 px-2"
                                    ></i
                                  ></a>
                                </div>
                              </div>
                              <!-- card content -->
                              <div>
                                <div class="grid grid-cols-2 mb-15px">
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                        >23 Lesson</span
                                      >
                                    </div>
                                  </div>
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                        >1 hr 30 min</span
                                      >
                                    </div>
                                  </div>
                                </div>
                                <a
                                  href="../../course-details.html"
                                  class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                >
                                  Foundation course to under stand about
                                  softwere
                                </a>
                                <!-- price -->
                                <div
                                  class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                >
                                  $32.00
                                  <del
                                    class="text-sm text-lightGrey4 font-semibold"
                                    >/ $67.00</del
                                  >
                                  <span class="ml-6"
                                    ><del
                                      class="text-base font-semibold text-secondaryColor3"
                                      >Free</del
                                    ></span
                                  >
                                </div>
                                <!-- author and rating-->
                                <div
                                  class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                                >
                                  <div>
                                    <a
                                      href="instructor-details.html"
                                      class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                      ><img
                                        class="w-[30px] h-[30px] rounded-full mr-15px"
                                        src="../../assets/images/grid/grid_small_1.jpg"
                                        alt=""
                                      >
                                      <span class="flex">Micle john</span>
                                    </a>
                                  </div>
                                  <div class="text-start md:text-end">
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <span class="text-xs text-lightGrey6"
                                      >(44)</span
                                    >
                                  </div>
                                </div>

                                <!-- current status -->
                                <div>
                                  <div
                                    class="h-25px w-full bg-blue-x-light rounded-md relative mt-5 mb-15px"
                                  >
                                    <div
                                      class="text-center bg-primaryColor absolute top-0 left-0 w-full h-full rounded-md leading-25px"
                                    >
                                      <span
                                        class="text-size-10 text-whiteColor block leading-25px"
                                        >100% Complete</span
                                      >
                                    </div>
                                  </div>
                                  <div>
                                    <a
                                      href="create-course.html"
                                      class="text-size-15 text-whiteColor bg-secondaryColor w-full px-25px py-10px border border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor rounded group text-nowrap text-center"
                                    >
                                      Download Certificate
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- card 2 -->
                        <div class="group">
                          <div class="tab-content-wrapper" data-aos="fade-up">
                            <div
                              class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                            >
                              <!-- card image -->
                              <div class="relative mb-4">
                                <a
                                  href="../../course-details.html"
                                  class="w-full overflow-hidden rounded"
                                >
                                  <img
                                    src="../../assets/images/grid/grid_2.png"
                                    alt=""
                                    class="w-full transition-all duration-300 group-hover:scale-110"
                                  >
                                </a>
                                <div
                                  class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                                >
                                  <div>
                                    <p
                                      class="text-xs text-whiteColor px-4 py-[3px] bg-blue rounded font-semibold"
                                    >
                                      Mechanical
                                    </p>
                                  </div>
                                  <a
                                    class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                    href="#"
                                    ><i
                                      class="icofont-heart-alt text-base py-1 px-2"
                                    ></i
                                  ></a>
                                </div>
                              </div>
                              <!-- card content -->
                              <div>
                                <div class="grid grid-cols-2 mb-15px">
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                        >29 Lesson</span
                                      >
                                    </div>
                                  </div>
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                        >2 hr 10 min</span
                                      >
                                    </div>
                                  </div>
                                </div>
                                <a
                                  href="../../course-details.html"
                                  class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                >
                                  Nidnies course to under stand about softwere
                                </a>
                                <!-- price -->
                                <div
                                  class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                >
                                  $32.00
                                  <del
                                    class="text-sm text-lightGrey4 font-semibold"
                                    >/ $67.00</del
                                  >
                                  <span class="ml-6"
                                    ><del
                                      class="text-base font-semibold text-greencolor"
                                      >Free</del
                                    ></span
                                  >
                                </div>
                                <!-- author and rating-->
                                <div
                                  class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                                >
                                  <div>
                                    <a
                                      href="instructor-details.html"
                                      class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                      ><img
                                        class="w-[30px] h-[30px] rounded-full mr-15px"
                                        src="../../assets/images/grid/grid_small_2.jpg"
                                        alt=""
                                      >Rinis Jhon
                                    </a>
                                  </div>
                                  <div class="text-start md:text-end">
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <span class="text-xs text-lightGrey6"
                                      >(44)</span
                                    >
                                  </div>
                                </div>
                                <!-- current status -->
                                <div>
                                  <div
                                    class="h-25px w-full bg-blue-x-light rounded-md relative mt-5 mb-15px"
                                  >
                                    <div
                                      class="text-center bg-primaryColor absolute top-0 left-0 w-full h-full rounded-md leading-25px"
                                    >
                                      <span
                                        class="text-size-10 text-whiteColor block leading-25px"
                                        >100% Complete</span
                                      >
                                    </div>
                                  </div>
                                  <div>
                                    <a
                                      href="create-course.html"
                                      class="text-size-15 text-whiteColor bg-secondaryColor w-full px-25px py-10px border border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor rounded group text-nowrap text-center"
                                    >
                                      Download Certificate
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- card 3 -->
                        <div class="group">
                          <div class="tab-content-wrapper" data-aos="fade-up">
                            <div
                              class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark"
                            >
                              <!-- card image -->
                              <div class="relative mb-4">
                                <a
                                  href="../../course-details.html"
                                  class="w-full overflow-hidden rounded"
                                >
                                  <img
                                    src="../../assets/images/grid/grid_3.png"
                                    alt=""
                                    class="w-full transition-all duration-300 group-hover:scale-110"
                                  >
                                </a>
                                <div
                                  class="absolute left-0 top-1 flex justify-between w-full items-center px-2"
                                >
                                  <div>
                                    <p
                                      class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor2 rounded font-semibold"
                                    >
                                      Development
                                    </p>
                                  </div>
                                  <a
                                    class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                    href="#"
                                    ><i
                                      class="icofont-heart-alt text-base py-1 px-2"
                                    ></i
                                  ></a>
                                </div>
                              </div>
                              <!-- card content -->
                              <div>
                                <div class="grid grid-cols-2 mb-15px">
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-book-alt pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                      >
                                        25 Lesson</span
                                      >
                                    </div>
                                  </div>
                                  <div class="flex items-center">
                                    <div>
                                      <i
                                        class="icofont-clock-time pr-5px text-primaryColor text-lg"
                                      ></i>
                                    </div>
                                    <div>
                                      <span
                                        class="text-sm text-black dark:text-blackColor-dark"
                                      >
                                        1 hr 40 min</span
                                      >
                                    </div>
                                  </div>
                                </div>
                                <a
                                  href="../../course-details.html"
                                  class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor"
                                >
                                  Minws course to under stand about solution
                                </a>
                                <!-- price -->
                                <div
                                  class="text-lg font-semibold text-primaryColor font-inter mb-4"
                                >
                                  $40.00
                                  <del
                                    class="text-sm text-lightGrey4 font-semibold"
                                    >/ $67.00</del
                                  >
                                  <span class="ml-6"
                                    ><del
                                      class="text-base font-semibold text-secondaryColor3"
                                      >Free</del
                                    ></span
                                  >
                                </div>
                                <!-- author and rating-->
                                <div
                                  class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor"
                                >
                                  <div>
                                    <a
                                      href="instructor-details.html"
                                      class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                      ><img
                                        class="w-[30px] h-[30px] rounded-full mr-15px"
                                        src="../../assets/images/grid/grid_small_3.jpg"
                                        alt=""
                                      >Micle John
                                    </a>
                                  </div>
                                  <div class="text-start md:text-end">
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <i
                                      class="icofont-star text-size-15 text-yellow"
                                    ></i>
                                    <span class="text-xs text-lightGrey6"
                                      >(44)</span
                                    >
                                  </div>
                                </div>
                                <!-- current status -->
                                <div>
                                  <div
                                    class="h-25px w-full bg-blue-x-light rounded-md relative mt-5 mb-15px"
                                  >
                                    <div
                                      class="text-center bg-primaryColor absolute top-0 left-0 w-full h-full rounded-md leading-25px"
                                    >
                                      <span
                                        class="text-size-10 text-whiteColor block leading-25px"
                                        >100% Complete</span
                                      >
                                    </div>
                                  </div>
                                  <div>
                                    <a
                                      href="create-course.html"
                                      class="text-size-15 text-whiteColor bg-secondaryColor w-full px-25px py-10px border border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor rounded group text-nowrap text-center"
                                    >
                                      Download Certificate
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="bg-darkblack">
      <div class="container pt-65px">
        <!-- footer top or subscription -->
       <div>
          <div
            class="grid grid-cols-1 md:grid-cols-2 gap-y-5 md:gap-y-0 items-center pb-45px border-b border-darkcolor"
          >
            <div data-aos="fade-up">
              <a href="#"
                ><img src="../../assets/images/logo/logo_2.png" alt=""
              ></a>
            </div>
            <div>
              <form
                class="max-w-form-xl md:max-w-form-md lg:max-w-form-lg xl:max-w-form-xl 2xl:max-w-form-2xl bg-deepgray ml-auto rounded relative"
                data-aos="fade-up"
              >
                <input
                  type="email"
                  placeholder="Enter your email here"
                  class="text-whiteColor h-62px pl-15px focus:outline-none border border-deepgray focus:border-whitegrey bg-transparent rounded w-full"
                >
                <button
                  type="submit"
                  class="px-3 md:px-10px lg:px-5 bg-primaryColor hover:bg-deepgray text-xs lg:text-size-15 text-whiteColor border border-primaryColor block rounded absolute right-0 top-0 h-full"
                >
                  Subscribe Now
                </button>
              </form>
            </div>
          </div>
        </div>
        <!-- footer main -->
        <section>
          <div
            class="grid grid-cols-12 gap-30px md:gap-y-5 lg:gap-y-0 pt-60px pb-50px md:pt-30px md:pb-30px lg:pt-110px lg:pb-20 mb-5"
          >
            <!-- left -->
            <div
              class="col-start-1 col-span-12 md:col-span-6 lg:col-span-4 mr-30px"
              data-aos="fade-up"
            >
              <h4 class="text-size-22 font-bold text-whiteColor mb-3">
                About us
              </h4>
              <p
                class="text-base lg:text-sm 2xl:text-base text-darkgray mb-30px leading-1.8 2xl:leading-1.8"
              >
                orporate clients and leisure travelers has been relying on
                Groundlink for dependable safe, and professional chauffeured car
                end service in major cities across World.
              </p>
              <ul class="flex gap-3 lg:gap-2 2xl:gap-3" data-aos="fade-up">
                <li>
                  <a
                    href="#"
                    class="w-11 md:w-10 2xl:w-11 h-11 md:h-10 2xl:h-11 leading-11 md:leading-10 2xl:leading-11 text-whitegrey bg-darkgray bg-opacity-10 hover:text-whiteColor dark:text-whiteColor-dark dark:bg-whiteColor dark:hover:bg-secondaryColor dark:hover:text-whiteColor rounded-full text-center"
                    ><i class="icofont-facebook"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="#"
                    class="w-11 md:w-10 2xl:w-11 h-11 md:h-10 2xl:h-11 leading-11 md:leading-10 2xl:leading-11 text-whitegrey bg-darkgray bg-opacity-10 hover:text-whiteColor dark:text-whiteColor-dark dark:bg-whiteColor dark:hover:bg-secondaryColor dark:hover:text-whiteColor rounded-full text-center"
                    ><i class="icofont-twitter"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="#"
                    class="w-11 md:w-10 2xl:w-11 h-11 md:h-10 2xl:h-11 leading-11 md:leading-10 2xl:leading-11 text-whitegrey bg-darkgray bg-opacity-10 hover:text-whiteColor dark:text-whiteColor-dark dark:bg-whiteColor dark:hover:bg-secondaryColor dark:hover:text-whiteColor rounded-full text-center"
                    ><i class="icofont-vimeo"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="#"
                    class="w-11 md:w-10 2xl:w-11 h-11 md:h-10 2xl:h-11 leading-11 md:leading-10 2xl:leading-11 text-whitegrey bg-darkgray bg-opacity-10 hover:text-whiteColor dark:text-whiteColor-dark dark:bg-whiteColor dark:hover:bg-secondaryColor dark:hover:text-whiteColor rounded-full text-center"
                    ><i class="icofont-linkedin"></i
                  ></a>
                </li>
                <li>
                  <a
                    href="#"
                    class="w-11 md:w-10 2xl:w-11 h-11 md:h-10 2xl:h-11 leading-11 md:leading-10 2xl:leading-11 text-whitegrey bg-darkgray bg-opacity-10 hover:text-whiteColor dark:text-whiteColor-dark dark:bg-whiteColor dark:hover:bg-secondaryColor dark:hover:text-whiteColor rounded-full text-center"
                    ><i class="icofont-skype"></i
                  ></a>
                </li>
              </ul>
            </div>
            <!-- middle 1 -->
            <div
              class="col-start-1 col-span-12 md:col-start-7 lg:col-start-5 md:col-span-6 lg:col-span-2"
              data-aos="fade-up"
            >
              <h4 class="text-size-22 font-bold text-whiteColor mb-3">
                Usefull Links
              </h4>
              <ul class="flex flex-col gap-y-3">
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >About Us</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Teachers</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Partner</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Room-Details</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Gallery</a
                  >
                </li>
              </ul>
            </div>
            <!-- middle 2 -->
            <div
              class="col-start-1 col-span-12 md:col-start-1 lg:col-start-7 md:col-span-6 lg:col-span-3 pl-0 2xl:pl-60px"
              data-aos="fade-up"
            >
              <h4 class="text-size-22 font-bold text-whiteColor mb-3">
                Course
              </h4>
              <ul class="flex flex-col gap-y-3">
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Ui Ux Design</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Web Development</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Business Strategy</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Softwere Development</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0"
                    >Business English</a
                  >
                </li>
              </ul>
            </div>
            <!-- right -->
            <div
              class="col-start-1 col-span-12 md:col-start-7 lg:col-start-10 md:col-span-6 lg:col-span-3 pl-0 2xl:pl-50px"
              data-aos="fade-up"
            >
              <h4 class="text-size-22 font-bold text-whiteColor mb-3">
                Recent Post
              </h4>
              <ul class="flex flex-col gap-y-5">
                <li>
                  <a class="flex items-center gap-3 group cursor-pointer">
                    <div>
                      <img
                        src="../../assets/images/footer/footer__1.png"
                        alt=""
                        class="w-61px h-54px"
                      >
                    </div>
                    <div>
                      <p class="text-xs text-darkgray mb-7px">02 Apr 2024</p>
                      <h6
                        class="text-size-15 text-whiteColor font-bold group-hover:text-primaryColor transition-all duration-300"
                      >
                        Best Your Business
                      </h6>
                    </div>
                  </a>
                </li>

                <li>
                  <a class="flex items-center gap-3 group cursor-pointer">
                    <div>
                      <img
                        src="../../assets/images/footer/footer__2.png"
                        alt=""
                        class="w-61px h-54px"
                      >
                    </div>
                    <div>
                      <p class="text-xs text-darkgray mb-7px">02 Apr 2024</p>
                      <h6
                        class="text-size-15 text-whiteColor font-bold group-hover:text-primaryColor transition-all duration-300"
                      >
                        Keep Your Business
                      </h6>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="flex items-center gap-3 group cursor-pointer">
                    <div>
                      <img
                        src="../../assets/images/footer/footer__3.png"
                        alt=""
                        class="w-61px h-54px"
                      >
                    </div>
                    <div>
                      <p class="text-xs text-darkgray mb-7px">02 Apr 2024</p>
                      <h6
                        class="text-size-15 text-whiteColor font-bold group-hover:text-primaryColor transition-all duration-300"
                      >
                        Nice Your Business
                      </h6>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </section>

        <!-- footer copyright  -->
         <div>
          <div
            class="grid grid-cols-1 sm:grid-cols-2 gap-5 py-5 lg:py-10 items-center border-t border-darkcolor"
          >
            <div>
              <p class="text-base text-darkgray">
                © 2024 Powered by
                <a href="#" class="hover:text-primaryColor">Edurock</a>. All
                Rights Reserved.
              </p>
            </div>

            <div>
              <ul class="flex items-center justify-end">
                <li>
                  <a
                    href="#"
                    class="text-base text-darkgray hover:text-primaryColor pr-4 border-r border-darkgray leading-1"
                    >Terms of Use
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="text-base text-darkgray hover:text-primaryColor pl-4"
                  >
                    Privacy Policy
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
        <script src="../../assets/js/swiper-bundle.min.js"></script>
    <script src="../../assets/js/isotope.pkgd.min.js"></script>
    <script src="../../assets/js/accordion.js"></script>
    <script src="../../assets/js/chart.js"></script>
    <script src="../../assets/js/count.js"></script>
    <script src="../../assets/js/countdown.js"></script>
    <script src="../../assets/js/counterup.js"></script>
    <script src="../../assets/js/dropdown.js"></script>
    <script src="../../assets/js/filter.js"></script>
    <script src="../../assets/js/mobileMenu.js"></script>
    <script src="../../assets/js/modal.js"></script>
    <script src="../../assets/js/popup.js"></script>
    <script src="../../assets/js/preloader.js"></script>
    <script src="../../assets/js/scrollUp.js"></script>
    <script src="../../assets/js/slider.js"></script>
    <script src="../../assets/js/smoothScroll.js"></script>
    <script src="../../assets/js/stickyHeader.js"></script>
    <script src="../../assets/js/tabs.js"></script>
    <script src="../../assets/js/theme.js"></script>
    <script src="../../assets/js/videoModal.js"></script>
    <script  src="../../assets/js/vanilla-tilt.js"></script>
    <script  src="../../assets/js/aos.js"></script>
    <script src="../../assets/js/main.js"></script>
  </body>

<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/pages/dashboards/student-enrolled-courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jan 2025 03:29:18 GMT -->
</html>
