<?php
include 'connect.php';
session_start();
function admin_pass($name,$pass)
{
  if ($name=='admin' AND $pass='qwerty') {
   return true;
  }
  else {
    return false;
  }
}
function user_authorize($username,$mysqli)
{
$sql="SELECT id FROM users WHERE `username`='$username'";
$result=$mysqli->query($sql);
$userid=$result->fetch_assoc();
if ($result->num_rows==1) {
  return $userid;
}
else {
  return false;
}
}
function pass_check($pass,$checkpass) {
  if (strcmp($pass,$checkpass)==0) {
    return true;
  }
  else {
    return false;
  }
}
if (!empty($_POST['username'])) {
  $name=trim($_POST['username']);
}
else {
  $_SESSION['error_message_auth[0]']='Поле псевдонима не заполнено';
  header('Location:auth_form.php');
}
if (!empty($_POST['password'])) {
  $pass=trim($_POST['password']);
}
else {
  $_SESSION['error_message_auth[1]']='Поле пароля не заполнено';
  header('Location:auth_form.php');
}
if (!empty($_POST['checkpassword'])) {
  $checkpass=trim($_POST['checkpassword']);
}
else {
  $_SESSION['error_message_auth[1]']='Поле подтверждения пароля не заполнено';
  header('Location:auth_form.php');
}
if (admin_pass($name,$pass)==true) {
  header('Location:admin_panel.php');
}
else if (user_authorize($name,$mysqli)!=false AND pass_check($pass,$checkpass)==true ) {
 $_SESSION['username']=$name;
 $_SESSION['userid']=user_authorize($name,$mysqli);
 header('Location:index.php');
}
else {
  $_SESSION['error_message_auth[2]']='Ошибка авторизации';
  header('Location:auth_form.php');
}
?>
