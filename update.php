<?php
  require_once 'config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class='container pt-5'>
  
  <?php
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $q = $conn->query("SELECT * FROM produk WHERE id_produk = '$id'");
      foreach ($q as $dt) :
    ?>
      <h1>CRUD dengan PHP MySQL</h1>
      <h2>Halaman Ubah Data</h2>
      <form class="mt-5" action="proses_update.php" method="post">
        <input type="hidden" name="id_produk" value="<?= $dt['id_produk'] ?>">

        <div class="row">
          <div class="col-3">
            <input class="form-control" type="text" name="nama_produk" value="<?= $dt['nama_produk'] ?>">
          </div>
          <div class="col-3">
            <input class="form-control" type="number" name="harga" value="<?= $dt['harga'] ?>">
          </div>
          <div class="col-3">
            <input class="form-control" type="number" name="qty" value="<?= $dt['qty'] ?>">
          </div>
          <div class="col-3">
            <input class="btn btn-primary" type="submit" name="submit" value="Ubah Data">
          </div>
        </div>
      </form>
    <?php
      endforeach;
    }
  ?>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>