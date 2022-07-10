<?php
session_start();
include 'connect.php';
$newId=$_SESSION['newId'];
$username=$_GET['username'];
$comment=$_POST['comment'];
var_dump($_GET['username']);
var_dump($_SESSION['newId']);
$sql="INSERT INTO comments(`newsid`,`username`,`text`) VALUES ('$newId','$username','$comment')";
$result=$mysqli->query($sql);
var_dump($result);
header('Location:index.php');
?>
