<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="style.css">
  <title>Get Your Ticket</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<header>
        <nav>
            <a href="index.php" class="music_logo">
                <img src="images/logo.png" alt="logo image">
            </a>
            <div class="hamburger_menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="mobile_menu">
               
                <li><a class="nav_link_ticket" href="./home.php">Home</a></li>
            </ul>
            <ul class="nav_link">
                <li><a class="nav_link_line" href="#">About</a></li>
                <li><a class="nav_link_line" href="#">concert</a></li>
                <li><a class="nav_link_line" href="#">ticket</a></li>
            </ul>
        </nav>

    </header>

  

  <main id="main" class="main">

  <div class="pagetitle">
      <h1>Get Your Ticket</h1>
     
    </div><!-- End Page Title -->

    <div class="tambahmember">
      <a href='form.php'><button type="button" class="btn btn-dark">Tambah Tiket</button></a>
    </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id Member</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Cabang Kota</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    
  <?php 
            include  'koneksi2.php';
            $query=mysqli_query($konek,"select* from member");
            while($data=mysqli_fetch_array($query))
            { ?>
                <tbody>
                    <tr>
                      <th scope="row"><?php echo $data['id_member']; ?></th>
                      <td><?php echo $data['nama']; ?></td>
                      <td><?php echo $data['email']; ?></td>
                      <td><?php echo $data['tanggal_lahir']; ?></td>
                      <td><?php echo $data['kota']; ?></td>
                      <td>
                        <a href=edit.php?id_member=<?php echo $data['id_member'];?>><button type="button" class="btn btn-success"><i class="bi bi-pencil"></i> Edit</button></a> |
                        <a href=hapus.php?id_member=<?php echo $data['id_member'];?>><button type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i> Hapus</button></a> 
                      </td>
                    </tr>
                  </tbody>
            <?php } ?>

  </tbody>
</table>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer fixed-bottom">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>