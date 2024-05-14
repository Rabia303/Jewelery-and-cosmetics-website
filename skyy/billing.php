<?php
session_start();
include('header.php');

if (!isset($_SESSION['e'])) {
    header('Location: signin.php');
}
?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Billing </h4>

                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Customer Name</th>
                                        <th>Country</th>
                                        <th>Street Address</th>
                                        <th>Work PhoneNo</th>
                                        <!-- Indicates whether the payment has been processed (e.g., Paid, Pending).-->
                                        <th>Category</th>
                                        <th>Email</th>

                                        <th>Cell No</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include('conn.php');
                                    $sql = "SELECT * FROM `billing`";

                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($result)) {

                                    ?>
                                        <tr>
                                            <td><?php echo $row[2]; ?></td>
                                            <td><?php echo $row[4]; ?></td>
                                            <td><?php echo $row[5]; ?></td>
                                            <td><?php echo $row[6]; ?></td>
                                            <td><?php echo $row[8]; ?></td>

                                            <td><?php echo $row[9]; ?></td>
                                            <td><?php echo $row[7]; ?></td>


                        </div>
                        </td>


                        </tr>
                    <?php
                                    }
                    ?>
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wrapper ends -->



<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>




<!-- Modal starts -->

<div class="modal fade" id="modal-edit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-2">Category Edit</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to edit this category?</p>
            </div>

            <div class="modal-footer">
                <a class="btn btn-success" href="editorder.php">Update</a>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>

            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="modal-delete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-2">Order View</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to view this order?</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-success" href="orderview.php">view</a>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Ends -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- end modal delete -->
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>