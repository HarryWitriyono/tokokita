<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Tabel Kasir</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Form Tabel Kasir</h2>
  <form method="post" action="simpankasir.php">
   <div class="input-group mb-3">
    <span class="input-group-text">Nama Kasir</span>
    <input type="text" class="form-control" name="NamaKasir">
   </div>
   <div class="input-group mb-3">
    <span class="input-group-text">Password</span>
    <input type="password" class="form-control" name="Password">
   </div>
   <button type="submit" class="btn btn-primary">Simpan Kasir Baru</button>
   <button type="submit" class="btn btn-success" formaction="carikasir.php">Cari Kasir</button>
  </form>
</div>

</body>
</html>