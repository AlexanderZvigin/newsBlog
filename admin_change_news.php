<?php
error_reporting(0);
session_start();
include 'connect.php';
$id=$_GET['id'];
$sql="SELECT * FROM news WHERE `id`='$id'";
$result=$mysqli->query($sql);
$new=$result->fetch_assoc();
$_SESSION['id']=$new['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Редактирование новостей</title>
</head>
<body>
<?php require_once 'sidebar.php';?>
<div class="col py-3">
  <form action="news_change.php" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Заголовок</label>
    <input value="<?php echo $new['title'] ;?>" name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Заголовок новости">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Краткий текст новости </label>
    <input value="<?php echo $new['short_text'] ;?>" name="shortText" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Краткий текст">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Тематика</label>
    <input value="<?php echo $new['tematic'] ;?>" name="tematic" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Заголовок новости">

  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Полный текст новости:</label>
    <textarea style="height:500px" name="fulltext" class="form-control" id="exampleFormControlTextarea1" rows="3">
      <?php echo $new['text'] ;?>
    </textarea>
  </div>
  <button type="submit" class="btn btn-primary">Изменить</button>
</form>
