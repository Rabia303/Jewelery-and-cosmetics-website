<?php
include('conn.php');
$review_id = $_GET['ID'];
$sql = "SELECT * FROM `review` WHERE id = $review_id";
$result = mysqli_query($conn, $sql);
$fetch = mysqli_fetch_array($result);
if (isset($_POST['sub'])) {

    $name = $_POST['author'];
    $rating = $_POST['rating'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $pname = $_POST['a'];
    // $imgt= $_FILES['pimg']['size'];
    // $imgt= $_FILES['pimg']['type'];

    $sql = "UPDATE `review` SET `name`='$name',`email`='$email',
    `rating`='$rating',`u_review`='$comment',`Product Name`='$pname'  WHERE id = $review_id";
    mysqli_query($conn, $sql);
    header("Location: review.php");
}
?>
<?php
include('header.php')
?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Review</h4>

                                    <form method="POST">
                                        <div class="form-group">
                                            <label for="author">UserName</label>
                                            <input type="text" class="form-control" id="author" name="author" placeholder="UserName" value="<?php echo $fetch[1] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $fetch[2] ?>">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="productName">Product Name</label>
                                                    <input type="text" class="form-control" id="productName" name="productName" placeholder="Product Name" value="<?php echo $fetch[5] ?>">
                                                </div>
                                                <div class="col">
                                                    <label for="rating">Rating</label>
                                                    <input type="text" class="form-control" id="rating" name="rating" placeholder="Rating" value="<?php echo $fetch[3] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="review">Review</label>
                                            <input type="text" class="form-control" id="review" name="review" placeholder="Review" value="<?php echo $fetch[4] ?>">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn">Edit Review</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->

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
</body>

</html>