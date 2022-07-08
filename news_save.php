<?php
session_start();
function check_inputs($title,$shortText,$tematic,$fulltext)
{
  if (empty($title) OR empty($shortText)  OR empty($tematic)  OR empty($fulltext)) {
    return false;
  }
  else {
    return true;
  }
}
 if (check_inputs($_POST['title'],$_POST['shortText'],$_POST['tematics'],$_POST['fulltext'])==true) {
$title=trim($_POST['title']);
$shortText=trim($_POST['shortText']);
$tematic=trim($_POST['tematics']);
$fulltext=trim($_POST['fulltext']);
$pub_date=date("m.d.y");
include 'connect.php';
$sql="INSERT INTO news(`title`,`text`,`date`,`tematic`,`short_text`) VALUES('$title','$fulltext','$pub_date','$tematic','$shortText')";
$result=$mysqli->query($sql);
$_SESSION['error_add']='';
header('Location:/admin_add_news.php');
 }
 else {
   $_SESSION['error_add'][0]='Ошибка при добавлении новости';
   header('Location:/admin_add_news.php');
 }
?>
