<?php
$user = 'localhost';
$name = 'root';
$pass = '';
$db = 'komunitas';
$con = mysqli_connect($user, $name, $pass, $db);
if (!$con) {
  die('Database tidak ditemukan ' . mysqli_connect_error());
}
?> 