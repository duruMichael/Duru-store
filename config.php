<?php

$conn = mysqli_connect('localhost' ,'root','','oshop_db') or die('connect failed');
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>