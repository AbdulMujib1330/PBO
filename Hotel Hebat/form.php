<?php

// session_start();
// if(!isset($_SESSION["username"])) { 
//    header("Location:form.php");
// }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<body style="background-image: url('img/background1.png');
            background-repeat:no-repeat;
            background-size:cover;
            background-position:inherit;">
    <form action="form_proses.php" method="post">
    <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
      <!-- <marquee behavior="" direction=""><h1>---------------Login---------------</h></marquee> -->
        <div class="card my-5">
          <form class="card-body cardbody-color p-lg-5">
            <div class="text-center">
            <img  src="img/PROFILE.png" class="img-fluid profile-image-pic img-thumbnail  m-1 p-1" width="30%" alt="profile" >
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="username" 
                placeholder="Name">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" placeholder="password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-dark btn-outline-primary px-5 mb-5 w-150">Login</button></div>
            </div>
</form>
  </form>
</body>
</html>