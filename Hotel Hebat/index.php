<?php

// session_start();
// if(!isset($_SESSION["username"])) { 
//    header("Location:form.php");
// }
// <a class="btn btn" href="logout.php">
?>
<!doctype html>
<html lang="en">
  <head>
  <nav class="navbar navbar-expand-lg bg-warning p-1 " style="height: 40px;">
  <div class="container-fluid">
    <form action="logout.php">
        <div class="">
        <a class="" href="logout.php" style="width: 95%;margin-left:-20px;height: 98%;"><img  src="img/PROFILE.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle m-1 p-1" width="50px" alt="profile" ></a>
    <!-- <button class="btn btn" href="logout.php" style="width: 95%;margin-left: -20px;height: 98%;"><img  src="img/PROFILE.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle m-1 p-1" width="50px" alt="profile" ></button> -->
        </div>
    </form>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
      <!-- <span class="navbar-toggler-icon"></span> -->
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tambah.php">Tambah Data</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link disabled">Disabled</a> -->
        </li>
      </ul>
      <form class="d-flex" role="search">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
      </form>
      <a class="t-Button t-Button--icon t-Button--header" href="f?p=113:1:3389858269892::NO:::"></a>
      <span><marquee width="500px" scrollamount="10"><b><a style="font-size :12px; border: 5px;">Hai Selamat Datang Di </a><a style="font-size :12px; border: 5px;" href="form.php">HOTEL HEBAT</a><a style="font-size :12px; border: 5px;"> Sebagai admin Anda Bisa Update data,hapus dan tambah data sesuai permintaan Tamu</a></marquee></span>
    </div>
  </div>
</nav>  




    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Data</title>
  </head>
  <body>
    <style>
       body
       {background-color: rgb(255,255,255);}
    </style>
        <?php
        
        $db = new PDO("mysql:host=localhost;dbname=hotel_hebat1", 'root', '');
        $query = $db->query("SELECT * FROM transaksi");
        ?>
    
    <!-- <h1>Data</h1> -->
    <div class="container-sm" style="padding: inherit;FONT-WEIGHT: 500;">
        <!-- <a href="tambah.php">Tambah Data</a> -->
        <!-- <style>
            .tableborder{
                padding: px;
            }
        </style> -->
        <table border="2" cellpadding="10" cellspacing="0" class="table table-bordered border-dark">
            <tr>
                <th  class="table-warning">NO TRANSAKSI</th>
                <th class="table-primary">ID TAMU</th>
                <th class="table-success">NAMA TAMU</th>
                <th class="table-active">NO KAMAR</th>
                <th class="table-danger">TANGGAL MASUK</th>
                <th class="table-info">TANGGAL KELUAR</th>
                <th class="table-light">Aksi</th>
                
            </tr>

        <?php while($data = $query->fetch()): ?>
            <tr>
                <td class="table-warning"><?= $data['no_transaksi'] ?></td>
                <td class="table-primary"><?= $data['id_tamu'] ?></td>
                <td class="table-success"><?= $data['nama_tamu'] ?></td>
                <td class="table-active"><?= $data['no_kamar'] ?></td>
                <td class="table-danger"><?= $data['tgl_masuk'] ?></td>
                <td class="table-info"><?= $data['tgl_keluar'] ?></td>

                <td class="table-light">
                    <a href="edit.php?id_tamu=<?= $data['id_tamu'] ?>"class="btn btn-info">Update</a>
                    <a href="proses_hapus.php?id_tamu=<?= $data['id_tamu'] ?>"class="btn btn-warning">Hapus</a>
                </td>
            </tr>
        <?php endwhile ?>

        </table>
        </div>

    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- 
    <form action="logout.php">
        <button onclick="alert('Anda Telah Logout') "class="btn btn-danger">Logout</button>
</form> -->

  </body>
</html>