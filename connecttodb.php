<?php
/*this pph file is used for connecting to the database*/
$conn = mysqli_connect('127.0.0.1','Admin','qwertyuiop','webuser'); 
  if (!$conn) {
    echo "not connected".mysqli_connect_error();
  }
?>