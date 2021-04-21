<?php

class Car {

  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 4;

  function move_wheels() {
    $this->wheels = 10;
  }

  function create_doors() {
    $this->doors = 6;    
  }

  function change_wheels($number) {
    echo "We had $this->wheels wheels ";
    $this->wheels = $number;
    echo "now we have $this->wheels";
    
  }


}

$bmw = new Car();
$truck = new Car();

$truck->change_wheels(28);

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