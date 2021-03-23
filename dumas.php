
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
          <li>Pengaduan Masyarakat</li>
        </ol>
        <h2>Saber Pungli</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
	  <?php
include 'Operational/web_config_vars.php';
?>
	  <?php
		if ($_POST['act']=="add"){
    $sql_add="INSERT INTO dumas(tiket,tanggal,laporan,status,tampilkan) VALUES ("
    ."'".date("YmdHis")."','".date("Y-m-d")."','".$_POST['laporan']."','".$_POST['status']."','".$_POST['tampilkan']."'
    ) ";
    @mysql_query($sql_add);
if ($sql_add)
echo "<script>window.location='landing.php?id=".$_POST['id']."'</script>";
}
?>
	  <table class="table table-stiped">
<form method="post" enctype="multipart/form-data" class="form form-inline">
<?php
		$data = mysql_query("select * from dumas order by id DESC");
	$row = mysql_fetch_array($data);
  $mulai = $row['id'];
  $no =$mulai+1;
echo'<input name="id" type="hidden" class="form form-control" value="'.$no.'">';
?>
<tr><td width="20%"><h2>Ketikkan laporan anda disini:</h2></td><td><textarea name="laporan" cols="" rows="5" class="form form-control"></textarea></td></tr>
<tr><td><input type="submit" value="Kirim Laporan" class="btn btn-primary">
<input type="hidden" name="act" value="add">
<input type="hidden" name="status" value="Baru">
<input type="hidden" name="tampilkan" value="Tampil">
    </td><td></td></tr>
	</table>
	</form>
	  <br><br>
	  <h1>Apa Itu Saber Pungli?</h1>
        <p><b>Saber Pungli</b><br>
		Saber Pungli Merupakan layanan pengaduan online masyarakat. dengan adanya aplikasi pengaduan secara online pelapor akan lebih mudah untuk menyampaikan laporan langsung kepada instansi kepolisian terkait. Dumas merupakan salah satu bentuk penerapan pengawasan masyarakat yang di sampaikan oleh masyarakat, Instansi pemerintah atau pihak lain kepada Polri berupa keluhan/ pegaduan, saran/gagasan yang bersifat membangun.<br><br><br>
		
<b>Dasar Hukum Dumas terdapat dalam ;</b><br>
* UU Nomor 2 Tahun 2002 tentang Kepolisian Negara Republik Indonesia<br>
* Peraturan Kepolisian Negara Republik Indonesia Nomor 9 Tahun 2018 tentang Tata Cara Penanganan Pengaduan Masyarakat di Lingkungan Kepolisian Negara Republik Indonesia.<br><br><br>

<b>Tata cara penanganan Saber Pungli di lingkungan Polri bertujuan untuk ;</b><br>
- Terselenggaranya pelayanan Dumas yang baik oleh Polri dalam upaya meningkatkan kepercayaan masyarakat,<br>
- Terselenggaranya pengawasan dan pengendalian yang akuntabel dalam penanganan Dumas,<br>
- Terselesaikannya Dumas secatra baik, tepat dan dapat dipertanggungjawabkan.<br><br><br>


<b>Untuk tata cara penanganan Saber Pungli di lingkungan Polri dilaksanakan dengan Prinsip ;</b><br>
* Legalitas, yaitu mengutamakan landasan peraturan perundang-undangan,<br>
* Transparan, yaitu memberi kesempatan kepada masyarakat dalam melaksanankan haknya untuk memperoleh informasi yang benar, jujur dan tidak diskriminatif terhadap penanganan Dumas berdasarkan tatacara dan tindak lanjutnya,<br>
* Koordinasi, yaitu melaksanakan kerja sama yang baik antar pejabat yang berwewenang dengan aparatur pemerintah dan nonpemerintah berdasarkan tata cara, tata kerja dan prosedur yang berlaku,<br>
* Evektifitas dan efisiensi, yaitu tepat sasaran, hemat tenaga, waktu dan biaya,<br>
* Akuntabilitas, yaitu harus dapat dipertanggungjawabkan, baik proses maupun tindak lanjutnya<br>
* Objektivitas, yaitu berdasarkan fakta atau bukti tanpa dipengaruhi prasangka, interpretasi, kepentingan pribadi, golongan atau kepentingan pihak tertentu,dan<br>
* Proporsionalitas, yaitu mengutamakan kepentingan pelaksanaan tugas dan kewenangan dengan tetap memperhatikan adanya kepentingan yang sah lainnya secara seimbang.<br><br><br>

<b>Menurut Pasal 4 ayat (1) Perkapolri 9/2018 Dumas dapat disampaikan secara langsung atau tidak langsung.</b><br>
<b>Dumas secara langsung, merupakan pengadun yang disampaikan oleh pelapor secara langsung melalui;</b><br>
a. Bagian pelayanan Dumas<br>
b. Sentra pelayanan Dumas<br>
c. Unit pelayanan Dumas<br>
<b>Sedangkan Dumas secara tidak langsung, merupakan pengaduan yang disampaikan oleh pelapor melalui;</b><br>
a. Komunikasi elektronik dengan menggunakan aplikasi<br>
b. surat-menyurat.<br><br><br>

<b>Pengaduan masyarakat dapat disampaikan terkait dengan ;</b><br>
• Pelayanan Polri,<br>
• Penyimpangan perilaku pegawai negeri pada Polri,<br>
• Penyalahgunaan wewenang.
        </p>
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