<?php
session_start();
error_reporting(0);
require_once 'header.php';
include 'connect.php';
$id=$_GET['id'];
$_SESSION['newId']=$id;
$sql="SELECT * FROM news WHERE `id`='$id'";
$result=$mysqli->query($sql);
for ($i=0; $i <$result->num_rows ; $i++) {
  $full_new=$result->fetch_array();
}
$sql_comments="SELECT * FROM comments WHERE `newsid`='$id'";
$result_comments=$mysqli->query($sql_comments);
for ($i=0; $i <$result_comments->num_rows ; $i++) {
  $comments[]=$result_comments->fetch_assoc();
}
$username=$_SESSION['username'];
$sql_user="SELECT `username` FROM comments WHERE `username`='$username'";
$result_user=$mysqli->query($sql_user);
for ($i=0; $i <$result_user->num_rows ; $i++) {
  $username=$result_user->fetch_assoc();
}
var_dump($username['username']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Название новости</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  <div class="row g-5">
     <div class="col-md-8">
       <h3 class="pb-4 mb-4 fst-italic border-bottom">
        <?php echo $full_new['title']; ?>
       </h3>

       <article class="blog-post">
         <p class="blog-post-meta">1 января 2021 года </p>
  <strong class="d-inline-block mb-2 text-success"><?php echo $full_new['tematic'];?></strong>
         <hr>

         </p>
         <?php echo $full_new['text']; ?>
         <ul>
           <h3 class="pb-4 mb-4 fst-italic border-bottom">
            Комментарии:
           </h3>
           <section style="background-color: #eee;">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10 col-xl-8">
        <?php if (empty($comments)) {
          $comments[0]='Комментариев пока нету';

        } ?>
        <?php foreach ($comments as $key => $value): ?>
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-start align-items-center">



              <div>
                <h6 class="fw-bold text-primary mb-1"><?php echo $value['username'];?></h6>

                </p>
              </div>
            </div>
            <p class="mt-3 mb-4 pb-2">  <?php echo $value['text'];?>  </p>

          </div>
  <?php endforeach; ?>
  <form action="comment_save.php?username=<?php echo $username['username'];?>" method="post">
          <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
            <div class="d-flex flex-start w-100">
              <div class="form-outline w-100">
                <textarea maxlength="100" name="comment" class="form-control" id="textAreaExample" rows="4"
                  style="background: #fff;"></textarea>
                <label class="form-label" for="textAreaExample">Комментарий</label><br>
                <label class="form-label" for="textAreaExample">Ваш псевдоним: <?php echo $username['username'] ?></label>
              </div>
            </div>
            <div class="float-end mt-2 pt-1">
              <button type="submit" class="btn btn-primary btn-sm">Отправить</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
