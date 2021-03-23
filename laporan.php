
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Saber Pungli</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>Saber Pungli</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="index.php">Beranda</a></li>
		  <li><a class="nav-link" href="dumas.php">Pengaduan Masyarakat</a></li>
		  <li><a class="nav-link" href="pungli.php">Pengaduan Pungli</a></li>
		  <li><a class="nav-link" href="laporan.php">Cek Status</a></li>
          <li><a class="getstarted" href="Operational/">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Beranda</a></li>
          <li>Cek Laporan</li>
        </ol>
        <h2>Saber Pungli</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
	  <h1>Laporan Anda</h1>
		<?php
include 'Operational/web_config_vars.php';
?>
<div class="row">
<div class="col-lg-6">
		  <h2>Cek Laporan Pengaduan Masyarakat</h2>
		  <h3>Masukkan Nomor Tiket Anda</h3>
<form action="laporan.php" method="get">
						<div class="input-group">
     
      <input name="cari" class="form form-control" type="text" placeholder="Search"/>
                                                <span class="form-group input-group-btn">
        <input class="btn btn-info" type="submit" value="Cari">
      </span>
	  </div>
	  </form>
          <table class="table table-hover">
		  <thead>
		 <tr><th>No. Tiket</th><th>Laporan</th><th>Tanggal</th><th>Status</th></tr>
		  </thead>
		  <tbody>
		  <?php
		  if(isset($_GET['cari'])){
		$data = mysql_query("select * from dumas where tiket like '%".$cari."%' order by tanggal ASC");
		}
	while($row = mysql_fetch_array($data))
	{
				echo "<tr><td>".$row['nik']."</td>";
                echo "<td>".$row['laporan']."</td>";
                echo "<td>".$row['tanggal']."</td>";
                echo "<td>".$row['status']."</td></tr>";
				
				}
				?>
		  </tbody>
		  </table>
		  </div>
		  <div class="col-lg-6">
		  <h2>Cek Laporan Pungli</h2>
		  <h3>Masukkan Nomor Tiket Anda</h3>
		  <form action="laporan.php" method="get">
						<div class="input-group">
     
      <input name="lihat" class="form form-control" type="text" placeholder="Search"/>
                                                <span class="form-group input-group-btn">
        <input class="btn btn-info" type="submit" value="Cari">
      </span>
	  </div>
	  </form>
          <table class="table table-hover">
		  <thead>
		 <tr><th>No. Tiket</th><th>Pengaduan</th><th>Laporan</th><th>Tanggal</th><th>Status</th></tr>
		  </thead>
		  <tbody>
		  <?php
		  if(isset($_GET['lihat'])){
		$data = mysql_query("select * from pungli where tiket like '%".$lihat."%' order by tanggal ASC");
		}
	while($row = mysql_fetch_array($data))
	{
				echo "<tr><td>".$row['nik']."</td>";
                echo "<td>".$row['pengaduan']."</td>";
                echo "<td>".$row['laporan']."</td>";
                echo "<td>".$row['tanggal']."</td>";
                echo "<td>".$row['status']."</td></tr>";
				
				}
				?>
		  </tbody>
		  </table>
		  </div>
		  </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Saber Pungli</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>