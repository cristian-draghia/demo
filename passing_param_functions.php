<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Param</title>
</head>
<body>
  


<?php

$number1 = 15;
$number2 = 16;

function greeting($message){

  echo $message;

}

function calculate($a, $b){
  $sum = $a + $b;

  return $sum;
}

echo calculate($number1, $number2);
greeting("<br>Hello world!");

?>


</body>
</html>