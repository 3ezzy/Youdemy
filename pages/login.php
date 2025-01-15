<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jan 2025 03:16:38 GMT -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login/Register | Edurock - Education LMS Template</title>
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

    <!-- dropdown banner -->

    </div>
    </div>
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
          <a href="login.html" class="leading-1 text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor block">My Account</a>
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
            src="../assets/images/herobanner/herobanner__3.png"
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
              Log In
            </h1>
            <ul class="flex gap-1 justify-center">
              <li>
                <a
                  href="index.html"
                  class="text-lg text-blackColor2 dark:text-blackColor2-dark">Home <i class="icofont-simple-right"></i></a>
              </li>
              <li>
                <span
                  class="text-lg text-blackColor2 dark:text-blackColor2-dark">Log In</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!--form section -->
    <section class="relative">
      <div class="container py-100px">
        <div class="tab md:w-2/3 mx-auto">
          <!-- tab controller -->

          <div
            class="tab-links grid grid-cols-2 gap-11px text-blackColor text-lg lg:text-size-22 font-semibold font-hind mb-43px mt-30px md:mt-0">
            <button
              class="py-9px lg:py-6 hover:text-primaryColor dark:text-whiteColor dark:hover:text-primaryColor bg-white dark:bg-whiteColor-dark dark:hover:bg-whiteColor-dark hover:bg-white relative group/btn shadow-bottom hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard">
              <span
                class="absolute w-full h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>

              Login
            </button>
            <button
              class="py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor bg-lightGrey7 dark:bg-lightGrey7-dark hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard">
              <span
                class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>

              Sing up
            </button>
          </div>

          <!--  tab contents -->
          <div
            class="shadow-container bg-whiteColor dark:bg-whiteColor-dark pt-10px px-5 pb-10 md:p-50px md:pt-30px rounded-5px">
            <div class="tab-contents">
              <!-- login form-->
              <div
                class="block opacity-100 transition-opacity duration-150 ease-linear">
                <!-- heading   -->
                <div class="text-center">
                  <h3
                    class="text-size-32 font-bold text-blackColor dark:text-blackColor-dark mb-2 leading-normal">
                    Login
                  </h3>
                  <p
                    class="text-contentColor dark:text-contentColor-dark mb-15px">
                    Don't have an account yet?
                    <a
                      href="login.php"
                      class="hover:text-primaryColor relative after:absolute after:left-0 after:bottom-0.5 after:w-0 after:h-0.5 after:bg-primaryColor after:transition-all after:duration-300 hover:after:w-full">Sign up for free
                    </a>
                  </p>
                </div>

                <form class="pt-25px" data-aos="fade-up">
                  <div class="mb-25px">
                    <label
                      class="text-contentColor dark:text-contentColor-dark mb-10px block">Username or email</label>
                    <input
                      type="text"
                      placeholder="Your username or email"
                      class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                  </div>

                  <div class="mb-25px">
                    <label
                      class="text-contentColor dark:text-contentColor-dark mb-10px block">Password</label>
                    <input
                      type="password"
                      placeholder="Password"
                      class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                  </div>

                  <div
                    class="text-contentColor dark:text-contentColor-dark flex items-center justify-between">
                    <div class="flex items-center">
                      <input
                        type="checkbox"
                        id="remember"
                        class="w-18px h-18px mr-2 block box-content">
                      <label for="remember"> Remember me</label>
                    </div>
                    <div>
                      <a
                        href="#"
                        class="hover:text-primaryColor relative after:absolute after:left-0 after:bottom-0.5 after:w-0 after:h-0.5 after:bg-primaryColor after:transition-all after:duration-300 hover:after:w-full">Forgot your password?
                      </a>
                    </div>
                  </div>
                  <div class="my-25px text-center">
                    <button
                      type="submit"
                      class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px w-full border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                      Log in
                    </button>
                  </div>
                  <!-- other login -->
                  <div>
                    <p
                      class="text-contentColor dark:text-contentColor-dark text-center relative mb-15px before:w-2/5 before:h-1px before:bg-borderColor4 dark:before:bg-borderColor2-dark before:absolute before:left-0 before:top-4 after:w-2/5 after:h-1px after:bg-borderColor4 dark:after:bg-borderColor2-dark after:absolute after:right-0 after:top-4">
                      or Log-in with
                    </p>
                  </div>
                  <div
                    class="text-center flex gap-x-1 md:gap-x-15px lg:gap-x-25px gap-y-5 items-center justify-center flex-wrap">
                    <button
                      type="submit"
                      class="text-size-15 text-whiteColor bg-primaryColor px-11 py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                      <i class="icofont-facebook"></i> Facebook
                    </button>
                    <button
                      type="submit"
                      class="text-size-15 text-whiteColor bg-primaryColor px-11 py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                      <i class="icofont-google-plus"></i> Google
                    </button>
                  </div>
                </form>
              </div>
              <!-- sign up form-->
              <div
                class="hidden opacity-0 transition-opacity duration-150 ease-linear">
                <!-- heading   -->
                <div class="text-center">
                  <h3
                    class="text-size-32 font-bold text-blackColor dark:text-blackColor-dark mb-2 leading-normal">
                    Sing Up
                  </h3>
                  <p
                    class="text-contentColor dark:text-contentColor-dark mb-15px">
                    Already have an account?
                    <a
                      href="login.html"
                      class="hover:text-primaryColor relative after:absolute after:left-0 after:bottom-0.5 after:w-0 after:h-0.5 after:bg-primaryColor after:transition-all after:duration-300 hover:after:w-full">Log In</a>
                  </p>
                </div>

                <form class="pt-25px" data-aos="fade-up">
                  <div
                    class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-30px gap-y-25px mb-25px">
                    <div>
                      <label
                        class="text-contentColor dark:text-contentColor-dark mb-10px block">First Name</label>
                      <input
                        type="text"
                        placeholder="First Name"
                        class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                    </div>
                    <div>
                      <label
                        class="text-contentColor dark:text-contentColor-dark mb-10px block">Last Name</label>
                      <input
                        type="text"
                        placeholder="Last Name"
                        class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                    </div>
                  </div>
                  <div
                    class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-30px gap-y-25px mb-25px">
                    <div>
                      <label
                        class="text-contentColor dark:text-contentColor-dark mb-10px block">Username</label>
                      <input
                        type="text"
                        placeholder="Username"
                        class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                    </div>
                    <div>
                      <label
                        class="text-contentColor dark:text-contentColor-dark mb-10px block">Email</label>
                      <input
                        type="email"
                        placeholder="Your Email"
                        class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                    </div>
                  </div>
                  <div
                    class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-30px gap-y-25px mb-25px">
                    <div>
                      <label
                        class="text-contentColor dark:text-contentColor-dark mb-10px block">Password</label>
                      <input
                        type="password"
                        placeholder="Password"
                        class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                    </div>
                    <div>
                      <label
                        class="text-contentColor dark:text-contentColor-dark mb-10px block">Re-Enter Password</label>
                      <input
                        type="password"
                        placeholder="Re-Enter Password"
                        class="w-full h-52px leading-52px pl-5 bg-transparent text-sm focus:outline-none text-contentColor dark:text-contentColor-dark border border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 font-medium rounded">
                    </div>
                  </div>

                  <div
                    class="text-contentColor dark:text-contentColor-dark flex items-center">
                    <input
                      type="checkbox"
                      id="accept-pp"
                      class="w-18px h-18px mr-2 block box-content">
                    <label for="accept-pp">
                      Accept the Terms and Privacy Policy</label>
                  </div>
                  <div class="mt-25px text-center">
                    <button
                      type="submit"
                      class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px w-full border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                      Log in
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- animated icons -->
      <div>
        <img
          loading="lazy"
          class="absolute right-[14%] top-[30%] animate-move-var"
          src="../assets/images/education/hero_shape2.png"
          alt="Shape">
        <img
          loading="lazy"
          class="absolute left-[5%] top-1/2 animate-move-hor"
          src="../assets/images/education/hero_shape3.png"
          alt="Shape">
        <img
          loading="lazy"
          class="absolute left-1/2 bottom-[60px] animate-spin-slow"
          src="../assets/images/education/hero_shape4.png"
          alt="Shape">
        <img
          loading="lazy"
          class="absolute left-1/2 top-10 animate-spin-slow"
          src="../assets/images/education/hero_shape5.png"
          alt="Shape">
      </div>
    </section>
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

<!-- Mirrored from html.themewin.com/edurcok-preview-tailwind/edurock/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jan 2025 03:16:42 GMT -->

</html>