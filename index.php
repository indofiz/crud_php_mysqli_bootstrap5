<?php
// panggil koneksinya
require_once 'config/koneksi.php';
?><!DOCTYPE html>
<html>
<head>
  <title>CRUD dengan PHP MySQLi</title>
</head>
<body>
  <h1>CRUD dengan PHP MySQLi</h1>

  <form method="post" action="tambah.php">
    <input type="text" name="nama_produk" placeholder="Nama Produk">
    <input type="number" name="harga" placeholder="Harga">
    <input type="number" name="qty" placeholder="Qty">
    <input type="submit" name="submit" value="Tambah Data">
  </form><br/>
  <table border="1">
    <tr>
      <th>No.</th> <th>Nama Produk</th>
      <th>Harga</th>
      <th>Qty</th>
      <th colspan="2">Aksi</th>
    </tr>
    <?php
    $q = $conn->query("SELECT * FROM produk");$no = 1;
    while ($dt = $q->fetch_assoc()) :
    ?>
    <tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['nama_produk'] ?></td>
      <td><?= $dt['harga'] ?></td>
      <td><?= $dt['qty'] ?></td>
      <td><a href="update.php?id=<?= $dt['id_produk'] ?>">Ubah</a></td>
      <td><a href="hapus.php?id=<?= $dt['id_produk'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>
    <?php endwhile;?>
  </table>
</body>
</html>