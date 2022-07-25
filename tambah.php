<?php
require_once 'config/koneksi.php';

if (isset($_POST['submit'])) {
  $nama_produk = $_POST['nama_produk'];
  $harga = $_POST['harga'];
  $qty = $_POST['qty'];
  $q = $conn->query("INSERT INTO produk VALUES ('', '$nama_produk', '$harga', '$qty')");
  if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data produk berhasil ditambahkan'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data produk gagal ditambahkan'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}
?>