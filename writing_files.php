<?php

$file = 'example.txt';

if ( $handle = fopen( $file, 'w' ) ) {

  fwrite( $handle, 'I just wrote in this file with PHP' );

  fclose( $handle );

} else {
  echo 'The application was not able to write this file';

}









?>