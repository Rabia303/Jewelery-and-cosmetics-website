<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.bootstrapdash.com/skydash/template/demo/vertical-default-dark/pages/samples/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2023 09:17:19 GMT -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-dark/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">





  <style>
    .btn-dark:hover {
      background-color: white;
      /* Change the background color to white */
      color: black;
      /* Change the text color to black */
    }

    #sidebar {
      width: 300px;
    }

    .nav-link {
      padding: 15px;
      /* Adjust padding as needed */
    }
  </style>
</head>

<style>
  #sidebar {
    width: 300px;
  }

  .nav-link {
    padding: 15px;
    /* Adjust padding as needed */
  }
</style>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/logo.svg" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face28.jpg" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
                All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="ri-dashboard-line menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="login.php">
              <i class="ri-login-box-line menu-icon"></i>
              <span class="menu-title">Login Page</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="feedback.php">
              <i class="ri-user-add-line menu-icon"></i>
              <span class="menu-title">Users Feedback</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cat-cos.php">
              <i class="ri-shopping-bag-line menu-icon"></i>
              <span class="menu-title">Categories</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="prod_cos.php">
              <i class="ri-brush-2-line menu-icon"></i>
              <span class="menu-title">Products</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="add_categories.php">
              <i class="ri-add-box-line menu-icon"></i>
              <span class="menu-title">Add Categories</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="add_products.php">
              <i class="ri-add-circle-line menu-icon"></i>
              <span class="menu-title">Add Product</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="orders.php">
              <i class="ri-shopping-cart-line menu-icon"></i>
              <span class="menu-title">Orders</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="billing.php">
              <i class="ri-money-dollar-circle-line menu-icon"></i>
              <span class="menu-title">Billing</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="users.php">
              <i class="ri-user-line menu-icon"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="review.php">
              <i class="ri-star-line menu-icon"></i>
              <span class="menu-title">Review</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">

                </div>
                <div class="col-12 col-xl-4">
                  <div class="justify-content-end d-flex">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                      
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                        <a class="dropdown-item" href="#">January - March</a>
                        <a class="dropdown-item" href="#">March - June</a>
                        <a class="dropdown-item" href="#">June - August</a>
                        <a class="dropdown-item" href="#">August - November</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
       
          <!-- table -->

          <div class="page-wrapper">
            <div class="page-content">
              <!--breadcrumb-->

              <h6 class="mb-0  text-uppercase">Top Products</h6>
              <hr />

              <div class="row">
                <div class="col-md-7 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <!-- <p class="card-title mb-0">Top Products</p> -->
                      <div class="table-responsive">
                        <table class="table table-striped table-borderless" id="example2">
                          <thead>
                            <tr>
                              <th>Product</th>
                              <th>Price</th>
                              <th>Discount</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            include('conn.php');


                            $sql = "SELECT
        p_name,
        p_price,Discount
    FROM
        products
    WHERE
        id IN (
            SELECT p_id
            FROM add_to_cart
            GROUP BY p_id
            ORDER BY COUNT(p_id) DESC
        )";

                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                              <tr>
                                <td><?php echo $row['p_name']; ?></td>
                                <td class="font-weight-bold"><?php echo $row['p_price']; ?></td>

                                <td><?php echo $row['Discount']; ?></td>
                              </tr>
                            <?php
                            }
                            ?>
                          </tbody>
                        </table>

                      </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                  </div>
                </div>
                <!-- partial -->
              </div>
              <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
          </div>
          <div class="page-wrapper">
            <div class="page-content">
              <!--breadcrumb-->

              <h6 class="mb-0  text-uppercase">TOP USERS</h6>
              <hr />

              <div class="row">
                <div class="col-md-7 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <!-- <p class="card-title mb-0">Top Products</p> -->
                      <div class="table-responsive">
                        <table class="table table-striped table-borderless" id="example3">
                          <thead>
                            <tr>
                              <th>User ID</th>
                              <th>Name</th>
                              <th>Total Amount</th>

                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            include('conn.php');

                            $sqlx = "SELECT login.u_id, login.name, SUM(checkout.`total amount`) AS total_purchase_amount 
                            FROM login JOIN add_to_cart ON login.u_id = add_to_cart.user_id JOIN checkout ON add_to_cart.atc_id = 
                            checkout.atcc_id GROUP BY login.u_id, login.name ORDER BY total_purchase_amount DESC LIMIT 10;";

                            $resultx = mysqli_query($conn, $sqlx);

                            while ($rowx = mysqli_fetch_array($resultx)) {
                            ?>
                              <tr>
                                <td><?php echo $rowx['u_id']; ?></td>
                                <td><?php echo $rowx['name']; ?></td>
                                <td><?php echo $rowx['total_purchase_amount']; ?></td>


                              </tr>
                            <?php
                            }
                            ?>
                          </tbody>
                        </table>


                      </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                  </div>
                </div>
                <!-- partial -->
              </div>
              <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
          </div>
          <!-- container-scroller -->

          <!-- plugins:js -->
          <script src="vendors/js/vendor.bundle.base.js"></script>
          <!-- endinject -->
          <!-- Plugin js for this page -->
          <script src="vendors/chart.js/Chart.min.js"></script>
          <script src="vendors/datatables.net/jquery.dataTables.js"></script>
          <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
          <script src="js/dataTables.select.min.js"></script>

          <!-- End plugin js for this page -->
          <!-- inject:js -->
          <script src="js/off-canvas.js"></script>
          <script src="js/hoverable-collapse.js"></script>
          <script src="js/template.js"></script>
          <script src="js/settings.js"></script>
          <script src="js/todolist.js"></script>
          <!-- endinject -->
          <!-- Custom js for this page-->
          <script src="js/dashboard.js"></script>
          <script src="js/Chart.roundedBarCharts.js"></script>
          <!-- End custom js for this page-->

          <script>
            $(document).ready(function() {
              var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print'],
              });

              table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
            });
          </script>

          <script>
            $(document).ready(function() {
              var table = $('#example3').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print'],
              });

              table.buttons().container()
                .appendTo('#example3_wrapper .col-md-6:eq(0)');
            });
          </script>
          <script>
            $(document).ready(function() {
              $('#example').DataTable()
            });
          </script>
          <script src="assets/js/index.js"></script>
          <!--app JS-->
          <script src="assets/js/app.js"></script>
          <script src="assets/js/bootstrap.bundle.min.js"></script>
          <!--plugins-->
          <script src="assets/js/jquery.min.js"></script>
          <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
          <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
          <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
          <script src="assets/plugins/chartjs/chart.min.js"></script>
          <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
          <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
          <script src="assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
          <script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
          <script src="assets/plugins/jquery-knob/excanvas.js"></script>
          <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
          <script>
            $(function() {
              $(".knob").knob();
            });
          </script>
          <script src="assets/js/bootstrap.bundle.min.js"></script>
          <!--plugins-->
          <script src="assets/js/jquery.min.js"></script>
          <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
          <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
          <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
          <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
          <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>