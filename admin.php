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
    <title>Admin</title>
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
                <a style="color:black" class="nav-link active" aria-current="page" href="./index.php"><b>Home</b></a>
              </li>
              <li class="nav-item">
                <a style="color:black" class="nav-link" href="#"><b>History</b></a>
              </li>
              <li class="nav-item">
                <a style="color:black" class="nav-link" href="barang.php"><b>Produk</b></a>
              </li>
            </ul>
              <a href="backend/logout.php" class="btn btn-danger">Logout</a>
          </div>
        </div>
</nav>
    <h1>Selamat datang Administrator: <?php echo $_SESSION['name']?></h1>
</body>
</html>
