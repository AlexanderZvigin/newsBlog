<?php
  $hostname="localhost";
  $username="root";
  $password="";
  $database="newsblog";
$mysqli=new mysqli($hostname,$username,$password,$database);
if ($mysqli->connect_error) {
  echo "Ошибка  подключения".$mysqli->connect_error;
}
$sql = "SET NAMES utf8";
$result =  $mysqli->query($sql);
?>
