<?php
include 'Operational/web_config_vars.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  text-align: center;
  cursor: pointer;
  width: 50%;
  font-size: 18px;
  text-decoration: none;
}
.button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>


<div class="card">
  <img src="assets/img/Lambang_Polri.png" width="10%">
  <?php
		$data = mysql_query("select * from pungli where id='".$_GET['id']."'");
	while($row = mysql_fetch_array($data))
	{
  echo'
  <h2>Nomor Tiket:</h2>
  <h1>'.$row['tiket'].'</h1>
  <h2>Pengaduan:</h2>
  <p class="title">'.$row['pengaduan'].'</p>
  <h2>Laporan:</h2>
  <p class="title">'.$row['laporan'].'</p>
  <h2>Status:</h2>
  <p class="title">'.$row['status'].'</p>
  <br>
  <p class="title">Harap disimpan untuk pengecekan status laporan</p>
  <div style="margin: 24px 0;">
  </div>';
  }
  ?>
  <script>window.print()</script>
</div>

</body>
</html>
