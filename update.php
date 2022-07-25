<?php
  require_once 'config/koneksi.php';
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $q = $conn->query("SELECT * FROM produk WHERE id_produk = '$id'");
    foreach ($q as $dt) :
  ?>
    <h1>CRUD dengan PHP MySQL</h1>
    <h2>Halaman Ubah Data</h2><form action="proses_update.php" method="post">
      <input type="hidden" name="id_produk" value="<?= $dt['id_produk'] ?>">
      <input type="text" name="nama_produk" value="<?= $dt['nama_produk'] ?>">
      <input type="number" name="harga" value="<?= $dt['harga'] ?>">
      <input type="number" name="qty" value="<?= $dt['qty'] ?>">
      <input type="submit" name="submit" value="Ubah Data">
    </form>
  <?php
    endforeach;
  }
?>