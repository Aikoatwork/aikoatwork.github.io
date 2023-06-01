<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    
    $query = "SELECT * FROM member WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        header("Location: register.php?error=1");
        exit;
    }
    elseif($password !== $cpassword){
        header("Location: register.php?error=3");
        exit();
    }
    else {
        $query = "INSERT INTO member (username, email, password) VALUES ('$username', '$email', '$password')";
        $insertResult = mysqli_query($conn, $query);

        if ($insertResult) {
            header("Location: login.php");
            exit;
        } else {
            header("Location: register.php?error=2");
            exit();
        }
    }
}

?>