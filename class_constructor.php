<?php

class Car {

  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 4;

  function __construct (
    $wheels_number, 
    $hood_number,
    $engine_number,
    $doors_number, ) {
      $this->wheels = $wheels_number;
      $this->hood = $hood_number;
      $this->engine = $engine_number;
      $this->door = $doors_number;   
      echo "$this->wheels $this->hood $this->engine $this->doors <br>"; 
  }

  

}

$bmw = new Car(8, 2, 2, 8);
$truck = new Car(1, 2, 3, 4)
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