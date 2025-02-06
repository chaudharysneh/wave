<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Wave
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

  <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.15/index.global.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.15/index.global.min.js'></script>
</head>

<style>
  .dark-bg {
    /* background: #161f2e !important; */
    background: #1A1A27;
    /* background: #000000f0  !important; */
  }

  /* for static======== */
  .dark-bg-still{
    background: #1A1A27;
  }
/* =========== */
  .light-bg {
    background: #FEFEFE;
  }

  .dark-text {
    color: #1A1A27;
  }

  .light-text {
    /* color: #FEFEFE; */
    color: #67748e;
  }
  .light-text-still {
    color: #67748e;
  }

  .dark_cont_bg{
    background-color: #21213e;
  }
  .light_cont_bg{
    background-color: #F6F7F8;
  }

  .sidebar-dropdown {
    background: #f6f7f854;
  }

  a.nav-link:hover {
    background: #ffffff2b;
    border-radius: 8px;
  }

  .nav-link:hover,
  .sidebar-dropdown:hover {
    background: #ffffff2b;
  }

  .navbar-vertical .navbar-brand>img,
  .navbar-vertical .navbar-brand-img {
    max-height: 100px;
  }

  .search {
    width: 100%;
    position: relative;
    display: flex;
  }

  .searchTerm {
    width: 100%;
    border: none;
    border-right: none;
    padding: 10px;
    height: 35px;
    border-radius: 8px 0px 0px 8px;
    outline: none;
    color: rgba(136, 136, 136, 0.78);
    background: #e9ecef;
  }

  .searchTerm:focus {
    color: #888888;
  }

  .searchButton {
    width: 75px;
    height: 35px;
    border: none;
    background: #e9ecef;
    text-align: center;
    color: #888888;
    border-radius: 0 8px 8px 0;
    cursor: pointer;
    font-size: 20px;
  }

  .header .wrap {
    width: 30%;
    position: sticky;
    /* top: 50%;
        left: 34%;
        transform: translate(-50%, -50%); */
  }
