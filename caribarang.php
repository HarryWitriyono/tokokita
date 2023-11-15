<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hasil Cari Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap.bundle.min.js"></script>
</head>
<body>
<?php 
if ((isset($_POST['KodeBarang'])) and (!empty($_POST['KodeBarang']))) {
	$KodeBarang=filter_var($_POST['KodeBarang'],FILTER_SANITIZE_STRING);
	include('koneksi.db.php');
	$sql="select * from barang where KodeBarang ='".$KodeBarang."'";
	$q=mysqli_query($koneksi,$sql);
	$r=mysqli_fetch_array($q);
	if (empty($r)) {
		echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert" onclick="window.history.back()"></button>
  <strong>Cari Barang</strong> Barang tidak ditemukan ! </div>';
		exit();
	} else {
		echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Cari Barang</strong> Barang Ditemukan ! </div>';
	}
?>
<div class="container mt-3">
  <h2>Form Hasil Cari Barang</h2>
  <form method="post" action="simpankoreksibarang.php">
   <div class="input-group mb-3">
    <span class="input-group-text">Kode Barang</span>
    <input type="text" class="form-control" name="KodeBarang" value="<?php echo $r['KodeBarang'];?>">
   </div>
   <div class="input-group mb-3">
    <span class="input-group-text">Nama Barang</span>
    <input type="text" class="form-control" name="NamaBarang" value="<?php echo $r['NamaBarang'];?>">
   </div>
   <div class="input-group mb-3">
    <span class="input-group-text">Jumlah Stok Barang</span>
    <input type="text" class="form-control" name="Jumlah" value="<?php echo $r['Jumlah'];?>">
   </div>
   <div class="input-group mb-3">
    <span class="input-group-text">Satuan Barang</span>
    <input type="text" class="form-control" name="Satuan" value="<?php echo $r['Satuan'];?>">
   </div>
   <div class="input-group mb-3">
    <span class="input-group-text">Harga Satuan Barang</span>
    <input type="text" class="form-control" name="HargaSatuan" value="<?php echo $r['HargaSatuan'];?>">
   </div>
   <button type="submit" class="btn btn-primary">Simpan Hasil Koreksi Barang</button>
   <button type="submit" class="btn btn-success" formaction="hapusbarang.php">Hapus Barang</button>
   <a href="formbarang.php" class="btn btn-primary">Form Barang</a>
  </form>
</div>
<?php 
} else {
	echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert" onclick="window.history.back()"></button>
  <strong>Cari Barang</strong> Barang Tidak Ditemukan ! Kode Barang tidak boleh kosong. </div>';
}//end if isset Kodebarang
?>
</body>
</html>