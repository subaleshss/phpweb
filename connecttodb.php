<?php
$conn = mysqli_connect('127.0.0.1','Admin','qwertyuiop','webuser'); #connecting with database
  if (!$conn) {
    echo "not connected".mysqli_connect_error();
  }
?>