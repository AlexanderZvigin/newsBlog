<?php require_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Профиль</title>
</head>
<body>

  <link rel="stylesheet" href="https://bootstraptema.ru/plugins/2015/bootstrap3/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<script src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
<script src="https://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>

<br><br><br>

<style>
body{background:url(https://bootstraptema.ru/images/bg/bg-1.png)}

#main {
 background-color: #f2f2f2;
 padding: 20px;
-webkit-border-radius: 4px;
 -moz-border-radius: 4px;
 -ms-border-radius: 4px;
 -o-border-radius: 4px;
 border-radius: 4px;
 border-bottom: 4px solid #ddd;
}
#real-estates-detail #author img {
 -webkit-border-radius: 100%;
 -moz-border-radius: 100%;
 -ms-border-radius: 100%;
 -o-border-radius: 100%;
 border-radius: 100%;
 border: 5px solid #ecf0f1;
 margin-bottom: 10px;
}
#real-estates-detail .sosmed-author i.fa {
 width: 30px;
 height: 30px;
 border: 2px solid #bdc3c7;
 color: #bdc3c7;
 padding-top: 6px;
 margin-top: 10px;
}
.panel-default .panel-heading {
 background-color: #fff;
}
#real-estates-detail .slides li img {
 height: 450px;
}
</style>

<div class="container">
<div id="main">


 <div class="row" id="real-estates-detail">
 <div class="col-lg-4 col-md-4 col-xs-12">
 <div class="panel panel-default">
 <div class="panel-heading">
 <header class="panel-title">
 <div class="text-center">
 <strong>Пользователь сайта</strong>
 </div>
 </header>
 </div>
 <div class="panel-body">
 <div class="text-center" id="author">
 <img src="https://bootstraptema.ru/snippets/element/2016/profilesection/myprofile.jpg">
 <h3>Василий Понторезов</h3>
 <small class="label label-warning">Российская Федерация</small>
 <p>Я простой Русский пацан и мне всё по барабану.</p>
 <p class="sosmed-author">
 <a href="#"><i class="fa fa-facebook" title="Facebook"></i></a>
 <a href="#"><i class="fa fa-twitter" title="Twitter"></i></a>
 <a href="#"><i class="fa fa-google-plus" title="Google Plus"></i></a>
 <a href="#"><i class="fa fa-linkedin" title="Linkedin"></i></a>
 </p>
 </div>
 </div>
 </div>
 </div>
 <div class="col-lg-8 col-md-8 col-xs-12">
 <div class="panel">
 <div class="panel-body">
 <ul id="myTab" class="nav nav-pills">
 <li class="active"><a href="#detail" data-toggle="tab">О пользователе</a></li>

 </ul>
 <div id="myTabContent" class="tab-content">
<hr>
 <div class="tab-pane fade active in" id="detail">
 <h4>История профиля</h4>
 <table class="table table-th-block">
 <tbody>
 <tr><td class="active">Зарегистрирован:</td><td>12-06-2016</td></tr>
 <tr><td class="active">Последняя активность:</td><td>12-06-2016 / 09:11</td></tr>
 <tr><td class="active">Страна:</td><td>Россия</td></tr>
 <tr><td class="active">Город:</td><td>Волгоград</td></tr>
 <tr><td class="active">Пол:</td><td>Мужской</td></tr>
 <tr><td class="active">Полных лет:</td><td>43</td></tr>
 <tr><td class="active">Семейное положение:</td><td>Женат</td></tr>
</tbody>
 </table>
 </div>

 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
</div>

</div><!-- /.main -->
</div><!-- /.container -->
</body>
</html>
