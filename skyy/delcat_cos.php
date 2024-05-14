<?php
include('conn.php');

if (isset($_GET['ID'])) {
    $catcos_id = $_GET['ID'];
    $sql = "DELETE FROM `categories` WHERE `id` = $catcos_id";
    $result = mysqli_query($conn, $sql);


    if ($result) {
        header("Location: cat-cos.php");
    }
}
