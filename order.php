<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit();
}

$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="order_style.css">
  <link rel="icon" href="images/logo.ico">
</head>
<body>
    <section class="homepage">
        <div class="homepage_content">
          <div class="header_content">
            <h1 class="h1_image">FORM PEMESANAN</h1>
          </div>
          <form class="booking_form" action="order_proses.php" method="post">
            <div class="form_group">
              <label for="username">Nama:</label>
              <input type="text" id="username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="form_group">
              <label for="banyak_tiket">Jumlah:</label>
              <input type="number" id="banyak_tiket" name="banyak_tiket" min="1" required>
            </div>
            <button type="submit">Pesan Tiket</button>
          </form>
        </div>
      </section>
</body>
</html>
