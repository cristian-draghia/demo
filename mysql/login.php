<?php

if(isset($_POST["submit"])) {

  $connection = mysqli_connect("localhost", "root", "", "loginapp");

  if($connection) {
    echo "We are connected<br>";
  } else {
    die("Database connection failed");
  }

  $username = $_POST["username"];
  $password = $_POST["password"];

  if($username && $password) {

    echo $username;
    echo "<br>";
    echo $password;

  } else {
    echo "Username and/or password is not set";
  }



}

?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">

  <div class="col-sm-6">

    <form action="login.php" method="post">
    
      <div class="form-group">
      <label for="username">Username</label>
      
      <input type="text" name="username" class="form-control">
            
      </div>

      <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control">
            
      </div>

      <input class="btn btn-primary" type="submit" name="submit" value="Submit">
    
    
    
    </form>
  
  </div>



</div>

</body>
</html>