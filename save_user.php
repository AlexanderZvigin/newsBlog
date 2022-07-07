<?php
session_start();
include 'connect.php';
$gender=$_POST['gender'];
if (empty($_POST['username'])) {
  $_SESSION[error_message[2]]="Пожалуйста,введите ваш псевдоним";
  $validate_user='false';
}
if (empty($_POST['password'])) {
  $_SESSION[error_message[3]]="Пожалуйста,введите пароль";
  $validate_pass='false';
}
if (empty($_POST['email'])) {
  $_SESSION[error_message[4]]="Пожалуйста,введите адрес электронной почты";
  $validate_email='false';
}
else {
    $validate_email='true';
    $email=trim($_POST['email']);
}
if (empty($_POST['password'])) {
  $_SESSION[error_message[5]]="Пожалуйста,введите пароль";
  $validate_pass='false';
}
if (empty($_POST['country'])) {
  $_SESSION[error_message[6]]="Пожалуйста,введите страну";
  $validate_country='false';
}
else {
  $validate_country='true';
  $country=trim($_POST['country']);
}
if (empty($_POST['town'])) {
  $_SESSION[error_message[7]]="Пожалуйста,введите город";
  $validate_country='false';
}
else {
  $validate_town='true';
  $town=trim($_POST['town']);
}
if (strlen($_POST['username'])<5) {
  $_SESSION[error_message[0]]="Имя пользователя должно содержать минимум 5 символов";
  $validate_user='false';
}
else {
$name=trim($_POST['username']);
$validate_user='true';
}
function empty_username($user_name,$mysqli)
{
  $sql="SELECT `id` FROM users  WHERE  `username` = '$user_name'";
  $result_check=$mysqli->query($sql);
  if ($result_check->num_rows==1) {
    return true;
  }
  else {
    return false;
  }

}
if ($_POST['password']!=$_POST['checkpassword']) {
  $_SESSION[error_message[1]]="Пароли не совпадают";
}
else {
  $password=trim($_POST['password']);
  $checkpassword=trim($_POST['checkpassword']);
  $validate_pass='true';
}
if ($validate_user and $validate_pass and $validate_country and $validate_email and $validate_town =='true' ) {
$reg_date=date("m.d.y");
if (empty_username($name,$mysqli)==true) {
header('Location:reg.php');
$_SESSION[error_message[8]]="Псевдоним занят";
exit;
}
$result_check=$mysqli->query($sql_check);
$sql="INSERT INTO `users`(`username`,`password`,`email`,`country`,`town`,`gender`,`RegistrateDate`) VALUES('$name','$password','$email',
'$country','$town','$gender','$reg_date')";
$result=$mysqli->query($sql);
if ($result==true) {
header('Location:index.php');
}
}
?>
