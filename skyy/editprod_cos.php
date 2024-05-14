<?php
include('conn.php');

$prodcos_id = $_GET['ID'];

$sql = "SELECT * FROM `products` WHERE id = $prodcos_id";
$result = mysqli_query($conn, $sql);
$fetch = mysqli_fetch_array($result);

// Check if the form is submitted
if (isset($_POST['sub'])) {
    // Get the form inputs
    $pname = $_POST['pname'];
    $pprice = $_POST['price'];
    $desc = $_POST['desc'];
    $pcat = $_POST['cid'];
    $qnty = $_POST['q'];
    $sale = $_POST['sale'];
    $size = $_POST['size'];

    // Handle image upload
    if ($_FILES['pimg']['error'] === 0) {
        $img = $_FILES['pimg']['name'];
        $imgt = $_FILES['pimg']['tmp_name'];

      
        move_uploaded_file($imgt, "prodimages/" . $img);


        $newImagePath = "prodimages/$img";
    } else {
     
        $newImagePath = $fetch['p_img'];
    }

    // Update the product data in the database
    $sql = "UPDATE `products` SET `p_name`='$pname', `p_price`='$pprice',
    `p_desc`='$desc', `c_id`='$pcat',
    `p_img`='$img', `Quantity`='$qnty', `Variants`='$size',
    `Discount`='$sale' WHERE id = $prodcos_id";

    mysqli_query($conn, $sql);

    // Redirect to the product management page after updating
    header("Location: prod_cos.php");
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
                        <!-- Existing product data fetched from the database -->
                        <form method="POST" action="" class="forms-sample" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" name="pname" class="form-control" placeholder="Product Name" value="<?php echo $fetch[1]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Product Price</label>
                                        <input type="number" name="price" class="form-control" placeholder="Product Price" value="<?php echo $fetch[2]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Quantity in Stock</label>
                                        <input type="number" name="q" class="form-control" placeholder="Quantity in Stock" value="<?php echo $fetch[6]; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Variants(size/color)</label>
                                        <input type="text" name="size" class="form-control" placeholder="Variants(size/color)" value="<?php echo $fetch[7]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Discount or Sale Price</label>
                                        <input type="number" name="sale" class="form-control" placeholder="Discount or Sale Price" value="<?php echo $fetch[8]; ?>">
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
                                <label>Product Description</label>
                                <textarea name="desc" class="form-control" placeholder="Product Description"><?php echo $fetch[3]; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Product Image</label>
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