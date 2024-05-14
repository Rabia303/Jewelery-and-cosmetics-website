<?php
include('conn.php');
session_start();

if (isset($_GET['prodid'])) {
    $product_id = $_GET['prodid'];

    // Check if the user is logged in
    if (!isset($_SESSION['id'])) {
        // User is not logged in, show an alert message
        echo '<script>
            alert("Please log in to add this item to your cart.");
            window.location.href = "page-login.php"; // Change "login.php" to the actual login page URL
        </script>';
    } else {
        // User is logged in, proceed with adding to the cart
        // Check if the product is already in the cart for the current user
        $user_id = $_SESSION['id']; // Get user ID from the session

        $sqlCheckDuplicate = "SELECT COUNT(*) FROM `add_to_cart` WHERE p_id = $product_id AND user_id = $user_id";
        $resultCheckDuplicate = mysqli_query($conn, $sqlCheckDuplicate);

        if ($resultCheckDuplicate) {
            $row = mysqli_fetch_row($resultCheckDuplicate);
            $count = $row[0];

            if ($count > 0) {
                // Product is already in the cart for the current user, show an alert
                echo '<script>alert("Product is already in the cart.");</script>';
            } else {
                // Product is not in the cart for the current user, proceed to add it
                $sql1 = "SELECT * FROM products WHERE id = $product_id";
                $r = mysqli_query($conn, $sql1);
                $row = mysqli_fetch_array($r);

                $sqlInsert = "INSERT INTO `add_to_cart` (`p_id`, `c_id`, `user_id`) VALUES ('$product_id', '$row[4]', '$user_id')";
                $re = mysqli_query($conn, $sqlInsert);

                if ($re) {
                    echo "<script>alert('Product added to the cart successfully.');</script>";
                } else {
                    echo "<script>alert('Error adding product to the cart.');</script>";
                }
            }
        } else {
            echo "<script>alert('Error checking for duplicates.');</script>";
        }

        header("Location: index.php"); // Redirect the user back to the page.
    }
}
?>