<?php
include('conn.php');

if (isset($_GET['ID'])) {
    $review_id = $_GET['ID'];
    $sql = "DELETE FROM `review` WHERE `id` = $review_id";
    $result = mysqli_query($conn, $sql);


    if ($result) {
        header("Location: review.php");
    }
}
