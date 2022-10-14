<?php

$id_tamu = $_POST['id_tamu'];
$nama_tamu = $_POST['nama_tamu'];
// $email = $_POST['email'];
// $no_hp = $_POST['nohp'];
// $no_transaksi = $_POST['no_transaksi'];
$no_kamar = $_POST['no_kamar'];
// $tgl_masuk = $_POST['tgl_masuk'];
// $tgl_keluar = $_POST['tgl_keluar'];


$db = new PDO("mysql:host=localhost;dbname=hotel_hebat1", 'root', '');
$query = $db->query("UPDATE `transaksi` SET nama_tamu='$nama_tamu',no_kamar='$no_kamar' where id_tamu='$id_tamu'");
// $query = $db->query("UPDATE `tamu` SET nama_tamu='$nama_tamu',`email`='$email',`no_hp`='$no_hp' where id_tamu='$id_tamu'");


if($query){
    header("location:index.php");
}