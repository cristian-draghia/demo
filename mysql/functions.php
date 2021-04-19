<?php include "db.php";?>
<?php

function createRows() {

  if(isset($_POST["submit"])) {
    global $connection;
 
    $username = $_POST["username"];
    $password = $_POST["password"];
  
    if($username && $password) {
  
     } else {
      echo "Username and/or password is not set";
    }
  
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $hashFormat = "$2y$10$";

    $salt = "iusesomecrazystrings22";

    $hashFormat_salt = $hashFormat . $salt;

    $password = crypt($password, $hashFormat_salt);





    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";
  
    $result = mysqli_query($connection, $query);
  
    if(!$result) {
      die("Query FAILED" . mysqli_error());
    } else {
      echo "Record Created";
    }
  
  
  }
}

function readRows() {
  global $connection;
  $query = "SELECT * FROM users";
 

  $result = mysqli_query($connection, $query);

  if(!$result) {
    die("Query FAILED" . mysqli_error());
  }

  
  while($row = mysqli_fetch_assoc($result)) {


        print_r($row);
    
  }


}


function showAllData() {
  global $connection;

  $query = "SELECT * FROM users";

  $result = mysqli_query($connection, $query);

  if(!$result) {
    die("Query FAILED" . mysqli_error());
  }


  while($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
    echo "<option value='$id'>$id</option>";
  }
}


function updateTable() {
  if(isset($_POST["submit"])) {
    global $connection;
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id_test"];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id";


    $result = mysqli_query($connection, $query);

    if(!$result) {
      echo $id;
      die("Query Failed $id " . mysqli_error($connection));
      
    } else {
      echo "Record Updated";
    }
  }
}

function deleteRows() {
  if(isset($_POST["submit"])) {

    global $connection;
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id_test"];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id";


    $result = mysqli_query($connection, $query);

    if(!$result) {
      echo $id;
      die("Query Failed $id " . mysqli_error($connection));
      
    } else {
      echo "Record Deleted";
    }
  }
}

?>