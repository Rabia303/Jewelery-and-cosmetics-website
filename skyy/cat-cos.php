<?php
include('header.php')
?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-9 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Categories  </h4>

                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Category name</th>

                                                    <!-- he total count of products in each category. -->
                                                    <th>Date Created</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include('conn.php');
                                                $sql = "SELECT * FROM `categories`";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $catcos_id = $row['id'];
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row[0]; ?></td>
                                                        <td><?php echo $row[1]; ?></td>
                                                        <td><?php echo $row[3]; ?></td>

                                                        <td class="text-right">
                                                            <button class="btn btn-dark" data-toggle="modal" data-target="#modal-edit<?php echo $catcos_id; ?>">
                                                                <i class="ri-pencil-fill" style="color: lightblue;"></i> Edit
                                                            </button>

                                                            <button class="btn btn-dark" data-toggle="modal" data-target="#modal-delete<?php echo $catcos_id; ?>">
                                                                <i class="ri-delete-bin-6-line" style="color: red;padding-right: 5px;"></i>
                                                                Delete
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
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ms-1"></i></span>
                    </div>
                </footer>

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>



    <?php
    include('conn.php');
    $sqlss = "SELECT * FROM `categories`";
    $resultss = mysqli_query($conn, $sqlss);
    while ($rowsss = mysqli_fetch_array($resultss)) {
        $catcos_id = $rowsss['id'];
    ?>
        <!-- Modal starts -->

        <div class="modal fade" id="modal-edit<?php echo $catcos_id; ?>">
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
                        <a class="btn btn-success" href="editcat_cos.php?ID=<?php echo $catcos_id; ?>">Edit</a>
                        <button type=" button" class="btn btn-light" data-dismiss="modal">Cancel</button>

                    </div>

                </div>
            </div>

        </div>
        <div class="modal fade" id="modal-delete<?php echo $catcos_id; ?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel-2">Category Delete</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this category?</p>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-success" href="delcat_cos.php?ID=<?php echo $catcos_id; ?>">Delete</a>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
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