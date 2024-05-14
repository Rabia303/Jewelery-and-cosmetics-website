<?php
session_start();

include('header.php');

if (isset($_POST['sub'])) {
    include('conn.php');
    $name = $_POST['a'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM `admin_login` WHERE `a_name`='$name' AND `a_pass`='$pass'";
    $result =  mysqli_query($conn, $sql);
    $nr = mysqli_num_rows($result);

    if ($nr) {
        // Assuming 'aemail' and 'a_name' are the fields in your database
        $row = mysqli_fetch_assoc($result);
        $_SESSION['e'] = $row['aemail'];
        $_SESSION['name'] = $row['a_name'];
        header('Location: index.php');
    } else {
        echo '<script>alert("Invalid Credentials");</script>';
    }
}
?>


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

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Login</h4>

                        <form method="POST">
                            <div class="form-group">
                                <label>UserName</label>
                                <input type="text" name="a" class="form-control" placeholder="UserName">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="pass" class="form-control" placeholder="Password">
                            </div>

                            <button type="submit" name="sub" class="btn btn-primary mr-2">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</body>

</html>