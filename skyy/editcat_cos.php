<?php
include('conn.php');
$catcos_id = $_GET['ID'];
$sql = "SELECT * FROM `categories` WHERE id = $catcos_id";
$result = mysqli_query($conn, $sql);
$fetch = mysqli_fetch_array($result);

if (isset($_POST['sub'])) {
    include('conn.php');
    $cname = $_POST['cat'];

    // Check if a new image file was uploaded
    if ($_FILES['cimg']['error'] === 0) {
        $img = $_FILES['cimg']['name'];
        $imgt = $_FILES['cimg']['tmp_name'];

        // Move the uploaded image to the appropriate folder
        move_uploaded_file($imgt, "catimages/" . $img);

        // Update the database field with the new image path
        $sql = "UPDATE `categories` SET `c_name`='$cname', `c_img`='$img' WHERE id = $catcos_id";
    } else {
        // No new image file was uploaded, so only update the category name
        $sql = "UPDATE `categories` SET `c_name`='$cname' WHERE id = $catcos_id";
    }

    mysqli_query($conn, $sql);

    header("Location: cat-cos.php");
}
?>
<?php
include('header.php')
?>
            <!-- partial -->

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add Categories-Cosmetics</h4>
                                    <p class="card-description">
                                        Basic form layout
                                    </p>

                                    <form method="POST" class="forms-sample" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Add Categories</label>
                                            <input type="text" name="cat" class="form-control" placeholder="Add Categories" value="<?php echo $fetch[1]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="cimg" value="" />
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
    <!-- container-scroller --> Bootstrap admin template

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