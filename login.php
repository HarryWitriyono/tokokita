<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap.bundle.min.js"></script>
  <style>
  img.avatar {
  width: 20%;
  border-radius: 50%;
}
  </style>
</head>
<body>
<div class="container mt-3">
<img src="images/img_avatar2.png" alt="Avatar" class="avatar">
<h2>Login Form Toko V.2023</h2>
  <form method="post">

    <div class="input-group mb-3">
      <span class="input-group-text">Username</span>
      <input class="form-control" type="text" placeholder="Enter Username" id="uname" name="uname" required>
    </div> 
    <div class="input-group mb-3">
      <span class="input-group-text">Password</span>
      <input class="form-control" type="password" placeholder="Enter Password" name="psw" required>
    </div>
	<button type="submit" class="btn btn-primary" name='bLogin'>Login</button>
  </form>
<?php 
if ((isset($_POST['bLogin'])) and (isset($_POST['uname'])) and (!empty($_POST['uname']))) {
	$NamaKasir=filter_var($_POST['uname'],FILTER_SANITIZE_STRING);
	$Password=filter_var($_POST['psw'],FILTER_SANITIZE_STRING);
	include('koneksi.db.php');
	$sql="select * from kasir where NamaKasir='".$NamaKasir."' and Password='".$Password."'";
	$q=mysqli_query($koneksi,$sql);
	$r=mysqli_fetch_array($q);
	if (empty($r)) {
		echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert" onclick="window.history.back()"></button>
  <strong>Cari Kasir</strong> Kasir Tidak Ditemukan ! Kode Kasir tidak boleh kosong. </div>';
		exit();
	} else {
		if (!isset($_SESSION)) session_start();
		$_SESSION['_login']=$r['IdKasir'];
		echo '<script>window.location.replace("index.php");</script>';
	}
} 
?>
</div>
</body>
</html>