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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>

  <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.15/index.global.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.15/index.global.min.js'></script>
</head>

<style>
  .dark-bg {
    /* background: #161f2e !important; */
    background: #1A1A27 !important;
    /* background: #000000f0  !important; */
  }

  .dark-text {
    color: #1A1A27  !important;
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

  .navbar-vertical .navbar-brand>img, .navbar-vertical .navbar-brand-img{
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

    .bg-grey{
  background-color:#989a9c;
}
</style>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-120 dark-bg position-absolute w-100"></div>
  <aside class="sidenav dark-bg navbar navbar-vertical navbar-expand-xs border-0 fixed-start" id="sidenav-main">
    <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-lg-none" aria-hidden="true" id="iconSidenav"></i>
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
            <div class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-0 text-white">Dashboard</span>
            <!-- <span class="nav-link-text ms-1 text-white">Dashboard</span> -->
          </a>
        </li>
        <li class="nav-item my-1">
          <div class="dropdown">
            <button class="btn dropdown-toggle sidebar-dropdown nav-link text-white" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-settings text-sm opacity-10"></i>
              </div>Settings
            </button>
            <ul class="dropdown-menu dark-bg ps-3 mx-3 mt-2" aria-labelledby="dropdownMenuButton">
              <li class="">
                <a class="dropdown-item d-flex" href="companysettings.php">
                  <div class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-building text-sm opacity-10"></i>
                  </div><span class="mt-1 text-light">Edit Building Details</span>
                </a>
              </li>
              <li class="">
                <a class="dropdown-item d-flex" href="units.php">
                  <div class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-building  text-sm opacity-10"></i>
                  </div><span class="mt-1 text-light">Apartment Units</span>
                </a>
              </li>
              <li class="">
                <a class="dropdown-item d-flex" href="profile_edit.php">
                  <div class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fas fa-pencil-alt text-sm opacity-10"></i>
                  </div><span class="mt-1 text-light">Edit Profile</span>
                </a>
              </li>
              <li class="">
                <a class="dropdown-item d-flex" href="change-password.php">
                  <div class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-key-25 text-sm opacity-10"></i>
                  </div><span class="mt-1 text-light">Change Password</span>
                </a>
              </li>

            </ul>
          </div>
        </li>
        <div class="dropdown">
          <button class="btn dropdown-toggle sidebar-dropdown1 nav-link text-white" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-settings text-sm opacity-10"></i>
            </div> Apartment & Building
          </button>
          <ul class="dropdown-menu dark-bg ps-3 mx-3 mt-2" aria-labelledby="dropdownMenuButton">
            <li class="">
              <a class="dropdown-item d-flex" href="resident-and-concierge.php">
                <div class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="ni ni-building text-sm opacity-10"></i>
                </div><span class="mt-1 text-light">Resident and Concierge </span>
              </a>
            </li>
            <li class="">
              <a class="dropdown-item d-flex" href="message_board.php">
                <div class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="ni ni-chat-round text-sm opacity-10"></i>
                </div><span class="mt-1 text-light">Message Board </span>
              </a>
            </li>
          </ul>

          <li class="nav-item my-1">
            <a class="nav-link " href="services.php">
              <div class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-settings-gear-65 text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1 text-white">Services</span>
            </a>
          </li>
          <li class="nav-item my-1">
            <a class="nav-link " href="notifications.php">
              <div class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-notification-70 text-sm  opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1 text-white">Notifications</span>
            </a>
          </li>
          <li class="nav-item my-1">
            <a class="nav-link " href="chat.php">
              <div class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-chat-round text-sm  opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1 text-white">Chat</span>
            </a>
          </li>
          <li class="nav-item my-1">
            <a class="nav-link " href="profile.php">
              <div class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-02 text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1 text-white">Profile</span>
            </a>
          </li>
          <li class="nav-item my-1">
            <a class="nav-link " href="sign-up.php">
              <div class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-copy-04 text-sm  opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1 text-white">Sign up</span>
            </a>
          </li>
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link " href="login.php">-->
          <!--    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">-->
          <!--      <i class="ni ni-collection text-dark text-sm opacity-10"></i>-->
          <!--    </div>-->
          <!--    <span class="nav-link-text ms-1">Login</span>-->
          <!--  </a>-->
          <!--</li>-->
      </ul>
    </div>

  </aside>
  <main class="main-content position-relative" id="main">
    <!--<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>-->
    <header class="header-newtheme mx-4">
      <div class="top-content d-flex justify-content-between">
        <div class="greting-msg text-start text-white">Hello, London Wharf</div>
        <div class="d-flex gap-2">

        <div class="wrap">
        <div class="search">
            <input type="text" class="searchTerm" placeholder="What are you looking for?">
            <button type="submit" class="searchButton">
                <i class="fa fa-search" style="font-size: 16px;color: #161f2e;"></i>
            </button>
        </div>
    </div>

          <button type="button" class="btn btn-block btn-light px-3 py-2 mb-0" data-bs-toggle="modal" data-bs-target="#modal-default"><a style="position: sticky;top: 7px;cursor:pointer;" class="text-end dark-text rounded lock-icon" href="index.php"><i class="fa-solid fa-plus dark-text me-1" style="font-size: 14px;"></i> Add Event</a></button>

          <button type="button" class="btn btn-block mb-1 p-0" data-bs-toggle="modal" data-bs-target="#modal-default"><a style="position: sticky;top: 1.25rem; cursor:pointer;" class="text-end text-whitept-2 px-2 rounded lock-icon" href="index.php"><i class="ni ni-bell-55 text-white" style="font-size: 20px;"></i></a></button>


          <button type="button" class="btn btn-block mb-1 p-0" data-bs-toggle="modal" data-bs-target="#modal-default"><a style="position: sticky;top: 1.25rem; cursor:pointer;" class="text-end text-white pt-2 px-2 rounded lock-icon"><i class="ni ni-single-02 text-white" style="font-size: 20px;"></i></a>
          </button>
        </div>
      </div>
      <hr class="bg-white mt-2">
      <div class="bottom-content">
        <div class="company-name">
          <h4 class="text-white header-head"> London Wharf - Dashboard | <span class="current-datetime" id="currentDatetime"></span></h4>
        </div>
      </div>
      <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
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
                    <input type="password" name="lock_password" class="lock_password form-control" value="" style="height: 35px;"> <br>
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