<!DOCTYPE html>
<html lang="en">
<head>
  <title>Toko V.2023 - Transaksi Penjualan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Form Transaks Penjualan</h2>
  <form method="post" action="frameisitransaksi.php" target="frmmenu">
  <div class="input-group mb-3">
   <span class="input-group-text">Tgl Transaksi:</span>
   <input type="date" class="form-control" name="TglTransaksi" value="<?php echo date('Y-m-d');?>">
  </div>
  <div class="input-group mb-3">
   <span class="input-group-text">Pembeli:</span>
   <input type="text" class="form-control" name="Pembeli" value="<?php echo 'Pembeli'.date('YmdHis');?>">
  </div>
  <input type="text" name="IdKasir" value="<?php if (!isset($_SESSION)) session_start();echo $_SESSION['_login'];?>">
  <button type="submit" class="btn btn-primary" name="bTransaksiBaru">Transaksi Baru</button>
  </form>
</div>
</body>
</html>