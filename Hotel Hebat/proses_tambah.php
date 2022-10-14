<?php
$no_transaksi = $_POST['no_transaksi'];
$id_tamu = $_POST['id_tamu'];
$nama_tamu = $_POST['nama_tamu'];
$no_kamar = $_POST['no_kamar'];
$tgl_masuk = $_POST['tgl_masuk'];
$tgl_keluar = $_POST['tgl_keluar'];

    $database = new PDO("mysql:host=localhost;dbname=hotel_hebat1", 'root', '');
    $query = $database->query("INSERT INTO `transaksi` values('$no_transaksi','$id_tamu','$nama_tamu','$no_kamar','$tgl_masuk','$tgl_keluar')");
    // $query = $database->query("insert into role values('$username','$password','$role')");

    if($query){
        header("Location:index.php");
     }