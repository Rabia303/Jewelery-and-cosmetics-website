<?php
include('conn.php');

if (isset($_GET['atc_id'])) {
$atcid = $_GET['atc_id']; // Get the 'atc_id' parameter from the URL
$sql = "DELETE FROM `add_to_cart` WHERE atc_id = $atcid";
mysqli_query($conn, $sql);
header('Location: index.php');
} else {
echo "Invalid request";
}

?>