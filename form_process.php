<?php 

if(isset($_POST["submit"])) {

  $name = array("Cristi", "Tamna", "Tom");

  $minimum = 5;
  $maximum = 10;

  $username = $_POST["user"];
  $password = $_POST["password"];

  if(strlen($username) < $minimum) {

    echo "Username has to be longer than five";

  }

  if(strlen($username) > $maximum) {

    echo "Username has to be less than ten";

  }

  if(!in_array($username, $name)) {
    echo "Sorry, you are not allowed to log in";
  } else {
    echo "Welcome";
  }

  if($password > 4) {
    echo "Good Password";
  } else {
    echo "Not good Password";
  }

}

?>