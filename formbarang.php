<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Tabel Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Form Tabel Barang</h2>
  <form method="post" action="simpanbarang.php">
   <div class="input-group mb-3">
    <span class="input-group-text">Kode Barang</span>
    <input type="text" class="form-control" name="KodeBarang">
   </div>
   <div class="input-group mb-3">
    <span class="input-group-text">Nama Barang</span>
    <input type="text" class="form-control" name="NamaBarang">
   </div>
   <div class="input-group mb-3">
    <span class="input-group-text">Jumlah Stok Barang</span>
    <input type="text" class="form-control" name="Jumlah">
   </div>
   <div class="input-group mb-3">
    <span class="input-group-text">Satuan Barang</span>
    <input type="text" class="form-control" name="Satuan">
   </div>
   <div class="input-group mb-3">
    <span class="input-group-text">Harga Satuan Barang</span>
    <input type="text" class="form-control" name="HargaSatuan">
   </div>
   <button type="submit" class="btn btn-primary">Simpan Barang Baru</button>
   <button type="submit" class="btn btn-success" formaction="caribarang.php">Cari Barang</button>
  </form>
</div>

</body>
</html>