<?php include 'header.php'; ?>

<style>
  p.text-sm.mb-0.text-uppercase.font-weight-bold {
    font-family: 'Poppins', 'Lato';
  }

  .fc-theme-standard td,
  .fc-theme-standard th {
    /* border: 1px solid rgba(226, 228, 231, 0.29); */
    /* border: 1px solid #e2e4e733; */

  }

  .fc-theme-standard .fc-scrollgrid {
    border: 1px solid #e2e4e733;
  }

  a.fc-daygrid-day-number {
    color: #344767;
  }

  h4.text-capitalize.text-light {
    font-family: 'Poppins';
    font-weight: 500;
  }

  h4.mb-0.heading-left.text-light {
    font-family: 'Poppins';
    font-weight: 500;
  }

  h4.mb-0.text-light {
    font-family: 'Poppins';
    font-weight: 500;
  }

  .font-pop {
    font-family: 'Poppins';
    font-weight: 500;
  }

  table.fc-col-header {
    background: #343434;
  }
</style>
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl d-none" id="navbarBlur"
  data-scroll="false">
  <div class="container-fluid py-1 px-3">
    <!-- 
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbarSupportedContent">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
          <input type="text" class="form-control" placeholder="Type here...">
        </div>
      </div>
      <ul class="navbar-nav  justify-content-end">

        <li class="nav-item ps-3 pe-2 d-flex align-items-center d-lg-none">
          <a href="javascript:;" class="nav-link text-dark p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line bg-dark"></i>
              <i class="sidenav-toggler-line bg-dark"></i>
              <i class="sidenav-toggler-line bg-dark"></i>
            </div>
          </a>
        </li>


        <li class="nav-item dropdown pe-2 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-dark p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
          </a>
          <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
            <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="profile-edit.php">
                My Account
              </a>
            </li>
            <li class="mb-2">

              <a href="logout.php" class="dropdown-item border-radius-md" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

              <form id="logout-form" action="https://portal.aptlymanaged.com/logout" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="vVGSrtVquaD3A1rVAmUXq1MxCOLiWpaYEbirrnMb">
              </form>

            </li>
          </ul>
        </li>

        <li class="nav-item dropdown pe-2 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-dark p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-bell cursor-pointer"></i>
          </a>
          <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
            <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex py-1">
                  <div class="my-auto">
                    <img src="./assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm font-weight-normal mb-1">
                      <span class="font-weight-bold">New message</span> from Laur
                    </h6>
                    <p class="text-xs text-secondary mb-0">
                      <i class="fa fa-clock me-1"></i>
                      13 minutes ago
                    </p>
                  </div>
                </div>
              </a>
            </li>
            <li class="mb-2">
              <a class="dropdown-item border-radius-md" href="javascript:;">
                <div class="d-flex py-1">
                  <div class="my-auto">
                    <img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="text-sm font-weight-normal mb-1">
                      <span class="font-weight-bold">New album</span> by Travis Scott
                    </h6>
                    <p class="text-xs text-secondary mb-0">
                      <i class="fa fa-clock me-1"></i>
                      1 day
                    </p>
                  </div>
                </div>
              </a>
            </li>

          </ul>
        </li>
      </ul>
    </div> -->
  </div>
</nav>

