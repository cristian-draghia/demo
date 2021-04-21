<?php

class Car {

  function MoveWheels($car_name) {

    echo "Wheels of $car_name are moving <br>";

  }


}

$bmw = new Car();
$merces_benz = new Car();

$bmw->MoveWheels("BMW");

$merces_benz->MoveWheels("merces_benz");

$bmw->MoveWheels("BMW");

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