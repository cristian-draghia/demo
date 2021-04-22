<?php

$file = 'delete_test.php';


if ( file_exists( $file )) {
unlink('delete_test.php');
} else {
  echo "file doesn't exists";
}


?>