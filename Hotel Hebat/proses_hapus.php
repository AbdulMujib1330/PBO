<?php

$id_tamu = $_GET['id_tamu'];

$db = new PDO("mysql:host=localhost;dbname=hotel_hebat1", 'root', '');
$query = $db->query("DELETE FROM `transaksi` WHERE id_tamu='$id_tamu'");
// $query = $db->query("DELETE FROM `role` WHERE id_user='$id_user'");

if($query){
    header("location:index.php");
}