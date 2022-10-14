<?php 
    $id_tamu = $_GET['id_tamu'];    
    // $nama_tamu = $_GET['nama_tamu'];
    // $no_kamar = $_GET['no_kamar'];
    // $nama = $_GET['nama'];
    // // $email = $_GET['email'];
    // // $nohp = $_GET['nohp'];  
    // // $role = $_GET['role'];

    $database = new PDO("mysql:host=localhost;dbname=hotel_hebat1", 'root', '');
    $query = $database->query("SELECT * FROM `transaksi` where `id_tamu`='$id_tamu'");
    // $query = $database->query("SELECT * FROM `tamu` where `id_tamu`='$id_tamu'");
    $data = $query->fetch();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
    <div class="container-sm">
    <form action="proses_edit.php" method="post">
        <!-- <input type="hidden" name="id_tamu" value="<?= $id_tamu ?>">
        <div>
            <label>Id</label>
            <input type="text" name="id_tamu" value="<?= $data['id_tamu'] ?>"class="form-control" id="floatingInput">
        </div> -->
        
        <div>
            <label>Nama</label>
            <input type="text" name="nama_tamu" value="<?= $data['nama_tamu'] ?> "class="form-control" id="floatingInput">
        </div>

        <div>
            <label>NO KAMAR</label>
            <input type="text" name="no_kamar"  value="<?= $data['no_kamar'] ?> "class="form-control" id="floatingInput">
        </div>
        <div><br>
            
            
            
        <button type="submit" class="btn btn-info">Simpan</button>
    </form>
    </div>
</body>
</html>     