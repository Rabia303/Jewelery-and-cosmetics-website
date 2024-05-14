<?php
session_start();
include('header.php');

if (!isset($_SESSION['e'])) {
    header('Location: signin.php');
}
?>
<?php

if (isset($_POST['sub'])) {
    include('conn.php');
    $pname = $_POST['pname'];
    $pprice = $_POST['price'];
    $desc = $_POST['desc'];
    $pcat = $_POST['cid'];
    $img = $_FILES['pimg']['name'];
    $imgt = $_FILES['pimg']['tmp_name'];
    $qnty = $_POST['q'];
    $sale = $_POST['sale'];
    $size = $_POST['size'];

    $sql = "INSERT INTO `products`(`p_name`, `p_price`, `p_desc`, `c_id`, `p_img`, `Quantity`, `Variants`, `Discount`) 
     VALUES ('$pname',
    '$pprice','$desc','$pcat','$img','$qnty','$size','$sale')";

    move_uploaded_file($imgt, "prodimages/" . $img);
    mysqli_query($conn, $sql);
}


?>
<?php
include('header.php')
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Product-Cosmetics</h4>
                        <p class="card-description">
                            Basic form layout
                        </p>
                        <form method="POST" action="" class="forms-sample" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" name="pname" class="form-control" placeholder="Product Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Product Price</label>
                                        <input type="number" name="price" class="form-control" placeholder="Product Price">
                                    </div>
                                    <div class="form-group">
                                        <label>Quantity in Stock</label>
                                        <input type="number" name="q" class="form-control" placeholder="Quantity in Stock">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Variants(size/color)</label>
                                        <input type="text" name="size" class="form-control" placeholder="Variants(size/color)">
                                    </div>
                                    <div class="form-group">
                                        <label>Discount or Sale Price</label>
                                        <input type="number" name="sale" class="form-control" placeholder="Discount or Sale Price">
                                    </div>
                                    <div class="form-group">
                                        <label>Product Category</label>
                                        <select name="cid" class="form-control">
                                            <?php
                                            include('conn.php');
                                            $sql = "SELECT * FROM `categories`";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                                <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputConfirmPassword1">Product Description</label>
                                <textarea type="text" name="desc" class="form-control" placeholder="Product Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputConfirmPassword1">Product Image</label>
                                <input name="pimg" type="file" class="form-control">
                            </div>
                            <button type="submit" name="sub" class="btn btn-primary mr-2">Add Product</button>
                        </form>

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