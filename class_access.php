<?php

class Car {

  public $wheels = 4;
  protected $hood = 1;
  private $engine = 1;
  var $doors = 4;




}

$bmw = new Car();
// $bmw->show_property();

class Semi extends Car {

  function show_property() {
    echo $this->hood;
  }

}

$semi = new Semi();
$semi->show_property();



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