<?php
include 'koneksi.php';

session_start();
$username = $_SESSION['username'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil nilai banyak_tiket dari database
    $result = mysqli_query($conn, "SELECT banyak_tiket FROM member WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);
    $banyak_tiket = $row['banyak_tiket'];

    // Kurangi nilai banyak_tiket dengan nilai baru
    $quantity = $banyak_tiket - $_POST['quantity'];

    // Update nilai banyak_tiket di database
    $query = "UPDATE member SET banyak_tiket = '$quantity' WHERE username = '$username'";
    $updateResult = mysqli_query($conn, $query);

    if ($updateResult) {
        header("Location: tiket.php");
        exit;
    } else {
        header("Location: order.php?error=2");
        exit();
    }
}
?>