<!-- <div class="container-fluid py-4" style="background-color: #000000e0;"> -->
<div class="container-fluid py-4 dark_cont_bg" >
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card"
        style="background-image: linear-gradient(310deg, #e8ebef 0%, #95c7fd 100%); border-radius: 15px;">
        <!-- <div class="card" style="border-radius: 15px;"> -->
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Message Board</p>
                <h5 class="font-weight-bolder">
                  5300
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <i class="ni ni-money-coins text-lg text-white opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card" style="background-image: linear-gradient(310deg, #eddde0 0%, #ffbfad 100%);
    border-radius: 15px;">
        <!-- <div class="card" style="border-radius: 15px;"> -->
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Services</p>
                <h5 class="font-weight-bolder">
                  2,300
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                <i class="ni ni-world text-lg text-white opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card"
        style="background-image: linear-gradient(310deg, #d9efe8 0%, #a6dfcf 100%); border-radius: 15px;">
        <!-- <div class="card" style="border-radius: 15px;"> -->
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Notifications</p>
                <h5 class="font-weight-bolder">
                  +3,462
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                <i class="ni ni-paper-diploma text-white text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card"
        style="background-image: linear-gradient(310deg, #f3e3dc 0%, #f1b89d 100%); border-radius: 15px;">
        <!-- <div class="card" style="border-radius: 15px;"> -->
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Chat</p>
                <h5 class="font-weight-bolder">
                  1030
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                <i class="ni ni-cart text-white text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-lg-6 mb-lg-0 mb-4">
      <div class="card z-index-2 h-100 dark-bg" style="border-radius: 15px;">
        <div class="card-header pb-0 pt-3 dark-bg">
          <h4 class="text-capitalize light-text">Quick Views</h4>
        </div>
        <div class="card-body p-3">
          <!-- <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
              </div> -->
          <div class="row">
            <div class="col-6 mb-2">
              <div class="numbers">

                <div class="card" style="background-color: #FFF4DE;">
                  <div class="card-body p-3">
                    <h2 class="text-center">8</h2>
                    <p class="text-center">Apartment</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 mb-2">
              <div class="numbers">

                <div class="card" style="background-color: #e1f0ff;">
                  <div class="card-body p-3">
                    <h2 class="text-center">17</h2>
                    <p class="text-center">Residents</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 mt-2 mb-2">
              <div class="numbers">

                <div class="card" style="background-color: #f9cacf;">
                  <div class="card-body p-3">
                    <h2 class="text-center">5</h2>
                    <p class="text-center">Concierge</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 mt-2 mb-2">
              <div class="numbers">

                <div class="card" style="background-color: #bff7f4;">
                  <div class="card-body p-3">
                    <h2 class="text-center">114</h2>
                    <p class="text-center">Parcels Pending</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 mt-2 mb-2">
              <div class="numbers">

                <div class="card" style="background-color: #c4f9ca;">
                  <div class="card-body p-3">
                    <h2 class="text-center">0</h2>
                    <p class="text-center">Today’s Requests</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 mt-2 mb-3">
              <div class="numbers">

                <div class="card" style="background-color: #d3c8fff7;">
                  <div class="card-body p-3">
                    <h2 class="text-center">1</h2>
                    <p class="text-center">Contractors Checked In</p>
                  </div>
                </div>
              </div>
            </div>




          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card dark-bg" style="border-radius: 15px;">
        <div class="card-header pb-0 pt-3 dark-bg">
          <h4 class="text-capitalize light-text">Calendar </h4>
        </div>
        <div class="card-body p-3">
          <div id='calendar'></div>
        </div>
      </div>
      <!--           <div class="card card-carousel overflow-hidden h-100 p-0">
            <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
              <div class="carousel-inner border-radius-lg h-100">
                <div class="carousel-item h-100 active" style="background-image: url('./assets/img/carousel-1.jpg');
      background-size: cover;">
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-camera-compact text-dark opacity-10"></i>
                    </div>
                    <h5 class="text-white mb-1">Get started with Argon</h5>
                    <p>There’s nothing I really wanted to do in life that I wasn’t able to get good at.</p>
                  </div>
                </div>
                <div class="carousel-item h-100" style="background-image: url('./assets/img/carousel-2.jpg');
      background-size: cover;">
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                    </div>
                    <h5 class="text-white mb-1">Faster way to create web pages</h5>
                    <p>That’s my skill. I’m not really specifically talented at anything except for the ability to learn.</p>
                  </div>
                </div>
                <div class="carousel-item h-100" style="background-image: url('./assets/img/carousel-3.jpg');
      background-size: cover;">
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-trophy text-dark opacity-10"></i>
                    </div>
                    <h5 class="text-white mb-1">Share with us your design tips!</h5>
                    <p>Don’t be afraid to be wrong because you can’t learn anything from a compliment.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div> -->
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-lg-6 mb-lg-0 mb-4">
      <div class="card dark-bg" style="border-radius: 17px;">
        <div class="card-header dark-bg-still py-2">
          <div class="d-flex justify-content-between align-items-baseline">
            <h4 class="mb-0 light-text-still">Services</h4>
            <button type="button" class="d-flex align-items-center  font-pop btn btn-block btn-light ms-auto mb-0"
              data-bs-toggle="modal" data-bs-target="#modal-services" style="color: #1A1A27;"><i
                class="ni ni-settings-gear-65"></i>&nbsp;&nbsp;Add Services</button>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-flush dataTable-table mt-3" id="datatable-basic">
            <div class="dataTable-wrapper dataTable-loading no-footer sortable fixed-height fixed-columns">
            </div>
            <div class="dataTable-top">
              <div class="dataTable-dropdown">
                <label class="d-none"><select class="dataTable-selector">
                    <option value="5">5</option>
                    <option value="10" selected="">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="25">25</option>
                  </select> entries per page</label>
              </div>
            </div>
            <thead class="thead-light">
              <tr role="row align-items-center">
                <th class="light-text font-weight-bolder sort" data-sortable="">#</th>
                <th scope="col" class="light-text font-weight-bolder sort" data-sort="status">Service Provider</th>
                <th scope="col" class="light-text font-weight-bolder sort">Contact No</th>
                <th scope="col" class="light-text font-weight-bolder sort">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr class="light-text" role="row">
                <td>1</td>
                <td>ABC</td>
                <td>09454959444</td>
                <td>
                  <div class="d-flex">
                    <button type="button" class="btn p-0 bg-light d-flex align-items-center justify-content-center"
                      data-bs-toggle="modal" data-bs-target="#exampleModal" style="height: 30px; width: 30px;color: #1A1A27;">
                      <i class="fa fa-pencil-square dark-text opacity-10"></i>
                    </button>

                    <button type="button"
                      class="btn p-0 btn-block del-btn bg-light mb-3 d-flex align-items-center justify-content-center"
                      data-bs-toggle="modal" data-bs-target="#modal-delete" style="height: 30px; width: 30px;color: #1A1A27;"><i
                        class="fa fa-trash dark-text opacity-10"></i></button>
                    <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete"
                      aria-hidden="true">
                      <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h6 class="modal-title" id="modal-title-default">Delete Conformation</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="POST" id="delete_form">
                              <input type="hidden" name="_token" value="">
                              <input type="hidden" name="_method" value="DELETE">
                              <div class="modal-body">
                                Are you sure want to delete?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-primary">Delete</button>
                                <button type="button" class="btn btn-link ml-auto"
                                  data-bs-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>


              <tr class="light-text" role="row">
                <td>2</td>
                <td>ABC</td>
                <td>09454959444</td>
                <td>
                  <div class="d-flex">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn bg-light d-flex align-items-center justify-content-center p-0"
                      data-bs-toggle="modal" data-bs-target="#exampleModal" style="height: 30px; width: 30px;color: #1A1A27;">
                      <i class="fa fa-pencil-square dark-text opacity-10"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Services</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="POST" action="" accept-charset="UTF-8" role="form" id="service-edit"
                              novalidate="novalidate"><input name="_method" type="hidden" value="PATCH"><input
                                name="_token" type="hidden" value="">
                              <div class="modal-body">
                                <div class="msg"></div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <div class="">
                                      <label for="category_id" class="control-label required">Service Category</label>
                                      <select class="form-control" id="category_id" name="category_id">
                                        <option value="">Select Category</option>
                                        <option value="72" selected="selected">Test</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group ">
                                      <label for="service_name" class="control-label required">Service Name</label>
                                      <input class="form-control " placeholder="Service Name" name="service_name"
                                        type="text" value="Test" id="service_name">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group ">
                                      <label for="service_provider_name" class="control-label required">Service Provider
                                        Name</label>
                                      <input class="form-control " placeholder="Service Provider Name"
                                        name="service_provider_name" type="text" value="Test"
                                        id="service_provider_name">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group ">
                                      <label for="contact_number" class="control-label required">Contact Number</label>
                                      <input class="form-control " placeholder="Contact Number" name="contact_number"
                                        type="text" value="02076636366" id="contact_number">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group ">
                                      <label for="mobile_number" class="control-label required">Mobile Number</label>
                                      <input class="form-control " placeholder="Mobile Number" name="mobile_number"
                                        type="text" id="mobile_number">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group ">
                                      <label for="email" class="control-label required">Email</label>
                                      <input class="form-control " placeholder="Email" name="email" type="text"
                                        value="www.aptlymanaged.com" id="email">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group ">
                                      <label for="status" class="control-label required">Status</label>
                                      <br>
                                      <input type="radio" name="status" value="1" checked="">
                                      Open
                                      <input type="radio" name="status" value="0">
                                      Close
                                      <br>
                                      <div class="error_msg"></div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group ">
                                      <label for="address" class="control-label required">Address</label>
                                      <textarea class="form-control" placeholder="Address" rows="1" name="address"
                                        cols="50" id="address">Test</textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary"
                                  data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn bg-gradient-primary">Save changes</button>
                              </div>
                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                    <button type="button"
                      class="btn btn-block del-btn bg-light mb-3 p-0 d-flex align-items-center justify-content-center"
                      data-bs-toggle="modal" data-bs-target="#modal-delete" style="height: 30px; width: 30px;color: #1A1A27;"><i
                        class="fa fa-trash dark-text opacity-10"></i></button>
                  </div>
                </td>
              </tr>

              <tr class="light-text" role="row">
                <td>3</td>
                <td>ABC</td>
                <td>09454959444</td>
                <td>
                  <div class="d-flex">
                    <button type="button" class="btn p-0 bg-light d-flex align-items-center justify-content-center"
                      data-bs-toggle="modal" data-bs-target="#exampleModal" style="height: 30px; width: 30px;color: #1A1A27;">
                      <i class="fa fa-pencil-square dark-text opacity-10"></i>
                    </button>

                    <button type="button"
                      class="btn p-0 btn-block del-btn bg-light mb-3 d-flex align-items-center justify-content-center"
                      data-bs-toggle="modal" data-bs-target="#modal-delete" style="height: 30px; width: 30px; color: #1A1A27;"><i
                        class="fa fa-trash dark-text opacity-10"></i></button>
                    <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete"
                      aria-hidden="true">
                      <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h6 class="modal-title" id="modal-title-default">Delete Conformation</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="POST" id="delete_form">
                              <input type="hidden" name="_token" value="">
                              <input type="hidden" name="_method" value="DELETE">
                              <div class="modal-body">
                                Are you sure want to delete?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-primary">Delete</button>
                                <button type="button" class="btn btn-link ml-auto"
                                  data-bs-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>

          </table>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card dark-bg" style="border-radius: 17px;">
        <div class="card-header dark-bg-still py-2">
          <div class="d-flex justify-content-between align-items-baseline">
            <h4 class="mb-0 heading-left light-text-still">Notifications</h4>
            <div class="btn-right d-flex flex-row gap-2"> <button
                class="d-flex align-items-center font-pop btn btn-light ms-auto mb-0"
                style="color: #1A1A27;"><i class="fa fa-trash"></i>&nbsp;&nbsp;Delete All</button>
              <button class="d-flex align-items-center font-pop btn btn-light ms-auto mb-0"
                style="color: #1A1A27;"><i class="ni ni-check-bold"></i>&nbsp;&nbsp;Mark as Read</button>
            </div>
          </div>
        </div>
        <div class="card-body p-3">
          <div class="bill d-flex">
            <div class="input-rc p-2 check-input">
              <input type="checkbox" class="sub_chk" data-id="cd06f715-4566-41bc-8155-6e9ef02962fa"><span
                class="input-rc-span"></span>
            </div>
            <h6 class="mb-0">
              <div class="status bg-actor"></div>
              <a href="chat.php">
                <span class="light-text">test Fablead has sent you a new message</span> </a>
            </h6>
            <a href="#" class="ms-auto btn btn-small bill-btn p-1 mb-0"><i
                class="align-items-center bg-light d-flex fa fa-trash justify-content-center rounded"
                aria-hidden="true" style="height: 30px;width:30px; color: #1A1A27;"></i>
            </a>
          </div>

          <div class="bill d-flex">
            <div class="input-rc p-2 check-input">
              <input type="checkbox" class="sub_chk" data-id="cd06f715-4566-41bc-8155-6e9ef02962fa"><span
                class="input-rc-span"></span>
            </div>
            <h6 class="mb-0">
              <div class="status bg-actor"></div>
              <div><a href="chat.php">
                  <span class="light-text">test Fablead has sent you a new message</span> </a>
              </div>
            </h6>
            <a href="#" class="ms-auto btn btn-small bill-btn p-1 mb-0"><i
                class="align-items-center bg-light d-flex fa fa-trash justify-content-center rounded"
                aria-hidden="true" style="height: 30px;width:30px;color: #1A1A27;"></i>
            </a>
          </div>
          <div class="bill d-flex">
            <div class="input-rc p-2 check-input">
              <input type="checkbox" class="sub_chk" data-id="cd06f715-4566-41bc-8155-6e9ef02962fa"><span
                class="input-rc-span"></span>
            </div>
            <h6 class="mb-0">
              <div class="status bg-actor"></div>
              <div><a href="chat.php">
                  <span class="light-text">test Fablead has sent you a new message</span> </a>
              </div>
            </h6>
            <a href="#" class="ms-auto btn btn-small bill-btn p-1 mb-0"><i
                class="align-items-center bg-light d-flex dark-text fa fa-trash justify-content-center rounded"
                aria-hidden="true" style="height: 30px;width:30px;color: #1A1A27;"></i>
            </a>
          </div>
          <div class="bill d-flex">
            <div class="input-rc p-2 check-input">
              <input type="checkbox" class="sub_chk" data-id="cd06f715-4566-41bc-8155-6e9ef02962fa"><span
                class="input-rc-span"></span>
            </div>
            <h6 class="mb-0">
              <div class="status bg-actor"></div>
              <div><a href="chat.php">
                  <span class="light-text">test Fablead has sent you a new message</span> </a>
              </div>
            </h6>
            <a href="#" class="ms-auto btn btn-small bill-btn p-1 mb-0"><i
                class="align-items-center bg-light d-flex dark-text fa fa-trash justify-content-center rounded"
                aria-hidden="true" style="height: 30px;width:30px;color: #1A1A27;"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modal-services" tabindex="-1" role="dialog" aria-labelledby="modal-services"
      aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title" id="modal-title-services">Add Service</h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row p-2">
              <div class="col-md-4">
                <div class="">
                  <label for="category_id" class="control-label required">Service Category</label>
                  <select class="form-control" id="category_id" name="category_id">
                    <option value="" selected="selected">Select Category</option>
                    <option value="72">Test</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group ">
                  <label for="service_name" class="control-label required">Type of Service</label>
                  <input class="form-control " placeholder="Type of Service" name="service_name" type="text"
                    id="service_name">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group ">
                  <label for="service_provider_name" class="control-label required">Service Provider</label>
                  <input class="form-control " placeholder="Service Provider" name="service_provider_name" type="text"
                    id="service_provider_name">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group ">
                  <label for="contact_number" class="control-label required">Contact Number</label>
                  <input class="form-control " placeholder="Contact Number" name="contact_number" type="text"
                    id="contact_number">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group ">
                  <label for="email" class="control-label required">Email / Website</label>
                  <input class="form-control " placeholder="Email / Website" name="email" type="text" id="email">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group ">
                  <label for="address" class="control-label required">Location</label>
                  <textarea class="form-control" placeholder="Location" rows="1" name="address" cols="50"
                    id="address"></textarea>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group ">
                  <label for="status" class="control-label required">Status</label>
                  <br>
                  <input type="radio" name="status" value="1" checked="">
                  Open
                  <input type="radio" name="status" value="0">
                  Closed
                  <br>
                  <div class="error_msg"></div>
                </div>
              </div>

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg-gradient-primary">Save changes</button>
            <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>