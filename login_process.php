<?php
require  'koneksi.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM data_user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $_SESSION["login"] = true;
        header("Location: index.php");
        exit;
    } else {
        header("Location: login.php?error=1");
        exit();
    }
}

?>
