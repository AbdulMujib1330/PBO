<?php
 session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];
    


 $koneksi = new PDO('mysql:host=localhost;dbname=hotel_hebat1','root','');

 $query = $koneksi->query("select * from role where username='$username' AND password='$password'");
 $data = $query->fetch();
 if($query->rowCount() > 0){
      if($data['role']=="admin"){
      $_SESSION['username'] = $username;
      header("Location:index.php");
   }
  //  else if($data['role']=="user"){
  //     $_SESSION['username'] = $username;
  //     header("Location:user_index.php");
  // }
}else{
  header("Location:form.php");
}