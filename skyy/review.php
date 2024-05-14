<?php
session_start();
include('header.php');

if (!isset($_SESSION['e'])) {
    header('Location: signin.php');
}
?> <!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Review</h4>

                        <div class="row">
                            <div class="table-sorter-wrapper col-lg-12 table-responsive">
                                <table id="sortable-table-2" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Review ID</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Product Name</th>
                                            <!-- <th>User ID</th> -->
                                            <th>Rating</th>

                                            <th>Review Text</th>
                                            <th>Date Posted</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include('conn.php');
                                        $sql = "SELECT * FROM `review`";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_array($result)) {

                                        ?>
                                            <tr>
                                                <td><?php echo $row[0]; ?></td>
                                                <td><?php echo $row[1]; ?></td>
                                                <td><?php echo $row[2]; ?></td>
                                                <td><?php echo $row[5]; ?></td>
                                                <td><?php echo $row[3]; ?></td>

                                                <td><?php echo $row[4]; ?></td>
                                                <td><?php echo $row[6]; ?></td>




                                                <td class="text-right">
                                                    <button class="btn btn-dark" data-toggle="modal" data-target="#modal-edit">

                                                        <i class="ri-pencil-fill" style="color: lightblue;"></i> Edit
                                                    </button>

                                                    <button class="btn btn-dark" data-toggle="modal" data-target="#modal-delete">
                                                        <i class="ri-delete-bin-6-line" style="color: red;padding-right: 7px;"></i>Delete
                                                    </button>

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
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->


    <!-- partial -->
</div>
</div>
<!-- page-body-wrapper ends -->
</div>




<!-- Modal starts -->

<div class="modal fade" id="modal-edit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-2">Review Edit</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to edit this Review?</p>
            </div>

            <div class="modal-footer">
                <a class="btn btn-success" href="reviewedit.php">Edit</a>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>

            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="modal-delete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-2">Review Delete</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this Review?</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-success" href="reviewdel.php">Delete</a>
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
</body>

</html>