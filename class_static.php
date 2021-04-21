<?php

class Car {

  static $wheels = 4;
  var $hood = 1;


  static function move_wheels() {
    Car::$wheels = 10;
  }



}

$bmw = new Car();

// $bmw->wheels;

Car::move_wheels();

echo Car::$wheels;


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