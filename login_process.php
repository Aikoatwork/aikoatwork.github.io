<?php 
 
include 'koneksi.php';
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $kredensial = $_POST['kredensial']; // Mengambil input dari form (email atau username)
    $password = $_POST['password'];
 
    // Memeriksa apakah kredensial yang dimasukkan adalah email atau username
    if (filter_var($kredensial, FILTER_VALIDATE_EMAIL)) {
        $query = "SELECT * FROM member WHERE email='$kredensial'";
    } else {
        $query = "SELECT * FROM member WHERE username='$kredensial'";
    }

    $result = mysqli_query($conn, $query);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];

        // Memeriksa kecocokan password menggunakan password_verify()
        if ($password === $row['password']) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['login'] = True;
            header("Location: index.php");
            exit();
        } else {
            // Jika password salah
            header("Location: login.php?error=2");
            exit();
        }
    } else {
        // Jika email atau username tidak terdaftar
        header("Location: login.php?error=1");
        exit();
    }
}
 
?>
