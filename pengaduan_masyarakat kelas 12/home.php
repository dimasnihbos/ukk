<?php

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");

$query=$koneksi->query("select * from pengaduan");
$data =$query->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php include "navbar.php" ?>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Tanggal</th>
      <th scope="col">Nik</th>
      <th scope="col">Isi Laporan</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $pengaduan){ ?>
        <tr scope="row"></tr>
        <td><?= $pengaduan['tgl_pengaduan'] ?> </td>
        <td><?= $pengaduan['nik'] ?> </td>
        <td><?= $pengaduan['isi_laporan'] ?> </td>
        <td><?= $pengaduan['foto'] ?> </td>
        <td><img src="foto/<?= $pengaduan['foto'];?>" width="100px" style="border-radius: 10px;"/></td>
    <?php } ?>
  </tbody>
</table>
</div>
</body>
</html>