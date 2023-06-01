<?php 
 
include 'koneksi.php';
 
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM member WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="login_style.css">
    <link rel="icon" href="images/logo.ico">
    <title>Login</title>
</head>

<body>
    <div class="container">

        <form action="login_process.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == 1) {
                    echo "<p>Username/Email tidak terdaftar</p>";
                } elseif ($_GET['error'] == 2) {
                    echo "<p>Password salah</p>";
                }
            }
            ?>
            <div class="input-group">
                <input type="text" placeholder="Username/Email" name="kredensial" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Belum punya akun? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>

</html>