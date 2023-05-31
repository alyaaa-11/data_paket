<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <title>Data Paket</title>
  </head>
  <body>
  <?php
include('class/Database.php');
include('class/Paket.php');
?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <div class="div container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#page-top">GOsend</a>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?file=paket&aksi=tampil">Data Paket</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?file=paket&aksi=tambah">Tambah Data</a>
      </li>
    </ul>
    </div>

</nav>
<br/>
<?php
if(isset($_GET['file'])){
include($_GET['file'].'.php');
} else {
echo '<h1 align="center">Selamat Datang</h1>';
}
?>
  </body>
</html>



