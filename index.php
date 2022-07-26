<?php
  // panggil koneksinya
  require_once 'config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD dengan PHP MySQLi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class='container pt-5'>
  <h1>CRUD dengan PHP MySQLi</h1>

  <form class="mt-5" method="post" action="tambah.php">
    <div class="row">
      <div class="col-3">
        <input class="form-control" type="text" name="nama_produk" placeholder="Nama Produk">
      </div>
      <div class="col-3">
        <input class="form-control" type="number" name="harga" placeholder="Harga">
      </div>
      <div class="col-3">
        <input class="form-control" type="number" name="qty" placeholder="Qty">
      </div>
      <div class="col-3">
        <input class="btn btn-primary" type="submit" name="submit" value="Tambah Data">
      </div>
    </div>
  </form><br/>
  <table class='table table-bordered'>
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
      <td>Rp. <?= number_format($dt['harga']) ?></td>
      <td><?= $dt['qty'] ?></td>
      <td><a class="btn btn-success" href="update.php?id=<?= $dt['id_produk'] ?>">Ubah</a></td>
      <td><a class="btn btn-danger" href="hapus.php?id=<?= $dt['id_produk'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>
    <?php endwhile;?>
  </table>

  <!-- JAVASCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>