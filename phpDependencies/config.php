<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'user_db');

if(!$conn) {
  echo 'Database Connection Error!';
}

?>
