<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>



<!-- Declare php variables-->
<?php

$first_name = "Cristi";
$last_name = "Draghia";
$name = $first_name . " " . $last_name;
$wow = "<h1>$name</h1>";

echo $wow;

?>

<h2><?php echo $first_name . " " . $last_name; ?></h2>


  
</body>
</html>