<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Isi Transaksi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
<?php if (!isset($_SESSION)) session_start();
if (isset($_POST['bTransaksiBaru'])) {
	include('koneksi.db.php');
	$Pembeli=filter_var($_POST['Pembeli'],FILTER_SANITIZE_STRING);
	$TglTransaksi=filter_var($_POST['TglTransaksi'],FILTER_SANITIZE_STRING);
	$IdKasir=filter_var($_POST['IdKasir'],FILTER_SANITIZE_STRING);
    $sql1="insert into transaksi (TglTransaksi,Pembeli,IdKasir) values ('".$TglTransaksi."','".$Pembeli."','".$IdKasir."')";
    $q=mysqli_query($koneksi,$sql1);
    if ($q) {
	 $sql="select * from transaksi where Pembeli ='".$Pembeli."' and TglTransaksi='".$TglTransaksi."' and IdKasir='".$IdKasir."';";
	 $q=mysqli_query($koneksi,$sql);
	 $r=mysqli_fetch_array($q);
	 $IdTransaksi=$r['IdTransaksi'];
	$_SESSION['IdTransaksi']=$IdTransaksi;
	echo "Id Transaksi = ".$_SESSION['IdTransaksi']."<br>";	
	 echo "Transaksi Tgl : ".$TglTransaksi."<br>";
	 echo "Pembeli : ".$Pembeli."<br>";
	 echo "IdKasir : ".$IdKasir."<br>";
     $sql2="select * from transaksi Where IdTransaksi = '".$IdBaru."';";
    }	 
}
?>
  <h2>Stacked form</h2>
  <form method="post">
  
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<div class="container mt-3">
<iframe name="frmisitransaksi" src="frameisitransaksi.php" width="100%" height="300px"></iframe>
</div>
<div class="container mt-3">
<iframe name="frmtabelisitransaki" src="tabeltransaksi.php" width="100%" height="300px"></iframe>
</div>
</body>
</html>