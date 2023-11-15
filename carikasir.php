<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hasil Cari Kasir</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap.bundle.min.js"></script>
</head>
<body>
<?php 
if ((isset($_POST['NamaKasir'])) and (!empty($_POST['NamaKasir']))) {
	$NamaKasir=filter_var($_POST['NamaKasir'],FILTER_SANITIZE_STRING);
	include('koneksi.db.php');
	$sql="select * from kasir where NamaKasir ='".$NamaKasir."'";
	$q=mysqli_query($koneksi,$sql);
	$r=mysqli_fetch_array($q);
	if (empty($r)) {
		echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert" onclick="window.history.back()"></button>
  <strong>Cari Kasir</strong> Kasir tidak ditemukan ! </div>';
		exit();
	} else {
		echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Cari Kasir</strong> Kasir Ditemukan ! </div>';
	}
?>
<div class="container mt-3">
  <h2>Form Hasil Cari Kasir</h2>
  <form method="post" action="simpankoreksikasir.php">
   <div class="input-group mb-3">
    <span class="input-group-text">Kode Kasir</span>
    <input type="text" class="form-control" name="IdKasir" value="<?php echo $r['IdKasir'];?>">
   </div>
   <div class="input-group mb-3">
    <span class="input-group-text">Nama Kasir</span>
    <input type="text" class="form-control" name="NamaKasir" value="<?php echo $r['NamaKasir'];?>">
   </div>
   <div class="input-group mb-3">
    <span class="input-group-text">Password</span>
    <input type="password" class="form-control" name="Password" value="<?php echo $r['Password'];?>">
   </div>
   <button type="submit" class="btn btn-primary">Simpan Hasil Koreksi Kasir</button>
   <button type="submit" class="btn btn-success" formaction="hapuskasir.php">Hapus Kasir</button>
   <a href="formkasir.php" class="btn btn-primary">Form Kasir</a>
  </form>
</div>
<?php 
} else {
	echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert" onclick="window.history.back()"></button>
  <strong>Cari Kasir</strong> Kasir Tidak Ditemukan ! Kode Kasir tidak boleh kosong. </div>';
}//end if isset Kodekasir
?>
</body>
</html>