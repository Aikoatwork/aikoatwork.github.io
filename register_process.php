<?php
require 'koneksi.php';

// Periksa proses signup
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    
    // Periksa apakah username sudah ada dalam database
    $query = "SELECT * FROM data_user WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    // Jika username sudah ada, tampilkan pesan error
    if (mysqli_num_rows($result) > 0) {
        header("Location: signup.php?error=1");
        exit;
    }
    elseif($password !== $cpassword){
        header("Location: register.php?error=3");
        exit();
    }
    else {
        // Jika username belum ada, simpan data pengguna baru ke database
        $query = "INSERT INTO data_user (username, email, password) VALUES ('$username', '$email', '$password')";
        $insertResult = mysqli_query($conn, $query);

        // Periksa hasil insert
        if ($insertResult) {
            // Signup berhasil, arahkan ke halaman login
            header("Location: login.php");
            exit;
        } else {
            // Jika terjadi kesalahan saat insert, tampilkan pesan error
            header("Location: register.php?error=2");
            exit();
        }
    }
}

?>