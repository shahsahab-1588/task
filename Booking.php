<?php
include('inc.connection.php');
$sql = "SELECT * FROM `bookings`";
$result = mysqli_query($conn, $sql);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flexy Free Bootstrap Admin Template by WrapPixel</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />

  <style>
  /* Remove only the top space above the navbar */
  .app-header {
    margin-top: 0 !important;
    padding-top: 0 !important;
    position: relative;
    top: 0 !important;
  }

  nav.navbar {
    margin-top: 0 !important;
    padding-top: 0 !important;
  }

  /* Remove any top margin accidentally coming from .body-wrapper or .page-wrapper */
  .body-wrapper,
  #main-wrapper,
  .page-wrapper {
    margin-top: 0 !important;
    padding-top: 0 !important;
  }
  .brand-logo img{
    width: 100%;
    height: 160px;
    margin-top: -26px;
    margin-bottom: -35px;
  }
</style>



</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" style="padding-top: 0 !important;"  data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Start -->
   <aside class="left-sidebar" style="margin-top: 0 !important; padding-top: 0 !important; top: 0 !important;">

      <!-- Sidebar scroll-->
        <div>
          <div class="brand-logo d-flex align-items-center justify-content-center">
            <a href="./admin-dash.php" class="text-nowrap logo-img">
              <img src="images/logo.png" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-6"></i>
            </div>
          </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./admin-dash.php" aria-expanded="false">
                <i class="ti ti-atom"></i>
                <span class="hide-menu">Reservations</span>
              </a>
            </li>
            <!-- ---------------------------------- -->
            <!-- Dashboard -->
            <!-- ---------------------------------- -->



            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="#" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-mail"></i>
                  </span>
                  <span class="hide-menu">Rooms</span>
                </div>

              </a>
            </li>

           <li class="sidebar-item">
  <a class="sidebar-link has-arrow justify-content-between" href="javascript:void(0)" aria-expanded="false">
    <div class="d-flex align-items-center gap-3">
      <span class="d-flex">
        <i class="ti ti-bookmark"></i>
      </span>
      <span class="hide-menu">Booking</span>
    </div>
  </a>
  <ul aria-expanded="false" class="collapse first-level">
    <li class="sidebar-item">
      <a href="add-booking.php" class="sidebar-link">
        <i class="ti ti-plus"></i>
        <span class="hide-menu">Add Booking</span>
      </a>
    </li>
    <li class="sidebar-item">
      <a href="Booking.php" class="sidebar-link">
        <i class="ti ti-check"></i>
        <span class="hide-menu">Booked</span>
      </a>
    </li>
  </ul>
</li>


            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="admin-inquiry.php" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-help"></i>
                  </span>
                  <span class="hide-menu">Inquires</span>
                </div>

              </a>
            </li>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header" >


        <nav class="navbar navbar-expand-lg navbar-light">

          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ti ti-bell"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-animate-up" aria-labelledby="drop1">
                <div class="message-body">
                  <a href="javascript:void(0)" class="dropdown-item">
                    Item 1
                  </a>
                  <a href="javascript:void(0)" class="dropdown-item">
                    Item 2
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-3" id="navbarNav" >
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

              <li class="nav-item dropdown">
                <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="./assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="signin.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <!--  Row 1 -->
          <div class="row" style="margin-top: -60px;">
           
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h4 class="card-title">RESERVATIONS</h4>
                      <!-- <p class="card-subtitle">
                        Ample Admin Vs Pixel Admin
                      </p> -->
                    </div>
                    <div class="ms-auto mt-3 mt-md-0">
                      <select class="form-select theme-select border-0" aria-label="Default select example">
                        <option value="1">March 2023</option>
                        <option value="2">March 2024</option>
                        <option value="3">March 2025</option>
                      </select>
                    </div>
                  </div>
                  <div class="table-responsive mt-4">
                    <table class="table mb-0 text-nowrap varient-table align-middle fs-3">
                      <thead>
                        
                        <tr>
                        <tr>
                          <th scope="col" class="px-3 text-muted">Booking_Id</th>
                          <th scope="col" class="px-3 text-muted">Guest-Id</th>
                          <th scope="col" class="px-3 text-muted">Name</th>
                          <th scope="col" class="px-3 text-muted">Email</th>
                          <th scope="col" class="px-3 text-muted">Phone</th>
                          <th scope="col" class="px-3 text-muted">Checkin</th>
                          <th scope="col" class="px-3 text-muted">Checkout</th>
                          <th scope="col" class="px-3 text-muted">Guest</th>
                          <th scope="col" class="px-3 text-muted">Room</th>
                          <th scope="col" class="px-3 text-muted">Room-No</th>
                         <th scope="col" class="px-3 text-muted">Suite</th>
                      </thead>
                      <tbody>
                         <?php $srno = 1;
            while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                          
                          <td class="px-3">                            
                            <div class="d-flex align-items-center">
                              <?php echo $row['Booking_id']; ?>
                            </div>
                          <td class="px-3">                            
                            <div class="d-flex align-items-center">
                              <?php echo $row['Guest_id']; ?>
                            </div>
                          </td>
                          <td class="px-3">
                            <div class="d-flex align-items-center">
                              <?php echo $row['Name']; ?>
                            </div>
                          </td>
                          <td class="px-3">
                            <div class="d-flex align-items-center">
                              <?php echo $row['Email']; ?>
                            </div>
                          </td>
                          <td class="px-3">
                            <div class="d-flex align-items-center">
                              <?php echo $row['Phone']; ?>
                            </div>
                          </td>
                          <td class="px-3">
                            <div class="d-flex align-items-center">
                              <?php echo $row['Checkin']; ?>
                            </div>
                          </td>
                          <td class="px-3">
                            <div class="d-flex align-items-center">
                              <?php echo $row['Checkout']; ?>
                            </div>
                          </td>
                          <td class="px-3">
                            <div class="d-flex align-items-center">
                              <?php echo $row['Guest']; ?>
                            </div>
                          </td>
                          <td class="px-3">
                            <div class="d-flex align-items-center">
                              <?php echo $row['Room']; ?>
                            </div>
                          </td>
                          <td class="px-3">
                            <div class="d-flex align-items-center">
                              <?php echo $row['Room_No']; ?>
                            </div>
                          </td>
                          <td class="px-0">
                            <div class="d-flex align-items-center">
                              <?php echo $row['Suite']; ?>
                            </div>
                          </td>
                          
                          <?php $srno++; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
          
          </div>
          <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">Design and Developed by <a href="#"
                class="pe-1 text-primary text-decoration-underline">Wrappixel.com</a> Distributed by <a
                href="https://themewagon.com" target="_blank">ThemeWagon</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/sidebarmenu.js"></script>
  <script src="./assets/js/app.min.js"></script>
  <script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="./assets/js/dashboard.js"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>