<?php
include 'koneksi.php';

session_start();
$username = $_SESSION['username'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $banyak_tiket = $_POST['banyak_tiket'];

    $query = "UPDATE member SET banyak_tiket = '$banyak_tiket' WHERE username = '$username'";
    $insertResult = mysqli_query($conn, $query);

    if ($insertResult) {
        header("Location: tiket.php");
        exit;
    } else {
        header("Location: order.php?error=2");
        exit();
    }

}
?>