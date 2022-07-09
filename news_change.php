<?php
session_start();
$id=$_SESSION['id'];
var_dump($id);
include 'connect.php';
$title=$_POST['title'];
$shortText=$_POST['shortText'];
$tematic=$_POST['tematic'];
$text=$_POST['fulltext'];
$sql="UPDATE news  SET `title`='$title',`text`='$text',`tematic`='$tematic',`short_text`='$shortText' WHERE `id`='$id'";
$result=$mysqli->query($sql);
if ($result==true) {
  header('Location:admin_news.php');
  $_SESSION['error_add']='';
}
elseif ($result==false) {
  $_SESSION['error_add'][0]='Ошибка при изменении записи, проверьте правильность ввода';
}
?>
