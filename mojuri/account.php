<?php

include('header1.php');
?>

<div id="site-main" class="site-main">
    <div id="main-content" class="main-content">
        <div id="primary" class="content-area">
            <div id="title" class="page-title">
                <div class="section-container">
                    <div class="content-title-heading">
                        <h1 class="text-title-heading">
                            My Account
                        </h1>
                    </div>
                    <div class="breadcrumbs">
                        <a href="index.php">Home</a><span class="delimiter"></span>My Account
                    </div>
                </div>
            </div>
            <div class="container">
                <div id="content" class="site-content" role="main">


                    <section class="section section-padding top-border p-t-70 m-b-70">
                        <center>
                            <h5>ORDERS</h5>
                        </center>
                        <div>
                            <div class="my-account-orders">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            include('conn.php');


                                            if (isset($_SESSION['id'])) {
                                                $user_id = $_SESSION['id'];


                                                $sqlx = "SELECT * FROM `checkout`,`add_to_cart` WHERE user_id = $user_id";
                                                $resultx = mysqli_query($conn, $sqlx);

                                                while ($rowx = mysqli_fetch_array($resultx)) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $rowx[0]; ?></td>
                                                        <td><?php echo $rowx[4]; ?></td>
                                                        <td><?php echo $rowx[3]; ?></td>
                                                    </tr>
                                            <?php
                                                }
                                            } else {
                                                echo 'Please log in to view your orders';
                                            }
                                            ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                    <br><br>
                    <section class="section section-padding top-border p-t-70 m-b-70">
                        <div>
                            <center>
                                <h5>SHIPPING ADDRESS</h5>
                            </center>
                            <div class="my-account-addresses">
                                <p>
                                    The following addresses will be used on the checkout page by default.
                                </p>
                                <div class="addresses">
                                    <?php
                                    include('conn.php');


                                    if (isset($_SESSION['id'])) {
                                        $user_id = $_SESSION['id'];

                                        // Retrieve the user's address from the `billing` table
                                        $sql1 = "SELECT * FROM `billing` WHERE user_id = $user_id";
                                        $result1 = mysqli_query($conn, $sql1);
                                        $row1 = mysqli_fetch_array($result1);

                                        if ($row1) {
                                    ?>
                                            <div class="addresses-col">
                                                <header class="col-title">
                                                    <h3>Shipping address</h3>
                                                </header>
                                                <address>
                                                    <?php echo $row1[5]; ?> <!-- Display the user's address -->
                                                </address>
                                            </div>
                                </div>
                        <?php
                                        } else {
                                            echo 'No shipping address found for this user.';
                                        }
                                    } else {
                                        echo 'Please log in to view your shipping address.';
                                    }
                        ?>



                            </div>
                        </div>
                    </section>

                    <br><br>

                    <section class="section section-padding top-border p-t-70 m-b-70">
                        <center>
                            <h5>ACCOUNT DETAILS</h5>
                        </center>
                        <div>
                            <?php
                            include('conn.php');

                            if (isset($_SESSION['id'])) {
                                $user_id = $_SESSION['id'];
                                $sql = "SELECT * FROM `login` WHERE u_id = $user_id";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_array($result);

                                if (isset($_POST['up'])) {
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $pass = $_POST['pass'];
                                    $sql = "UPDATE `login` SET `name`='$name', `email`='$email', `pass`='$pass' WHERE u_id = $user_id";
                                    mysqli_query($conn, $sql);
                                    header("Location: page-my-account.php");
                                }
                            }
                            ?>
                            <div class="my-account-account-details">
                                <form class="edit-account" method="post">
                                    <p class="form-row">
                                        <label for="account_first_name">Name<span class="required">*</span></label>
                                        <input type="text" class="input-text" name="name">
                                    </p>



                                    <div class="clear"></div>
                                    <p class="form-row">
                                        <label>Email address <span class="required">*</span></label>
                                        <input type="email" class="input-text" name="email">
                                    </p>
                                    <fieldset>
                                        <legend>Password change</legend>


                                        <p class="form-row">
                                            <label>Confirm new password</label>
                                            <input type="password" class="input-text" name="pass" autocomplete="off">
                                        </p>
                                    </fieldset>
                                    <div class="clear"></div>
                                    <p class="form-row">
                                        <button type="submit" class="button" name="up">Save changes</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
</div><!-- #content -->
</div><!-- #primary -->
</div><!-- #main-content -->
</div>
<?php
include('footer1.php');
?>