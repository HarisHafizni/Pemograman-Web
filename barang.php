<?php 
session_start();
if ($_SESSION['role'] != 'admin') {
    echo "
    <script>
    alert('Halaman ini hanya bisa di akses oleh admin');
    window.location = 'profile.php';
    </script>
    ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./plugin/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Produk</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
        <div class="container-fluid">
          <a style="color:black" class="navbar-brand" href="#"><b>Pemweb</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a style="color:black" class="nav-link" aria-current="page" href="./index.php"><b>Home</b></a>
              </li>
              <li class="nav-item">
                <a style="color:black" class="nav-link" href="#"><b>History</b></a>
              </li>
              <li class="nav-item">
                <a style="color:black" class="nav-link active" href="#"><b>Produk</b></a>
              </li>
            </ul>
              <a style="color:black" href="backend/logout.php" class="btn btn-danger"><b>Logout</b></a>
          </div>
        </div>
</nav>
    <h1>Produk</h1>
    <div style="border: none !important" class="card m-1">
      <div class="card-body">
        <div class="card-title d-flex justify-content-between">
        <a class="btn btn-warning mb-2" href="backend/create.php"><b>Tambah Data</b></a>
        </div>
    <table class="table">
        <thead class="table-primary">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Gambar Produk</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require './config/db.php';
                $base_url = "http://localhost/pemweb-otorisasi-main/";

                $products = mysqli_query($db_connect,"SELECT * FROM products");
                $no = 1;

                while($row = mysqli_fetch_assoc($products)) {
            ?>
                <tr>
                    <td><?=$no++;?></td>
                    <td><?=$row['name'];?></td>
                    <td>Rp <?= number_format($row['price'], 0, ',', '.'); ?></td>
                    <!-- <td><img src="<?=$row['image'];?>" width="100"></td> -->
                    <td><a class="btn btn-info" href="<?php echo $base_url ?><?=$row['image'];?>" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</a></td>
                    <td>
                        <a class="btn btn-success" href="backend/edit.php?id=<?=$row['id'];?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                        <button onclick="hapus(<?php echo $row['id']; ?>)" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>

                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
      </div>
    </div>
    <script src="../plugin/js/bootstrap.min.js"></script>
    <script>
    function hapus(id_user){
        var konfirmasi = confirm("Anda yakin ingin menghapus data ini?");
        if(konfirmasi == true){
            window.location.href = "backend/delete.php?id=" + id_user;
        }
        else {
            return false;
        }
    }
</script>
</body>
</html>
