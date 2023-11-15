<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hapus Kasir</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Hapus Kasir</h2>
<?php 
if ((isset($_POST['IdKasir'])) and (!empty($_POST['IdKasir']))) {
	$IdKasir=filter_var($_POST['IdKasir'],FILTER_SANITIZE_STRING);
	include('koneksi.db.php');
	$sql="delete from kasir where IdKasir ='".$IdKasir."'";
	$q=mysqli_query($koneksi,$sql);
	$r=mysqli_fetch_array($q);
	if ($q) {
		echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert" onclick="window.history.back()"></button>
  <strong>Hapus Kasir</strong> Kasir sudah dihapus ! </div>';
	} else {
		echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert" onclick="window.history.back()"></button>
  <strong>Cari Kasir</strong> Kasir gagal dihapus ! </div>';
	}
}
?>
</div>

</body>
</html>