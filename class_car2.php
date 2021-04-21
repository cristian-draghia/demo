<?php

class Car {

  function MoveWheels() {

    echo "Wheels are moving";

  }


}


if ( method_exists("Car", "MoveWheels") ) {
  echo "Methode Exists";
} else {
  echo "noo";
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>