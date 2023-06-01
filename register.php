<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="login_style.css">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <?php
        if (isset($_GET['error'])) {
            switch ($_GET['error']) {
                case 1:
                    echo "<p>Username sudah terdaftar.</p>";
                    break;
                case 2:
                    echo "<p>Terjadi error, coba lagi.</p>";
                    break;
            }
        }
        ?>


        <form action="register_process.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <?php
                if(isset($_GET['error']) == 3){
            ?>
                <p>Password tidak sesuai</p>
            <?php
                };
            ?>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>

            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="index.php">Login </a></p>
        </form>
    </div>
</body>

</html>