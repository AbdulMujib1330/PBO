<?php
session_start();
if(!isset($_SESSION["username"])) { 
   header("Location:form.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Siswa</title>
  </head>
  <body>
    <style>
      body{
        background
      }
    </style>
        <?php
        
        $db = new PDO("mysql:host=localhost;dbname=hotel_hebat1", 'root', '');
        $query = $db->query("SELECT * FROM user");
        ?>
    
    <h1>Data Siswa</h1>
    <div class="container-sm">
        <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered border-info">
    
        <tr>
                <th>Id User</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Hp</th>
                <th>Role</th>
                
                
            </tr>

        <?php while($data = $query->fetch()): ?>
            <tr>
                <td><?= $data['id_user'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['nohp'] ?></td>
                <td><?= $data['role'] ?></td>

        <?php endwhile ?>

        </table>
        </div>

    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <form action="logout.php">
        <button onclick="alert('Anda Telah Logout') "class="btn btn-danger">Logout</button>
</form>
    
  </body>
</html>