<!DOCTYPE html>
<html lang="en" class="dark">

<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/course-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jan 2025 03:27:52 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Dark| Edurock - Education LMS Template</title>
    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="../assets/images/favicon.ico">
    <!-- link stylesheet -->
    <link rel="stylesheet" href="../assets/css/icofont.min.css">
    <link rel="stylesheet" href="../assets/css/popup.css">

    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/video-modal.css">
    <link rel="stylesheet" href="../assets/css/aos.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body
    class="relative font-inter font-normal text-base leading-[1.8] bg-bodyBg dark:bg-bodyBg-dark">
    <!-- preloader -->
    <div
        class="preloader flex fixed top-0 left-0 h-screen w-full items-center justify-center z-xxl bg-whiteColor opacity-100 visible transition-all duration-700">
        <!-- spinner -->
        <div
            class="w-90px h-90px border-5px border-t-blue border-r-blue border-b-blue-light border-l-blue-light rounded-full animate-spin-infinit"></div>
        <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2">
            <img src="../assets/images/pre.png" alt="Preloader" class="h-10 w-10 block">
        </div>
    </div>
    <!-- theme fixed shadow -->
    <div>
        <div class="fixed-shadow left-[-250px]"></div>
        <div class="fixed-shadow right-[-250px]"></div>
    </div>

    <!-- theme controller -->
    <div
        class="fixed top-[100px] 2xl:top-[300px] transition-all duration-300 right-[-50px] hover:right-0 z-xl">
        <button
            class="theme-controller w-90px h-10 bg-primaryColor dark:bg-whiteColor-dark rounded-l-lg2 text-whiteColor px-10px flex items-center dark:shadow-theme-controller">
            <!-- dark -->
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mr-10px w-5 block dark:hidden"
                viewBox="0 0 512 512">
                <path
                    d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z"
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="32"></path>
            </svg>
            <span class="text-base block dark:hidden">Dark</span>
            <!-- light -->
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="hidden mr-10px w-5 dark:block"
                viewBox="0 0 512 512">
                <path
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-miterlimit="10"
                    stroke-width="32"
                    d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94"></path>
                <circle
                    cx="256"
                    cy="256"
                    r="80"
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-miterlimit="10"
                    stroke-width="32"></circle>
            </svg>
            <span class="text-base hidden dark:block">Light</span>
        </button>
    </div>
    <!-- scroll up button -->
    <div>
        <button
            class="scroll-up w-50px h-50px leading-50px text-center text-primaryColor bg-white hover:text-whiteColor hover:bg-primaryColor rounded-full fixed right-5 bottom-[60px] shadow-scroll-up z-medium text-xl dark:text-whiteColor dark:bg-primaryColor dark:hover:text-whiteColor-dark hidden">
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
                                        href="contact.php"
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
                                        href="login.php"
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
          <a href="./pages/courses.php" class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor block">Courses</a>
        </li>

        <!-- Dashboard -->
        <li>
          <a href="./pages/dashboard.php" class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor block">Dashboard</a>
        </li>

        <!-- Contact Us -->
        <li>
          <a href="./pages/contact.php" class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor block">Contact Us</a>
        </li>
      </ul>
    </div>

    <!-- my account section (no dropdown) -->
    <div>
      <ul class="mt-9 mb-30px pb-9 border-b border-borderColor dark:border-borderColor-dark">
        <li>
          <a href="login.php" class="leading-1 text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor block">My Account</a>
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
    </header>

    <!-- main body -->
    <main class="bg-transparent">
        <!-- banner section -->
        <section>
            <!-- banner section -->
            <div
                class="bg-lightGrey10 dark:bg-lightGrey10-dark relative z-0 overflow-y-visible py-50px md:py-20 lg:py-100px 2xl:pb-150px 2xl:pt-40.5">
                <!-- animated icons -->
                <div>
                    <img
                        class="absolute left-0 bottom-0 md:left-[14px] lg:left-[50px] lg:bottom-[21px] 2xl:left-[165px] 2xl:bottom-[60px] animate-move-var z-10"
                        src="../assets/images/herobanner/herobanner__1.png"
                        alt=""><img
                        class="absolute left-0 top-0 lg:left-[50px] lg:top-[100px] animate-spin-slow"
                        src="../assets/images/herobanner/herobanner__2.png"
                        alt=""><img
                        class="absolute right-[30px] top-0 md:right-10 lg:right-[575px] 2xl:top-20 animate-move-var2 opacity-50 hidden md:block"
                        src="assets/images/herobanner/herobanner__3.png"
                        alt="">

                    <img
                        class="absolute right-[30px] top-[212px] md:right-10 md:top-[157px] lg:right-[45px] lg:top-[100px] animate-move-hor"
                        src="../assets/images/herobanner/herobanner__5.png"
                        alt="">
                </div>
                <div class="container">
                    <div class="text-center">
                        <h1
                            class="text-3xl md:text-size-40 2xl:text-size-55 font-bold text-blackColor dark:text-blackColor-dark mb-7 md:mb-6 pt-3">
                            Featured Courses
                        </h1>
                        <ul class="flex gap-1 justify-center">
                            <li>
                                <a
                                    href="../index.php"
                                    class="text-lg text-blackColor2 dark:text-blackColor2-dark">Home <i class="icofont-simple-right"></i></a>
                            </li>
                            <li>
                                <span
                                    class="text-lg text-blackColor2 dark:text-blackColor2-dark">Featured Course</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- courses section -->
        <div>
            <div class="container tab py-10 md:py-50px lg:py-60px 2xl:py-100px">
                <!-- courses header -->
                <div
                    class="courses-header flex justify-between items-center flex-wrap px-13px py-10px border border-borderColor dark:border-borderColor-dark mb-30px gap-y-5"
                    data-aos="fade-up">
                    <div>
                        <p class="text-blackColor dark:text-blackColor-dark">
                            Showing 1–12 of 54 Results
                        </p>
                    </div>
                    <div class="flex items-center">
                        <div
                            class="tab-links transition-all duraton-300 text-contentColor dark:text-contentColor-dark flex gap-11px">
                            <button class="inline-block hover:text-primaryColor active">
                                <i class="icofont-layout"></i>
                            </button>
                            <button class="inline-block hover:text-primaryColor">
                                <i class="icofont-listine-dots"></i>
                            </button>
                        </div>
                        <div class="pl-50px sm:pl-20 pr-10px">
                            <select


                                class="text-blackColor bg-whiteColor py-3px pr-2 pl-3 rounded-md outline-none border-4 border-transparent focus:border-blue-light box-border">
                                <option value="Short by New">Short by New</option>
                                <option value="Short by New">Short by New</option>
                                <option value="One">One</option>
                                <option value="Tow">Tow</option>
                                <option value="Three">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-12 gap-30px">
                    <!-- courses sidebar -->
                    <div class="md:col-start-1 md:col-span-4 lg:col-span-3">
                        <div class="flex flex-col">
                            <!-- search input -->
                            <div
                                class="pt-30px pr-15px pl-10px pb-23px 2xl:pt-10 2xl:pr-25px 2xl:pl-5 2xl:pb-33px mb-30px border border-borderColor dark:border-borderColor-dark"
                                data-aos="fade-up">
                                <h4
                                    class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold leading-30px mb-25px">
                                    Search here
                                </h4>
                                <form
                                    class="w-full px-4 py-15px text-sm text-contentColor bg-lightGrey10 dark:bg-lightGrey10-dark dark:text-contentColor-dark flex justify-center items-center leading-26px">
                                    <input
                                        type="text"
                                        placeholder="Search Produce"
                                        class="placeholder:text-placeholder bg-transparent focus:outline-none placeholder:opacity-80 w-full">
                                    <button type="submit">
                                        <i class="icofont-search-1 text-base"></i>
                                    </button>
                                </form>
                            </div>
                            <!-- categories -->
                            <div
                                class="pt-30px pr-15px pl-10px pb-23px 2xl:pt-10 2xl:pr-25px 2xl:pl-5 2xl:pb-33px mb-30px border border-borderColor dark:border-borderColor-dark"
                                data-aos="fade-up">
                                <h4
                                    class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold leading-30px mb-25px">
                                    categories
                                </h4>
                                <ul class="flex flex-col gap-y-4">
                                    <li
                                        class="text-contentColor hover:text-contentColor-dark hover:bg-primaryColor text-sm font-medium px-13px py-2 border border-borderColor dark:border-borderColor-dark flex justify-between leading-7 transition-all duration-300">
                                        <a href="#">Mobile Set</a> <a href="#">03</a>
                                    </li>
                                    <li
                                        class="text-contentColor hover:text-contentColor-dark hover:bg-primaryColor text-sm font-medium px-13px py-2 border border-borderColor dark:border-borderColor-dark flex justify-between leading-7 transition-all duration-300">
                                        <a href="#">Mobile Set</a> <a href="#">03</a>
                                    </li>
                                    <li
                                        class="text-contentColor hover:text-contentColor-dark hover:bg-primaryColor text-sm font-medium px-13px py-2 border border-borderColor dark:border-borderColor-dark flex justify-between leading-7 transition-all duration-300">
                                        <a href="#">Raxila Dish nonyte</a> <a href="#">09</a>
                                    </li>
                                    <li
                                        class="text-contentColor hover:text-contentColor-dark hover:bg-primaryColor text-sm font-medium px-13px py-2 border border-borderColor dark:border-borderColor-dark flex justify-between leading-7 transition-all duration-300">
                                        <a href="#">Fresh Vegetable</a> <a href="#">01</a>
                                    </li>
                                    <li
                                        class="text-contentColor hover:text-contentColor-dark hover:bg-primaryColor text-sm font-medium px-13px py-2 border border-borderColor dark:border-borderColor-dark flex justify-between leading-7 transition-all duration-300">
                                        <a href="#">Fruites</a> <a href="#">00</a>
                                    </li>
                                    <li
                                        class="text-contentColor hover:text-contentColor-dark hover:bg-primaryColor text-sm font-medium px-13px py-2 border border-borderColor dark:border-borderColor-dark flex justify-between leading-7 transition-all duration-300">
                                        <a href="#">Gesuriesey</a> <a href="#">26</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- tags -->
                            <div
                                class="pt-30px pr-15px pl-10px pb-23px 2xl:pt-10 2xl:pr-25px 2xl:pl-5 2xl:pb-33px mb-30px border border-borderColor dark:border-borderColor-dark"
                                data-aos="fade-up">
                                <h4
                                    class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold leading-30px mb-25px">
                                    Tag
                                </h4>
                                <ul class="flex flex-col gap-y-23px">
                                    <li
                                        class="text-primaryColor text-size-15 font-medium dark:text-contentColor-dark flex justify-between leading-26px group">
                                        <a href="#" class="w-full flex items-center gap-11px"><span
                                                class="w-14px h-15px border border-primaryColor bg-primaryColor group-hover:border-primaryColor group-hover:bg-primaryColor"></span>
                                            <span>Mechanic</span></a>
                                    </li>
                                    <li
                                        class="text-contentColor text-size-15 font-medium hover:text-primaryColor dark:hover:text-primaryColor dark:text-contentColor-dark flex justify-between leading-26px group">
                                        <a href="#" class="w-full flex items-center gap-11px"><span
                                                class="w-14px h-15px border border-darkdeep6 group-hover:border-primaryColor group-hover:bg-primaryColor"></span>
                                            <span>English</span></a>
                                    </li>
                                    <li
                                        class="text-contentColor text-size-15 font-medium hover:text-primaryColor dark:hover:text-primaryColor dark:text-contentColor-dark flex justify-between leading-26px group">
                                        <a href="#" class="w-full flex items-center gap-11px"><span
                                                class="w-14px h-15px border border-darkdeep6 group-hover:border-primaryColor group-hover:bg-primaryColor"></span>
                                            <span>Computer Science</span></a>
                                    </li>
                                    <li
                                        class="text-contentColor text-size-15 font-medium hover:text-primaryColor dark:hover:text-primaryColor dark:text-contentColor-dark flex justify-between leading-26px group">
                                        <a href="#" class="w-full flex items-center gap-11px"><span
                                                class="w-14px h-15px border border-darkdeep6 group-hover:border-primaryColor group-hover:bg-primaryColor"></span>
                                            <span>Data & Tech</span></a>
                                    </li>
                                    <li
                                        class="text-contentColor text-size-15 font-medium hover:text-primaryColor dark:hover:text-primaryColor dark:text-contentColor-dark flex justify-between leading-26px group">
                                        <a href="#" class="w-full flex items-center gap-11px"><span
                                                class="w-14px h-15px border border-darkdeep6 group-hover:border-primaryColor group-hover:bg-primaryColor"></span>
                                            <span>Ux Desgin</span></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- skills -->
                            <div
                                class="pt-30px pr-15px pl-10px pb-23px 2xl:pt-10 2xl:pr-25px 2xl:pl-5 2xl:pb-33px mb-30px border border-borderColor dark:border-borderColor-dark"
                                data-aos="fade-up">
                                <h4
                                    class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold leading-30px mb-25px">
                                    Skill Level
                                </h4>
                                <ul class="flex flex-col gap-y-10px">
                                    <li
                                        class="text-contentColor text-size-15 font-medium hover:text-primaryColor dark:text-contentColor-darkdark:hover:text-primaryColor flex justify-between leading-26px">
                                        <a href="#" class="w-full"> All </a>
                                    </li>
                                    <li
                                        class="text-contentColor text-size-15 font-medium hover:text-primaryColor dark:text-contentColor-darkdark:hover:text-primaryColor flex justify-between leading-26px">
                                        <a href="#" class="w-full"> Fullstack </a>
                                    </li>
                                    <li
                                        class="text-contentColor text-size-15 font-medium hover:text-primaryColor dark:text-contentColor-darkdark:hover:text-primaryColor flex justify-between leading-26px">
                                        <a href="#" class="w-full"> English Learn </a>
                                    </li>
                                    <li
                                        class="text-contentColor text-size-15 font-medium hover:text-primaryColor dark:text-contentColor-darkdark:hover:text-primaryColor flex justify-between leading-26px">
                                        <a href="#" class="w-full"> Intermediate </a>
                                    </li>
                                    <li
                                        class="text-contentColor text-size-15 font-medium hover:text-primaryColor dark:text-contentColor-darkdark:hover:text-primaryColor flex justify-between leading-26px">
                                        <a href="#" class="w-full"> Wordpress </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- courses main -->
                    <div
                        class="md:col-start-5 md:col-span-8 lg:col-start-4 lg:col-span-9 space-y-[30px]">
                        <div class="tab-contents">
                            <!-- grid ordered cards -->
                            <div
                                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-30px">
                                <!-- card 1 -->
                                <div class="group">
                                    <div class="tab-content-wrapper" data-aos="fade-up">
                                        <div
                                            class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                                            <!-- card image -->
                                            <div class="relative mb-4">
                                                <a
                                                    href="course-details.html"
                                                    class="w-full overflow-hidden rounded">
                                                    <img
                                                        src="../assets/images/grid/grid_1.png"
                                                        alt=""
                                                        class="w-full transition-all duration-300 group-hover:scale-110">
                                                </a>
                                                <div
                                                    class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                                    <div>
                                                        <p
                                                            class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor rounded font-semibold">
                                                            Data &amp; Tech
                                                        </p>
                                                    </div>
                                                    <a
                                                        class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                                        href="#"><i
                                                            class="icofont-heart-alt text-base py-1 px-2"></i></a>
                                                </div>
                                            </div>
                                            <!-- card content -->
                                            <div>
                                                <div class="grid grid-cols-2 mb-15px">
                                                    <div class="flex items-center">
                                                        <div>
                                                            <i
                                                                class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-sm text-black dark:text-blackColor-dark">23 Lesson</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div>
                                                            <i
                                                                class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-sm text-black dark:text-blackColor-dark">1 hr 30 min</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a
                                                    href="course-details.html"
                                                    class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                                    Foundation course to under stand about softwere
                                                </a>
                                                <!-- price -->
                                                <div
                                                    class="text-lg font-semibold text-primaryColor font-inter mb-4">
                                                    $32.00
                                                    <del class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                                                    <span class="ml-6"><del
                                                            class="text-base font-semibold text-secondaryColor3">Free</del></span>
                                                </div>
                                                <!-- author and rating-->
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor">
                                                    <div>
                                                        <a
                                                            href="instructor-details.html"
                                                            class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                                                                class="w-[30px] h-[30px] rounded-full mr-15px"
                                                                src="../assets/images/grid/grid_small_1.jpg"
                                                                alt="">
                                                            <span class="flex">Micle john</span>
                                                        </a>
                                                    </div>
                                                    <div class="text-start md:text-end">
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <span class="text-xs text-lightGrey6">(44)</span>
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
                                            class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                                            <!-- card image -->
                                            <div class="relative mb-4">
                                                <a
                                                    href="course-details.html"
                                                    class="w-full overflow-hidden rounded">
                                                    <img
                                                        src="../assets/images/grid/grid_2.png"
                                                        alt=""
                                                        class="w-full transition-all duration-300 group-hover:scale-110">
                                                </a>
                                                <div
                                                    class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                                    <div>
                                                        <p
                                                            class="text-xs text-whiteColor px-4 py-[3px] bg-blue rounded font-semibold">
                                                            Mechanical
                                                        </p>
                                                    </div>
                                                    <a
                                                        class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                                        href="#"><i
                                                            class="icofont-heart-alt text-base py-1 px-2"></i></a>
                                                </div>
                                            </div>
                                            <!-- card content -->
                                            <div>
                                                <div class="grid grid-cols-2 mb-15px">
                                                    <div class="flex items-center">
                                                        <div>
                                                            <i
                                                                class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-sm text-black dark:text-blackColor-dark">29 Lesson</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div>
                                                            <i
                                                                class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-sm text-black dark:text-blackColor-dark">2 hr 10 min</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a
                                                    href="course-details.html"
                                                    class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                                    Nidnies course to under stand about softwere
                                                </a>
                                                <!-- price -->
                                                <div
                                                    class="text-lg font-semibold text-primaryColor font-inter mb-4">
                                                    $32.00
                                                    <del class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                                                    <span class="ml-6"><del
                                                            class="text-base font-semibold text-greencolor">Free</del></span>
                                                </div>
                                                <!-- author and rating-->
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor">
                                                    <div>
                                                        <a
                                                            href="instructor-details.html"
                                                            class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                                                                class="w-[30px] h-[30px] rounded-full mr-15px"
                                                                src="../assets/images/grid/grid_small_2.jpg"
                                                                alt="">Rinis Jhon
                                                        </a>
                                                    </div>
                                                    <div class="text-start md:text-end">
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <span class="text-xs text-lightGrey6">(44)</span>
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
                                            class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                                            <!-- card image -->
                                            <div class="relative mb-4">
                                                <a
                                                    href="course-details.html"
                                                    class="w-full overflow-hidden rounded">
                                                    <img
                                                        src="../assets/images/grid/grid_3.png"
                                                        alt=""
                                                        class="w-full transition-all duration-300 group-hover:scale-110">
                                                </a>
                                                <div
                                                    class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                                    <div>
                                                        <p
                                                            class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor2 rounded font-semibold">
                                                            Development
                                                        </p>
                                                    </div>
                                                    <a
                                                        class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                                        href="#"><i
                                                            class="icofont-heart-alt text-base py-1 px-2"></i></a>
                                                </div>
                                            </div>
                                            <!-- card content -->
                                            <div>
                                                <div class="grid grid-cols-2 mb-15px">
                                                    <div class="flex items-center">
                                                        <div>
                                                            <i
                                                                class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-sm text-black dark:text-blackColor-dark">
                                                                25 Lesson</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div>
                                                            <i
                                                                class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-sm text-black dark:text-blackColor-dark">
                                                                1 hr 40 min</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a
                                                    href="course-details.html"
                                                    class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                                    Minws course to under stand about solution
                                                </a>
                                                <!-- price -->
                                                <div
                                                    class="text-lg font-semibold text-primaryColor font-inter mb-4">
                                                    $40.00
                                                    <del class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                                                    <span class="ml-6"><del
                                                            class="text-base font-semibold text-secondaryColor3">Free</del></span>
                                                </div>
                                                <!-- author and rating-->
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor">
                                                    <div>
                                                        <a
                                                            href="instructor-details.html"
                                                            class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                                                                class="w-[30px] h-[30px] rounded-full mr-15px"
                                                                src="../assets/images/grid/grid_small_3.jpg"
                                                                alt="">Micle John
                                                        </a>
                                                    </div>
                                                    <div class="text-start md:text-end">
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <span class="text-xs text-lightGrey6">(44)</span>
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
                                            class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                                            <!-- card image -->
                                            <div class="relative mb-4">
                                                <a
                                                    href="course-details.html"
                                                    class="w-full overflow-hidden rounded">
                                                    <img
                                                        src="../assets/images/grid/grid_4.png"
                                                        alt=""
                                                        class="w-full transition-all duration-300 group-hover:scale-110">
                                                </a>
                                                <div
                                                    class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                                    <div>
                                                        <p
                                                            class="text-xs text-whiteColor px-4 py-[3px] bg-greencolor2 rounded font-semibold">
                                                            Ui &amp; UX Design
                                                        </p>
                                                    </div>
                                                    <a
                                                        class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                                        href="#"><i
                                                            class="icofont-heart-alt text-base py-1 px-2"></i></a>
                                                </div>
                                            </div>
                                            <!-- card content -->
                                            <div>
                                                <div class="grid grid-cols-2 mb-15px">
                                                    <div class="flex items-center">
                                                        <div>
                                                            <i
                                                                class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-sm text-black dark:text-blackColor-dark">
                                                                36 Lesson</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div>
                                                            <i
                                                                class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-sm text-black dark:text-blackColor-dark">3 hr 40 min</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a
                                                    href="course-details.html"
                                                    class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                                    Design course to under stand about solution
                                                </a>
                                                <!-- price -->
                                                <div
                                                    class="text-lg font-semibold text-primaryColor font-inter mb-4">
                                                    $40.00
                                                    <del class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                                                    <span class="ml-6"><del
                                                            class="text-base font-semibold text-secondaryColor3">Free</del></span>
                                                </div>
                                                <!-- author and rating-->
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor">
                                                    <div>
                                                        <a
                                                            href="instructor-details.html"
                                                            class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                                                                class="w-[30px] h-[30px] rounded-full mr-15px"
                                                                src="../assets/images/grid/grid_small_4.jpg"
                                                                alt="">
                                                            <span class="flex flex-shrink-0">Micle Robin</span>
                                                        </a>
                                                    </div>
                                                    <div class="text-start md:text-end">
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <span class="text-xs text-lightGrey6">(44)</span>
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
                                            class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                                            <!-- card image -->
                                            <div class="relative mb-4">
                                                <a
                                                    href="course-details.html"
                                                    class="w-full overflow-hidden rounded">
                                                    <img
                                                        src="../assets/images/grid/grid_5.png"
                                                        alt=""
                                                        class="w-full transition-all duration-300 group-hover:scale-110">
                                                </a>
                                                <div
                                                    class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                                    <div>
                                                        <p
                                                            class="text-xs text-whiteColor px-4 py-[3px] bg-orange rounded font-semibold">
                                                            Data &amp; Tech
                                                        </p>
                                                    </div>
                                                    <a
                                                        class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                                        href="#"><i
                                                            class="icofont-heart-alt text-base py-1 px-2"></i></a>
                                                </div>
                                            </div>
                                            <!-- card content -->
                                            <div>
                                                <div class="grid grid-cols-2 mb-15px">
                                                    <div class="flex items-center">
                                                        <div>
                                                            <i
                                                                class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-sm text-black dark:text-blackColor-dark">36 Lesson</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div>
                                                            <i
                                                                class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-sm text-black dark:text-blackColor-dark">3 hr 40 min</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a
                                                    href="course-details.html"
                                                    class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                                    Data course to under stand about solution
                                                </a>
                                                <!-- price -->
                                                <div
                                                    class="text-lg font-semibold text-primaryColor font-inter mb-4">
                                                    $40.00
                                                    <del class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                                                    <span class="ml-6"><del
                                                            class="text-base font-semibold text-secondaryColor3">Free</del></span>
                                                </div>
                                                <!-- author and rating-->
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor">
                                                    <div>
                                                        <a
                                                            href="instructor-details.html"
                                                            class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                                                                class="w-[30px] h-[30px] rounded-full mr-15px"
                                                                src="../assets/images/grid/grid_small_1.jpg"
                                                                alt="">
                                                            <span class="flex flex-shrink-0">Micle Robin</span>
                                                        </a>
                                                    </div>
                                                    <div class="text-start md:text-end">
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <span class="text-xs text-lightGrey6">(44)</span>
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
                                            class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                                            <!-- card image -->
                                            <div class="relative mb-4">
                                                <a
                                                    href="course-details.html"
                                                    class="w-full overflow-hidden rounded">
                                                    <img
                                                        src="../assets/images/grid/grid_6.png"
                                                        alt=""
                                                        class="w-full transition-all duration-300 group-hover:scale-110">
                                                </a>
                                                <div
                                                    class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                                    <div>
                                                        <p
                                                            class="text-xs text-whiteColor px-4 py-[3px] bg-yellow rounded font-semibold">
                                                            Big Data
                                                        </p>
                                                    </div>
                                                    <a
                                                        class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                                        href="#"><i
                                                            class="icofont-heart-alt text-base py-1 px-2"></i></a>
                                                </div>
                                            </div>
                                            <!-- card content -->
                                            <div>
                                                <div class="grid grid-cols-2 mb-15px">
                                                    <div class="flex items-center">
                                                        <div>
                                                            <i
                                                                class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-sm text-black dark:text-blackColor-dark">
                                                                30 Lesson</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div>
                                                            <i
                                                                class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-sm text-black dark:text-blackColor-dark">3 hr 40 min</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a
                                                    href="course-details.html"
                                                    class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                                    Big data to under stand about solution pacage
                                                </a>
                                                <!-- price -->
                                                <div
                                                    class="text-lg font-semibold text-primaryColor font-inter mb-4">
                                                    $40.00
                                                    <del class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                                                    <span class="ml-6"><del
                                                            class="text-base font-semibold text-secondaryColor3">
                                                            Free</del></span>
                                                </div>
                                                <!-- author and rating-->
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor">
                                                    <div>
                                                        <a
                                                            href="instructor-details.html"
                                                            class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                                                                class="w-[30px] h-[30px] rounded-full mr-15px"
                                                                src="../assets/images/grid/grid_small_1.jpg"
                                                                alt="">
                                                            <span class="flex flex-shrink-0">Micle Robin</span>
                                                        </a>
                                                    </div>
                                                    <div class="text-start md:text-end">
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <span class="text-xs text-lightGrey6">(44)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- card 7 -->
                                <div class="group">
                                    <div class="tab-content-wrapper" data-aos="fade-up">
                                        <div
                                            class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                                            <!-- card image -->
                                            <div class="relative mb-4">
                                                <a
                                                    href="course-details.html"
                                                    class="w-full overflow-hidden rounded">
                                                    <img
                                                        src="../assets/images/grid/grid_1.png"
                                                        alt=""
                                                        class="w-full transition-all duration-300 group-hover:scale-110">
                                                </a>
                                                <div
                                                    class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                                    <div>
                                                        <p
                                                            class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor rounded font-semibold">
                                                            Data &amp; Tech
                                                        </p>
                                                    </div>
                                                    <a
                                                        class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                                        href="#"><i
                                                            class="icofont-heart-alt text-base py-1 px-2"></i></a>
                                                </div>
                                            </div>
                                            <!-- card content -->
                                            <div>
                                                <div class="grid grid-cols-2 mb-15px">
                                                    <div class="flex items-center">
                                                        <div>
                                                            <i
                                                                class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-sm text-black dark:text-blackColor-dark">23 Lesson</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div>
                                                            <i
                                                                class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-sm text-black dark:text-blackColor-dark">1 hr 30 min</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a
                                                    href="course-details.html"
                                                    class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                                    Foundation course to under stand about softwere
                                                </a>
                                                <!-- price -->
                                                <div
                                                    class="text-lg font-semibold text-primaryColor font-inter mb-4">
                                                    $32.00
                                                    <del class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                                                    <span class="ml-6"><del
                                                            class="text-base font-semibold text-secondaryColor3">Free</del></span>
                                                </div>
                                                <!-- author and rating-->
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor">
                                                    <div>
                                                        <a
                                                            href="instructor-details.html"
                                                            class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                                                                class="w-[30px] h-[30px] rounded-full mr-15px"
                                                                src="../assets/images/grid/grid_small_1.jpg"
                                                                alt="">
                                                            <span class="flex">Micle john</span>
                                                        </a>
                                                    </div>
                                                    <div class="text-start md:text-end">
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <span class="text-xs text-lightGrey6">(44)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- card 8 -->
                                <div class="group">
                                    <div class="tab-content-wrapper" data-aos="fade-up">
                                        <div
                                            class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                                            <!-- card image -->
                                            <div class="relative mb-4">
                                                <a
                                                    href="course-details.html"
                                                    class="w-full overflow-hidden rounded">
                                                    <img
                                                        src="../assets/images/grid/grid_2.png"
                                                        alt=""
                                                        class="w-full transition-all duration-300 group-hover:scale-110">
                                                </a>
                                                <div
                                                    class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                                    <div>
                                                        <p
                                                            class="text-xs text-whiteColor px-4 py-[3px] bg-blue rounded font-semibold">
                                                            Mechanical
                                                        </p>
                                                    </div>
                                                    <a
                                                        class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                                        href="#"><i
                                                            class="icofont-heart-alt text-base py-1 px-2"></i></a>
                                                </div>
                                            </div>
                                            <!-- card content -->
                                            <div>
                                                <div class="grid grid-cols-2 mb-15px">
                                                    <div class="flex items-center">
                                                        <div>
                                                            <i
                                                                class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-sm text-black dark:text-blackColor-dark">29 Lesson</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div>
                                                            <i
                                                                class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-sm text-black dark:text-blackColor-dark">2 hr 10 min</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a
                                                    href="course-details.html"
                                                    class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                                    Nidnies course to under stand about softwere
                                                </a>
                                                <!-- price -->
                                                <div
                                                    class="text-lg font-semibold text-primaryColor font-inter mb-4">
                                                    $32.00
                                                    <del class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                                                    <span class="ml-6"><del
                                                            class="text-base font-semibold text-greencolor">Free</del></span>
                                                </div>
                                                <!-- author and rating-->
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor">
                                                    <div>
                                                        <a
                                                            href="instructor-details.html"
                                                            class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                                                                class="w-[30px] h-[30px] rounded-full mr-15px"
                                                                src="../assets/images/grid/grid_small_2.jpg"
                                                                alt="">Rinis Jhon
                                                        </a>
                                                    </div>
                                                    <div class="text-start md:text-end">
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <span class="text-xs text-lightGrey6">(44)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- card 9 -->
                                <div class="group">
                                    <div class="tab-content-wrapper" data-aos="fade-up">
                                        <div
                                            class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                                            <!-- card image -->
                                            <div class="relative mb-4">
                                                <a
                                                    href="course-details.html"
                                                    class="w-full overflow-hidden rounded">
                                                    <img
                                                        src="../assets/images/grid/grid_3.png"
                                                        alt=""
                                                        class="w-full transition-all duration-300 group-hover:scale-110">
                                                </a>
                                                <div
                                                    class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                                    <div>
                                                        <p
                                                            class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor2 rounded font-semibold">
                                                            Development
                                                        </p>
                                                    </div>
                                                    <a
                                                        class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                                        href="#"><i
                                                            class="icofont-heart-alt text-base py-1 px-2"></i></a>
                                                </div>
                                            </div>
                                            <!-- card content -->
                                            <div>
                                                <div class="grid grid-cols-2 mb-15px">
                                                    <div class="flex items-center">
                                                        <div>
                                                            <i
                                                                class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-sm text-black dark:text-blackColor-dark">
                                                                25 Lesson</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <div>
                                                            <i
                                                                class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-sm text-black dark:text-blackColor-dark">
                                                                1 hr 40 min</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a
                                                    href="course-details.html"
                                                    class="text-lg font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                                    Minws course to under stand about solution
                                                </a>
                                                <!-- price -->
                                                <div
                                                    class="text-lg font-semibold text-primaryColor font-inter mb-4">
                                                    $40.00
                                                    <del class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                                                    <span class="ml-6"><del
                                                            class="text-base font-semibold text-secondaryColor3">Free</del></span>
                                                </div>
                                                <!-- author and rating-->
                                                <div
                                                    class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor">
                                                    <div>
                                                        <a
                                                            href="instructor-details.html"
                                                            class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                                                                class="w-[30px] h-[30px] rounded-full mr-15px"
                                                                src="../assets/images/grid/grid_small_3.jpg"
                                                                alt="">Micle John
                                                        </a>
                                                    </div>
                                                    <div class="text-start md:text-end">
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <i
                                                            class="icofont-star text-size-15 text-yellow"></i>
                                                        <span class="text-xs text-lightGrey6">(44)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- list ordered cards -->
                            <div class="hidden opacity-0 transition-all duration-300">
                                <div class="flex flex-col gap-30px">
                                    <!-- card 1 -->
                                    <div class="w-full group grid-item rounded">
                                        <div class="tab-content-wrapper" data-aos="fade-up">
                                            <div
                                                class="p-15px lg:pr-30px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark flex flex-wrap md:flex-nowrap rounded">
                                                <!-- card image -->
                                                <div class="relative overflow-hidden w-full md:w-2/5">
                                                    <a
                                                        href="course-details.html"
                                                        class="w-full overflow-hidden rounded">
                                                        <img
                                                            src="../assets/images/grid/grid_1.png"
                                                            alt=""
                                                            class="w-full transition-all duration-300 group-hover:scale-110 block">
                                                    </a>

                                                    <div
                                                        class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                                        <div>
                                                            <p
                                                                class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor rounded font-semibold capitalize">
                                                                Data &amp; Tech
                                                            </p>
                                                        </div>
                                                        <a
                                                            class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                                            href="#"><i
                                                                class="icofont-heart-alt text-base py-1 px-2"></i></a>
                                                    </div>
                                                </div>
                                                <!-- card content -->
                                                <div class="w-full md:w-3/5">
                                                    <div class="pl-0 lg:pl-30px">
                                                        <div class="grid grid-cols-2 mb-15px">
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <i
                                                                        class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                                                                </div>
                                                                <div>
                                                                    <span
                                                                        class="text-sm text-black dark:text-blackColor-dark">23 Lesson</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <i
                                                                        class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                                                                </div>
                                                                <div>
                                                                    <span
                                                                        class="text-sm text-black dark:text-blackColor-dark">1 hr 30 min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a
                                                            href="course-details.html"
                                                            class="text-size-26 leading-30px font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                                            Become a product Manager learn the skills &amp;
                                                            job.
                                                        </a>
                                                        <!-- price -->
                                                        <div
                                                            class="text-lg font-semibold text-black-brerry-light font-inter mb-4">
                                                            $32.00
                                                            <del
                                                                class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                                                            <span
                                                                class="ml-6 text-base font-semibold text-greencolor2">Free.</span>
                                                        </div>
                                                        <!-- bottom -->
                                                        <div
                                                            class="flex flex-wrap justify-between sm:flex-nowrap items-center gap-y-2 pt-15px border-t border-borderColor">
                                                            <!-- author and rating-->
                                                            <div class="flex items-center flex-wrap">
                                                                <div>
                                                                    <a
                                                                        href="instructor-details.html"
                                                                        class="text-sm font-medium font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                                                                            class="w-[30px] h-[30px] rounded-full mr-15px"
                                                                            src="../assets/images/grid/grid_small_1.jpg"
                                                                            alt="">
                                                                        <span class="flex">Micle john</span>
                                                                    </a>
                                                                </div>
                                                                <div class="text-start md:text-end ml-35px">
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>

                                                                    <span class="text-xs text-lightGrey6">(44)</span>
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <a
                                                                    class="text-sm lg:text-base text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                                                    href="course-details.html">Know Details
                                                                    <i class="icofont-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card 2 -->
                                    <div class="w-full group grid-item rounded">
                                        <div class="tab-content-wrapper" data-aos="fade-up">
                                            <div
                                                class="p-15px lg:pr-30px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark flex flex-wrap md:flex-nowrap rounded">
                                                <!-- card image -->
                                                <div class="relative overflow-hidden w-full md:w-2/5">
                                                    <a
                                                        href="course-details.html"
                                                        class="w-full overflow-hidden rounded">
                                                        <img
                                                            src="assets/images/grid/grid_3.png"
                                                            alt=""
                                                            class="w-full transition-all duration-300 group-hover:scale-110 block">
                                                    </a>
                                                    <div
                                                        class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                                        <div>
                                                            <p
                                                                class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor2 rounded font-semibold capitalize">
                                                                gridDevelopment
                                                            </p>
                                                        </div>
                                                        <a
                                                            class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                                            href="#"><i
                                                                class="icofont-heart-alt text-base py-1 px-2"></i></a>
                                                    </div>
                                                </div>
                                                <!-- card content -->
                                                <div class="w-full md:w-3/5">
                                                    <div class="pl-0 lg:pl-30px">
                                                        <div class="grid grid-cols-2 mb-15px">
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <i
                                                                        class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                                                                </div>
                                                                <div>
                                                                    <span
                                                                        class="text-sm text-black dark:text-blackColor-dark">23 Lesson</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <i
                                                                        class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                                                                </div>
                                                                <div>
                                                                    <span
                                                                        class="text-sm text-black dark:text-blackColor-dark">1 hr 30 min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a
                                                            href="course-details.html"
                                                            class="text-size-26 leading-30px font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                                            Strategy law and with for organization
                                                            Foundation
                                                        </a>
                                                        <!-- price -->
                                                        <div
                                                            class="text-lg font-semibold text-black-brerry-light font-inter mb-4">
                                                            $32.00
                                                            <del
                                                                class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                                                            <span
                                                                class="ml-6 text-base font-semibold text-greencolor2">Free.</span>
                                                        </div>
                                                        <!-- bottom -->
                                                        <div
                                                            class="flex flex-wrap justify-between sm:flex-nowrap items-center gap-y-2 pt-15px border-t border-borderColor">
                                                            <!-- author and rating-->
                                                            <div class="flex items-center flex-wrap">
                                                                <div>
                                                                    <a
                                                                        href="instructor-details.html"
                                                                        class="text-sm font-medium font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                                                                            class="w-[30px] h-[30px] rounded-full mr-15px"
                                                                            src="assets/images/grid/grid_small_1.jpg"
                                                                            alt="">
                                                                        <span class="flex">Micle john</span>
                                                                    </a>
                                                                </div>
                                                                <div class="text-start md:text-end ml-35px">
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>

                                                                    <span class="text-xs text-lightGrey6">(44)</span>
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <a
                                                                    class="text-sm lg:text-base text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                                                    href="course-details.html">Know Details
                                                                    <i class="icofont-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card 3 -->
                                    <div class="w-full group grid-item rounded">
                                        <div class="tab-content-wrapper" data-aos="fade-up">
                                            <div
                                                class="p-15px lg:pr-30px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark flex flex-wrap md:flex-nowrap rounded">
                                                <!-- card image -->
                                                <div class="relative overflow-hidden w-full md:w-2/5">
                                                    <a
                                                        href="course.html"
                                                        class="w-full overflow-hidden">
                                                        <img
                                                            src="assets/images/grid/grid_2.png"
                                                            alt=""
                                                            class="w-full transition-all duration-300 group-hover:scale-110 block">
                                                    </a>
                                                    <div
                                                        class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                                        <div>
                                                            <p
                                                                class="text-xs text-whiteColor px-4 py-[3px] bg-blue rounded font-semibold capitalize">
                                                                gridMechanical
                                                            </p>
                                                        </div>
                                                        <a
                                                            class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                                            href="#"><i
                                                                class="icofont-heart-alt text-base py-1 px-2"></i></a>
                                                    </div>
                                                </div>
                                                <!-- card content -->
                                                <div class="w-full md:w-3/5">
                                                    <div class="pl-0 lg:pl-30px">
                                                        <div class="grid grid-cols-2 mb-15px">
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <i
                                                                        class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                                                                </div>
                                                                <div>
                                                                    <span
                                                                        class="text-sm text-black dark:text-blackColor-dark">23 Lesson</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <i
                                                                        class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                                                                </div>
                                                                <div>
                                                                    <span
                                                                        class="text-sm text-black dark:text-blackColor-dark">1 hr 30 min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a
                                                            href="course-details.html"
                                                            class="text-size-26 leading-30px font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                                            Foundation course to under stand about softwere
                                                        </a>
                                                        <!-- price -->
                                                        <div
                                                            class="text-lg font-semibold text-black-brerry-light font-inter mb-4">
                                                            $32.00
                                                            <del
                                                                class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                                                            <span
                                                                class="ml-6 text-base font-semibold text-greencolor2">Free.</span>
                                                        </div>
                                                        <!-- bottom -->
                                                        <div
                                                            class="flex flex-wrap justify-between sm:flex-nowrap items-center gap-y-2 pt-15px border-t border-borderColor">
                                                            <!-- author and rating-->
                                                            <div class="flex items-center flex-wrap">
                                                                <div>
                                                                    <a
                                                                        href="instructor-details.html"
                                                                        class="text-sm font-medium font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                                                                            class="w-[30px] h-[30px] rounded-full mr-15px"
                                                                            src="assets/images/grid/grid_small_1.jpg"
                                                                            alt="">
                                                                        <span class="flex">Micle john</span>
                                                                    </a>
                                                                </div>
                                                                <div class="text-start md:text-end ml-35px">
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>

                                                                    <span class="text-xs text-lightGrey6">(44)</span>
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <a
                                                                    class="text-sm lg:text-base text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                                                    href="course-details.html">Know Details
                                                                    <i class="icofont-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card 4 -->
                                    <div class="w-full group grid-item rounded">
                                        <div class="tab-content-wrapper" data-aos="fade-up">
                                            <div
                                                class="p-15px lg:pr-30px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark flex flex-wrap md:flex-nowrap rounded">
                                                <!-- card image -->
                                                <div class="relative overflow-hidden w-full md:w-2/5">
                                                    <a
                                                        href="course-details.html"
                                                        class="w-full overflow-hidden rounded">
                                                        <img
                                                            src="../assets/images/grid/grid_4.png"
                                                            alt=""
                                                            class="w-full transition-all duration-300 group-hover:scale-110 block">
                                                    </a>
                                                    <div
                                                        class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                                        <div>
                                                            <p
                                                                class="text-xs text-whiteColor px-4 py-[3px] bg-greencolor2 rounded font-semibold capitalize">
                                                                Ui & UX Design
                                                            </p>
                                                        </div>
                                                        <a
                                                            class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                                            href="#"><i
                                                                class="icofont-heart-alt text-base py-1 px-2"></i></a>
                                                    </div>
                                                </div>
                                                <!-- card content -->
                                                <div class="w-full md:w-3/5">
                                                    <div class="pl-0 lg:pl-30px">
                                                        <div class="grid grid-cols-2 mb-15px">
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <i
                                                                        class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                                                                </div>
                                                                <div>
                                                                    <span
                                                                        class="text-sm text-black dark:text-blackColor-dark">23 Lesson</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <i
                                                                        class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                                                                </div>
                                                                <div>
                                                                    <span
                                                                        class="text-sm text-black dark:text-blackColor-dark">1 hr 30 min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a
                                                            href="course-details.html"
                                                            class="text-size-26 leading-30px font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                                            The business Intelligence analyst with Course &
                                                            2024
                                                        </a>
                                                        <!-- price -->
                                                        <div
                                                            class="text-lg font-semibold text-black-brerry-light font-inter mb-4">
                                                            $32.00
                                                            <del
                                                                class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                                                            <span
                                                                class="ml-6 text-base font-semibold text-greencolor2">Free.</span>
                                                        </div>
                                                        <!-- bottom -->
                                                        <div
                                                            class="flex flex-wrap justify-between sm:flex-nowrap items-center gap-y-2 pt-15px border-t border-borderColor">
                                                            <!-- author and rating-->
                                                            <div class="flex items-center flex-wrap">
                                                                <div>
                                                                    <a
                                                                        href="instructor-details.html"
                                                                        class="text-sm font-medium font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                                                                            class="w-[30px] h-[30px] rounded-full mr-15px"
                                                                            src="assets/images/grid/grid_small_1.jpg"
                                                                            alt="">
                                                                        <span class="flex">Micle john</span>
                                                                    </a>
                                                                </div>
                                                                <div class="text-start md:text-end ml-35px">
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>

                                                                    <span class="text-xs text-lightGrey6">(44)</span>
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <a
                                                                    class="text-sm lg:text-base text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                                                    href="course-details.html">Know Details
                                                                    <i class="icofont-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card 5 -->
                                    <div class="w-full group grid-item rounded">
                                        <div class="tab-content-wrapper" data-aos="fade-up">
                                            <div
                                                class="p-15px lg:pr-30px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark flex flex-wrap md:flex-nowrap rounded">
                                                <!-- card image -->
                                                <div class="relative overflow-hidden w-full md:w-2/5">
                                                    <a
                                                        href="course.html"
                                                        class="w-full overflow-hidden">
                                                        <img
                                                            src="../assets/images/grid/grid_5.png"
                                                            alt=""
                                                            class="w-full transition-all duration-300 group-hover:scale-110 block">
                                                    </a>
                                                    <div
                                                        class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                                        <div>
                                                            <p
                                                                class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor2 rounded font-semibold capitalize">
                                                                Data & Tech
                                                            </p>
                                                        </div>
                                                        <a
                                                            class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                                                            href="#"><i
                                                                class="icofont-heart-alt text-base py-1 px-2"></i></a>
                                                    </div>
                                                </div>
                                                <!-- card content -->
                                                <div class="w-full md:w-3/5">
                                                    <div class="pl-0 lg:pl-30px">
                                                        <div class="grid grid-cols-2 mb-15px">
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <i
                                                                        class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                                                                </div>
                                                                <div>
                                                                    <span
                                                                        class="text-sm text-black dark:text-blackColor-dark">23 Lesson</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <i
                                                                        class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                                                                </div>
                                                                <div>
                                                                    <span
                                                                        class="text-sm text-black dark:text-blackColor-dark">1 hr 30 min</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a
                                                            href="course-details.html"
                                                            class="text-size-26 leading-30px font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                                            Become a product Manager learn the skills & job.
                                                        </a>
                                                        <!-- price -->
                                                        <div
                                                            class="text-lg font-semibold text-black-brerry-light font-inter mb-4">
                                                            $32.00
                                                            <del
                                                                class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                                                            <span
                                                                class="ml-6 text-base font-semibold text-greencolor2">Free.</span>
                                                        </div>
                                                        <!-- bottom -->
                                                        <div
                                                            class="flex flex-wrap justify-between sm:flex-nowrap items-center gap-y-2 pt-15px border-t border-borderColor">
                                                            <!-- author and rating-->
                                                            <div class="flex items-center flex-wrap">
                                                                <div>
                                                                    <a
                                                                        href="instructor-details.html"
                                                                        class="text-sm font-medium font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                                                                            class="w-[30px] h-[30px] rounded-full mr-15px"
                                                                            src="assets/images/grid/grid_small_1.jpg"
                                                                            alt="">
                                                                        <span class="flex">Micle john</span>
                                                                    </a>
                                                                </div>
                                                                <div class="text-start md:text-end ml-35px">
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>
                                                                    <i
                                                                        class="icofont-star text-size-15 text-yellow"></i>

                                                                    <span class="text-xs text-lightGrey6">(44)</span>
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <a
                                                                    class="text-sm lg:text-base text-blackColor hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"
                                                                    href="course-details.html">Know Details
                                                                    <i class="icofont-arrow-right"></i></a>
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
                        <!-- pagination -->
                        <div>
                            <ul
                                class="flex items-center justify-center gap-15px mt-60px mb-30px">
                                <li>
                                    <a
                                        href="#"
                                        class="w-10 h-10 leading-10 md:w-50px md:h-50px md:leading-50px text-center text-blackColor2 hover:text-whiteColor bg-whitegrey1 hover:bg-primaryColor dark:text-blackColor2-dark dark:hover:text-whiteColor dark:bg-whitegrey1-dark dark:hover:bg-primaryColor cursor-not-allowed"><i class="icofont-double-left"></i></a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="w-10 h-10 leading-10 md:w-50px md:h-50px md:leading-50px text-center text-whiteColor hover:text-whiteColor bg-primaryColor hover:bg-primaryColor dark:text-blackColor2-dark dark:hover:text-whiteColor dark:bg-primaryColor dark:hover:bg-primaryColor">1</a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="w-10 h-10 leading-10 md:w-50px md:h-50px md:leading-50px text-center text-blackColor2 hover:text-whiteColor bg-whitegrey1 hover:bg-primaryColor dark:text-blackColor2-dark dark:hover:text-whiteColor dark:bg-whitegrey1-dark dark:hover:bg-primaryColor">2</a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="w-10 h-10 leading-10 md:w-50px md:h-50px md:leading-50px text-center text-blackColor2 hover:text-whiteColor bg-whitegrey1 hover:bg-primaryColor dark:text-blackColor2-dark dark:hover:text-whiteColor dark:bg-whitegrey1-dark dark:hover:bg-primaryColor">3</a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="w-10 h-10 leading-10 md:w-50px md:h-50px md:leading-50px text-center text-blackColor2 hover:text-whiteColor bg-whitegrey1 hover:bg-primaryColor dark:text-blackColor2-dark dark:hover:text-whiteColor dark:bg-whitegrey1-dark dark:hover:bg-primaryColor"><i class="icofont-double-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> 
    <footer class="bg-darkblack">
        <div class="container pt-65px pb-5 lg:pb-10">
            <!-- footer top or subscription -->
            <section>
                <div
                    class="grid grid-cols-1 md:grid-cols-2 gap-y-30px md:gap-y-0 items-center pb-45px border-b border-darkcolor">
                    <div data-aos="fade-up">
                        <h4
                            class="text-4xl md:text-size-25 lg:text-size-40 font-bold text-whiteColor leading-50px md:leading-10 lg:leading-16">
                            Still You Need Our
                            <span class="text-primaryColor">Support</span> ?
                        </h4>
                        <p class="text-whiteColor text-opacity-65">
                            Don’t wait make a smart & logical quote here. Its pretty easy.
                        </p>
                    </div>
                    <div data-aos="fade-up">
                        <form
                            class="max-w-form-xl md:max-w-form-md lg:max-w-form-lg xl:max-w-form-xl 2xl:max-w-form-2xl bg-deepgray ml-auto rounded relative">
                            <input
                                type="email"
                                placeholder="Enter your email here"
                                class="text-whiteColor h-62px pl-15px focus:outline-none border border-deepgray focus:border-whitegrey bg-transparent rounded w-full">
                            <button
                                type="submit"
                                class="px-3 md:px-10px lg:px-5 bg-primaryColor hover:bg-deepgray text-xs lg:text-size-15 text-whiteColor border border-primaryColor block rounded absolute right-0 top-0 h-full">
                                Subscribe Now
                            </button>
                        </form>
                    </div>
                </div>
            </section>

            <!-- footer main -->
            <section>
                <div
                    class="grid grid-cols-12 gap-30px md:gap-y-5 lg:gap-y-0 pt-60px pb-50px md:pt-30px md:pb-30px lg:pt-110px lg:pb-20">
                    <!-- left -->
                    <div
                        class="col-start-1 col-span-12 md:col-span-6 lg:col-span-4 mr-30px"
                        data-aos="fade-up">
                        <h4 class="text-size-22 font-bold text-whiteColor mb-3">
                            About us
                        </h4>
                        <p
                            class="text-base lg:text-sm 2xl:text-base text-darkgray mb-30px leading-1.8 2xl:leading-1.8">
                            orporate clients and leisure travelers has been relying on
                            Groundlink for dependable safe, and professional chauffeured car
                            end service in major cities across World.
                        </p>
                        <div class="flex items-center">
                            <div>
                                <i
                                    class="icofont-clock-time text-3xl text-whiteColor h-78px w-78px bg-primaryColor leading-78px mr-22px block text-center"></i>
                            </div>
                            <div>
                                <h6 class="text-lg text-whiteColor font-medium leading-29px">
                                    OPENING HOURES
                                </h6>
                                <p class="text-sm text-whiteColor text-opacity-60 mb-1">
                                    Mon - Sat(8.00 - 6.00)
                                </p>
                                <p class="text-sm text-whiteColor text-opacity-60">
                                    Sunday - Closed
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- middle 1 -->
                    <div
                        class="col-start-1 col-span-12 md:col-start-7 lg:col-start-5 md:col-span-6 lg:col-span-2"
                        data-aos="fade-up">
                        <h4 class="text-size-22 font-bold text-whiteColor mb-3">
                            Usefull Links
                        </h4>
                        <ul class="flex flex-col gap-y-3">
                            <li>
                                <a
                                    href="#"
                                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">About Us</a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">Teachers</a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">Partner</a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">Room-Details</a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">Gallery</a>
                            </li>
                        </ul>
                    </div>
                    <!-- middle 2 -->
                    <div
                        class="col-start-1 col-span-12 md:col-start-1 lg:col-start-7 md:col-span-6 lg:col-span-3 pl-0 2xl:pl-60px"
                        data-aos="fade-up">
                        <h4 class="text-size-22 font-bold text-whiteColor mb-3">
                            Course
                        </h4>
                        <ul class="flex flex-col gap-y-3">
                            <li>
                                <a
                                    href="#"
                                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">Ui Ux Design</a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">Web Development</a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">Business Strategy</a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">Softwere Development</a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="text-darkgray relative hover:text-primaryColor after:transition-all after:duration-300 after:w-0 after:h-2px after:absolute after:bg-primaryColor hover:after:w-full after:bottom-0 after:left-0">Business English</a>
                            </li>
                        </ul>
                    </div>
                    <!-- right -->
                    <div
                        class="col-start-1 col-span-12 md:col-start-7 lg:col-start-10 md:col-span-6 lg:col-span-3 pl-0 2xl:pl-50px"
                        data-aos="fade-up">
                        <h4 class="text-size-22 font-bold text-whiteColor mb-3">
                            Recent Post
                        </h4>
                        <ul class="flex flex-col gap-y-5">
                            <li>
                                <a class="flex items-center gap-3 group cursor-pointer">
                                    <div>
                                        <img
                                            src="../assets/images/footer/footer__1.png"
                                            alt=""
                                            class="w-61px h-54px">
                                    </div>
                                    <div>
                                        <p class="text-xs text-darkgray mb-7px">02 Apr 2024</p>
                                        <h6
                                            class="text-size-15 text-whiteColor font-bold group-hover:text-primaryColor transition-all duration-300">
                                            Best Your Business
                                        </h6>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a class="flex items-center gap-3 group cursor-pointer">
                                    <div>
                                        <img
                                            src="../assets/images/footer/footer__2.png"
                                            alt=""
                                            class="w-61px h-54px">
                                    </div>
                                    <div>
                                        <p class="text-xs text-darkgray mb-7px">02 Apr 2024</p>
                                        <h6
                                            class="text-size-15 text-whiteColor font-bold group-hover:text-primaryColor transition-all duration-300">
                                            Keep Your Business
                                        </h6>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center gap-3 group cursor-pointer">
                                    <div>
                                        <img
                                            src="../assets/images/footer/footer__3.png"
                                            alt=""
                                            class="w-61px h-54px">
                                    </div>
                                    <div>
                                        <p class="text-xs text-darkgray mb-7px">02 Apr 2024</p>
                                        <h6
                                            class="text-size-15 text-whiteColor font-bold group-hover:text-primaryColor transition-all duration-300">
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
                    class="grid grid-cols-1 lg:grid-cols-12 gap-5 lg:gap-30px pt-10 items-center">
                    <div class="lg:col-start-1 lg:col-span-3">
                        <a href="#">
                            <img src="../assets/images/logo/logo_2.png" alt="">
                        </a>
                    </div>

                    <div class="lg:col-start-4 lg:col-span-6">
                        <p class="text-whiteColor">
                            Copyright © <span class="text-primaryColor">2024 </span> by
                            edurock. All Rights Reserved.
                        </p>
                    </div>

                    <div class="lg:col-start-10 lg:col-span-3">
                        <ul class="flex gap-3 lg:gap-2 2xl:gap-3 lg:justify-end">
                            <li>
                                <a
                                    href="#"
                                    class="w-40.19px lg:w-35px 2xl:w-40.19px h-37px lg:h-35px 2xl:h-37px leading-37px lg:leading-35px 2xl:leading-37px text-whiteColor bg-whiteColor bg-opacity-10 hover:bg-primaryColor text-center"><i class="icofont-facebook"></i></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="w-40.19px lg:w-35px 2xl:w-40.19px h-37px lg:h-35px 2xl:h-37px leading-37px lg:leading-35px 2xl:leading-37px text-whiteColor bg-whiteColor bg-opacity-10 hover:bg-primaryColor text-center"><i class="icofont-twitter"></i></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="w-40.19px lg:w-35px 2xl:w-40.19px h-37px lg:h-35px 2xl:h-37px leading-37px lg:leading-35px 2xl:leading-37px text-whiteColor bg-whiteColor bg-opacity-10 hover:bg-primaryColor text-center"><i class="icofont-vimeo"></i></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="w-40.19px lg:w-35px 2xl:w-40.19px h-37px lg:h-35px 2xl:h-37px leading-37px lg:leading-35px 2xl:leading-37px text-whiteColor bg-whiteColor bg-opacity-10 hover:bg-primaryColor text-center"><i class="icofont-linkedin"></i></a>
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="w-40.19px lg:w-35px 2xl:w-40.19px h-37px lg:h-35px 2xl:h-37px leading-37px lg:leading-35px 2xl:leading-37px text-whiteColor bg-whiteColor bg-opacity-10 hover:bg-primaryColor text-center"><i class="icofont-skype"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/accordion.js"></script>
    <script src="../assets/js/chart.js"></script>
    <script src="../assets/js/count.js"></script>
    <script src="../assets/js/countdown.js"></script>
    <script src="../assets/js/counterup.js"></script>
    <script src="../assets/js/dropdown.js"></script>
    <script src="../assets/js/filter.js"></script>
    <script src="../assets/js/mobileMenu.js"></script>
    <script src="../assets/js/modal.js"></script>
    <script src="../assets/js/popup.js"></script>
    <script src="../assets/js/preloader.js"></script>
    <script src="../assets/js/scrollUp.js"></script>
    <script src="../assets/js/slider.js"></script>
    <script src="../assets/js/smoothScroll.js"></script>
    <script src="../assets/js/stickyHeader.js"></script>
    <script src="../assets/js/tabs.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="../assets/js/videoModal.js"></script>
    <script src="../assets/js/vanilla-tilt.js"></script>
    <script src="../assets/js/aos.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/course-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jan 2025 03:27:52 GMT -->

</html>