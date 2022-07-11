<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Авторизация</title>
</head>
<body>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

<style>
@import url(//fonts.googleapis.com/css?family=Montserrat:300,400,500);
.bform {
 font-family: "Montserrat", sans-serif;
 color: #8d97ad;
 font-weight: 300;
 overflow: hidden;
 position: relative;
}

.bform h1,
.bform h2,
.bform h3,
.bform h4,
.bform h5,
.bform h6 {
 color: #3e4555;
}

.bform .subtitle {
 color: #8d97ad;
 line-height: 24px;
}

.bform a {
 text-decoration: none;
}

.bform .btn-danger-gradiant {
 background: #ff4d7e;
 background: -webkit-linear-gradient(legacy-direction(to right), #ff4d7e 0%, #ff6a5b 100%);
 background: -webkit-gradient(linear, left top, right top, from(#ff4d7e), to(#ff6a5b));
 background: -webkit-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
 background: -o-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
 background: linear-gradient(to right, #ff4d7e 0%, #ff6a5b 100%);
}

.bform .btn-danger-gradiant:hover {
 background: #ff6a5b;
 background: -webkit-linear-gradient(legacy-direction(to right), #ff6a5b 0%, #ff4d7e 100%);
 background: -webkit-gradient(linear, left top, right top, from(#ff6a5b), to(#ff4d7e));
 background: -webkit-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
 background: -o-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
 background: linear-gradient(to right, #ff6a5b 0%, #ff4d7e 100%);
}

.bform .btn-md {
 padding: 15px 45px;
 font-size: 16px;
}

.bform .bg-facebook {
 background-color: #3b5a9a;
}

.bform .bg-twitter {
 background-color: #56adf2;
}

.bform .text-danger {
 color: #ff4d7e !important;
}

.bform .right-image {
 background-position: center bottom;
 background-size: cover;
 background-repeat: no-repeat;
 position: absolute;
 right: 0;
 bottom: 0;
 top: 0;
}

@media (max-width: 1023px) {
 .bform .contact-form {
 padding-left: 0;
 padding-right: 0;
 }
}

@media (max-width: 767px) {
 .bform .contact-form {
 padding-left: 15px;
 padding-right: 15px;
 }
}

@media (max-width: 1023px) {
 .bform .right-image {
 position: relative;
 bottom: -95px;
 }
}
</style>

<div class="bform py-5">
 <!-- Row -->
 <div class="row">
 <div class="container">
 <div class="col-lg-6 align-justify-center pr-4 pl-0 contact-form">
 <div class="">
 <h2 class="mb-3 font-weight-light">Авторизация </h2>
 <h6 class="subtitle font-weight-normal">Это займет не более 2 минут!</h6>
  <?php
  for ($i=0; $i <12; $i++) {
if (!empty($_SESSION['error_message_auth[$i]'])) {
  echo '<div class="alert alert-danger" role="alert">';
echo $_SESSION['error_message_auth[$i]'];
echo  '</div>' ;
}
}
 ?>

 <form class="mt-3" action="authorize.php" method="post">
 <div class="row">
 <div class="col-lg-12">
 <div class="form-group">
 <input name="username" class="form-control" type="text" placeholder="Псевдоним">
 </div>
 </div>
 <div class="col-lg-12">
 <div class="form-group">
 </div>
 </div>
 <div class="col-lg-6">
 <div class="form-group">
 <input name="password" class="form-control" type="password" placeholder="Пароль">
 </div>
 </div>
 <div class="col-lg-6">
 <div class="form-group">
 <input name="checkpassword" class="form-control" type="password" placeholder="Подтвердите пароль">
 </div>
 </div>
 <div class="col-lg-12">
 <button type="submit" class="btn btn-md btn-block btn-danger-gradiant text-white border-0"><span>Войти</span></button>
 <div class="col-lg-12 text-center mt-4">
 У вас еще нет аккаунта? <a href="reg.php.php" class="text-danger">Регистрация</a>
 </div>
 </div>
 </div>
 </form>

 </div>
 </div>
 </div>
 </div>
 <div class="col-lg-6 right-image pl-3" style="background-image:url(img/reg-photo.jpg);">
 </div>
 </div>
</div>
</body>
</html>
