<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Siswa</title>
</head>
<body>
    <div class="container-sm">
    <form action="proses_tambah.php" method="post">
        <div>
            <label>No Transaksi</label>
            <input type="number" name="no_transaksi" class="form-control" id="floatingInput">
        </div>

        <div>
            <label>Id Tamu</label>
            <input type="number" name="id_tamu" class="form-control" id="floatingInput">
        </div>
        <div>
        <div>   
    
        <div>
            <label>Nama</label>
            <input type="text" name="nama_tamu" class="form-control" id="floatingInput">
        </div>
        <div>
        <div>
            <label>No Kamar</label>
            <input type="text" name="no_kamar" class="form-control" id="floatingInput">
        </div>
        
        <div>
        <div>
            <label>Tanggal Masuk</label>
            <input type="date" name="tgl_masuk" class="form-control" id="floatingInput">
        </div>
        
        <div>
        <div>
            <label>Tanggal Keluar</label>
            <input type="date" name="tgl_keluar" class="form-control" id="floatingInput">
        </div>
        <div><br>
      
            
        <button type="submit" class="btn btn-info">Simpan</button>
        </div>
    </form>
    </div>
</body>
</html>