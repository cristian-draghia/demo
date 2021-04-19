<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions</title>
</head>
<body>


<?php

$number1 = 15;
$number2 = 16;

function calculate($a, $b){
  echo $a + $b;
}


function say_something($number1, $number2){

echo "Hello World! I hope you are doing fine<br>";

calculate($number1, $number2);

} 


say_something($number1, $number2);


?>




</body>
</html>