</style>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-120 nav_br dark-bg-still position-absolute w-100"></div>
  <aside class="sidenav dark-bg-still navbar navbar-vertical navbar-expand-xs border-0 fixed-start" id="sidenav-main">
    <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-lg-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0 py-0" href="index.php " target="_blank">
        <img src="./assets/img/wavelogo.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class=" font-weight-bold h3 brandname text-white" style="margin-left: -10px;">WAVE </span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="navbarSupportedContent">
      <ul class="navbar-nav align-items-center ml-md-auto">
        <li class="nav-item my-1">
          <a class="nav-link" href="index.php">
            <div
              class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-sm light-text-still opacity-10"></i>
            </div>
            <span class="nav-link-text ms-0 light-text-still">Dashboard</span>
            <!-- <span class="nav-link-text ms-1 text-white">Dashboard</span> -->
          </a>
        </li>
        <li class="nav-item my-1">
          <div class="dropdown">
            <button class="btn dropdown-toggle sidebar-dropdown nav-link light-text-still" type="button"
              id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              <div
                class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-settings text-sm light-text-still opacity-10"></i>
              </div>Settings
            </button>
            <ul class="dropdown-menu dark-bg ps-3 mx-3 mt-2" aria-labelledby="dropdownMenuButton">
              <li class="">
                <a class="dropdown-item d-flex" href="companysettings.php">
                  <div
                    class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-building light-text-still text-sm opacity-10"></i>
                  </div><span class="mt-1 light-text-still">Edit Building Details</span>
                </a>
              </li>
              <li class="">
                <a class="dropdown-item d-flex" href="units.php">
                  <div
                    class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-building light-text-still text-sm opacity-10"></i>
                  </div><span class="mt-1 light-text-still">Apartment Units</span>
                </a>
              </li>
              <li class="">
                <a class="dropdown-item d-flex" href="profile_edit.php">
                  <div
                    class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fas fa-pencil-alt light-text-still text-sm opacity-10"></i>
                  </div><span class="mt-1 light-text-still">Edit Profile</span>
                </a>
              </li>
              <li class="">
                <a class="dropdown-item d-flex" href="change-password.php">
                  <div
                    class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-key-25 text-sm light-text-still opacity-10"></i>
                  </div><span class="mt-1 light-text-still">Change Password</span>
                </a>
              </li>

            </ul>
          </div>
        </li>
        <div class="dropdown">
          <button class="btn dropdown-toggle sidebar-dropdown1 nav-link light-text-still" type="button"
            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <div
              class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-settings light-text-still text-sm opacity-10"></i>
            </div> Apartment & Building
          </button>
          <ul class="dropdown-menu dark-bg ps-3 mx-3 mt-2" aria-labelledby="dropdownMenuButton">
            <li class="">
              <a class="dropdown-item d-flex" href="resident-and-concierge.php">
                <div
                  class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="ni ni-building light-text-still text-sm opacity-10"></i>
                </div><span class="mt-1 light-text-still">Resident and Concierge </span>
              </a>
            </li>
            <li class="">
              <a class="dropdown-item d-flex" href="message_board.php">
                <div
                  class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="ni ni-chat-round light-text-still text-sm opacity-10"></i>
                </div><span class="mt-1 light-text-still">Message Board </span>
              </a>
            </li>
          </ul>

          <li class="nav-item my-1">
            <a class="nav-link " href="services.php">
              <div
                class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-settings-gear-65 light-text-still text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1 light-text-still">Services</span>
            </a>
          </li>
          <li class="nav-item my-1">
            <a class="nav-link " href="notifications.php">
              <div
                class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-notification-70 text-sm light-text-still opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1 light-text-still">Notifications</span>
            </a>
          </li>
          <li class="nav-item my-1">
            <a class="nav-link " href="chat.php">
              <div
                class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-chat-round text-sm light-text-still opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1 light-text-still">Chat</span>
            </a>
          </li>
          <li class="nav-item my-1">
            <a class="nav-link " href="profile.php">
              <div
                class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-02 text-sm light-text-still opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1 light-text-still">Profile</span>
            </a>
          </li>
          <li class="nav-item my-1">
            <a class="nav-link " href="sign-up.php">
              <div
                class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-copy-04 text-sm light-text-still opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1 light-text-still">Sign up</span>
            </a>
          </li>
      </ul>
    </div>

  </aside>
  <main class="main-content position-relative" id="main">
    <!--<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>-->
    <header class="header-newtheme mx-4">
      <div class="top-content d-flex justify-content-between">
        <div class="greting-msg text-start light-text-still">Hello, London Wharf</div>
        <div class="d-flex gap-2">

          <button id="theme-toggle" class="theme-toggle-btn shadow-none btn btn-block mb-2 p-0">
            <a style="position: sticky;top: 1.25rem; cursor:pointer;"
              class="text-end light-text-still pt-2 px-2 rounded lock-icon">
              <i id="theme-icon" class="fas fa-sun text-primary" style="font-size: 20px;"></i>
            </a>
          </button>


          <div class="wrap">
            <div class="search">
              <input type="text" class="searchTerm" placeholder="What are you looking for?">
              <button type="submit" class="searchButton">
                <i class="fa fa-search" style="font-size: 16px;color: #161f2e;"></i>
              </button>
            </div>
          </div>


          <button type="button" class="btn btn-block btn-light px-3 py-2 mb-0" data-bs-toggle="modal"
            data-bs-target="#modal-default"><a style="color: #1A1A27;position: sticky;top: 7px;cursor:pointer;"
              class="text-end rounded lock-icon" href="index.php"><i class="fa-solid fa-plus me-1"
                style="font-size: 14px;color: #1A1A27;"></i> Add Event</a></button>

          <button type="button" class="btn btn-block mb-1 p-0" data-bs-toggle="modal" data-bs-target="#modal-default"><a
              style="position: sticky;top: 1.25rem; cursor:pointer;" class="text-end light-text-still px-2 rounded lock-icon"
              href="index.php"><i class="ni ni-bell-55 light-text-still" style="font-size: 20px;"></i></a></button>


          <button type="button" class="btn btn-block mb-1 p-0" data-bs-toggle="modal" data-bs-target="#modal-default"><a
              style="position: sticky;top: 1.25rem; cursor:pointer;"
              class="text-end light-text-still pt-2 px-2 rounded lock-icon"><i class="ni ni-single-02 light-text-still"
                style="font-size: 20px;"></i></a>
          </button>
        </div>
      </div>
      <hr class="bg-white mt-2">
      <div class="bottom-content">
        <div class="company-name">
          <h4 class="light-text-still header-head"> London Wharf - Dashboard | <span class="current-datetime"
              id="currentDatetime"></span></h4>
        </div>
      </div>
      <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default"
        aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title" id="modal-title-default">Password</h6>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" id="model_lock_form" enctype="multipart/form-data">
                <input type="hidden" name="user_id" class="user_id" value="">


                <div class="modal-body">
                  <p class="congi_name"></p>
                  <p class="cell_date"></p>

                  <!-- Dropdown Example -->
                  <div class="form-group">

                    <label for="">Password</label>
                    <input type="password" name="lock_password" class="lock_password form-control" value=""
                      style="height: 35px;"> <br>
                    <p class="lock_password_error"></p>


                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn bg-gradient-primary">Save changes</button>
                  <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            </form>
          </div>

        </div>
      </div>
    </header>
    <!-- Navbar -->

    <!-- End Navbar -->

    <script>
      // document.addEventListener("DOMContentLoaded", function () {
      //   const themeToggleBtn = document.getElementById("theme-toggle");
      //   const themeIcon = document.getElementById("theme-icon");
      //   const sidenav = document.getElementById("sidenav-main");
      //   // const navbar = document.getElementsByClassName("nav_br");
      //   const navbar = document.getElementsByClassName("nav_br")[0];

      //   // Check localStorage for the current theme
      //   const currentTheme = localStorage.getItem("theme");

      //   // Apply the stored theme on page load
      //   if (currentTheme === "light") {
      //     sidenav.classList.remove("dark-bg");
      //     sidenav.classList.add("light-bg");
      //     navbar.classList.remove("dark-bg");
      //     navbar.classList.add("light-bg");
      //     themeIcon.classList.remove("fa-moon");
      //     themeIcon.classList.add("fa-sun");
      //   } else {
      //     sidenav.classList.remove("light-bg");
      //     sidenav.classList.add("dark-bg");
      //     themeIcon.classList.remove("fa-sun");
      //     themeIcon.classList.add("fa-moon");
      //   }

      //   // Add click event listener to toggle the theme
      //   themeToggleBtn.addEventListener("click", function () {
      //     if (sidenav.classList.contains("dark-bg")) {
      //       sidenav.classList.remove("dark-bg");
      //       sidenav.classList.add("light-bg");
      //       navbar.classList.remove("dark-bg");
      //       navbar.classList.add("light-bg");
      //       themeIcon.classList.remove("fa-moon");
      //       themeIcon.classList.add("fa-sun");
      //       localStorage.setItem("theme", "light");
      //     } else {
      //       sidenav.classList.remove("light-bg");
      //       sidenav.classList.add("dark-bg");
      //       navbar.classList.remove("light-bg");
      //       navbar.classList.add("dark-bg");
      //       themeIcon.classList.remove("fa-sun");
      //       themeIcon.classList.add("fa-moon");
      //       localStorage.setItem("theme", "dark");
      //     }
      //   });
      // });

      const toggleButton = document.querySelector('.theme-toggle-btn');
      const themeIcon = document.getElementById("theme-icon");
      const currentTheme = localStorage.getItem("theme");
   
      // Jab button pe click ho, theme toggle karna hai
      toggleButton.addEventListener('click', function () {
        // Sabhi elements ko select karo jinke paas light-bg ya dark-bg class hai
        const elements = document.querySelectorAll('.light-bg, .dark-bg');
        const txtElements = document.querySelectorAll('.light-text, .dark-text');
        const cont_bgclr = document.querySelectorAll('.light_cont_bg, .dark_cont_bg');

        elements.forEach((element) => {
          // Agar element ke paas light-bg class hai, to usse dark-bg mein change karo
          if (element.classList.contains('light-bg')) {
            element.classList.remove('light-bg');
            element.classList.add('dark-bg');
            themeIcon.classList.remove("fa-moon");
            themeIcon.classList.add("fa-sun");
          } else if (element.classList.contains('dark-bg')) {
            // Agar element ke paas dark-bg class hai, to usse light-bg mein change karo
            element.classList.remove('dark-bg');
            element.classList.add('light-bg');
            themeIcon.classList.add("fa-moon");
            themeIcon.classList.remove("fa-sun");
          }
        });

        txtElements.forEach((textElement) => {
          if (textElement.classList.contains('light-text')) {
            textElement.classList.remove('light-text');
            textElement.classList.add('dark-text');
          } else if (textElement.classList.contains('dark-text')) {
            textElement.classList.remove('dark-text');
            textElement.classList.add('light-text');
          }
        });

        cont_bgclr.forEach((cont_bg) => {
          if (cont_bg.classList.contains('light_cont_bg')) {
            cont_bg.classList.remove('light_cont_bg');
            cont_bg.classList.add('dark_cont_bg');
          } else if (cont_bg.classList.contains('dark_cont_bg')) {
            cont_bg.classList.remove('dark_cont_bg');
            cont_bg.classList.add('light_cont_bg');
          }
        });
      });

    </script>