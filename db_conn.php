<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'construction');

if(!$db){
  echo "Connection Failed";
}
?>