<?php
include('conn.php');

if (isset($_GET['ID'])) {
    $prodcos_id = $_GET['ID'];
    $sql = "DELETE FROM `products` WHERE `id` = $prodcos_id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: prod_cos.php");
    }
}
