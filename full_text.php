<?php
session_start();
require_once 'header.php';
include 'connect.php';
$id=$_GET['id'];
$sql="SELECT * FROM news WHERE `id`='$id'";
$result=$mysqli->query($sql);
for ($i=0; $i <$result->num_rows ; $i++) {
  $full_new=$result->fetch_array();
}
$sql2="SELECT * FROM comments";
$result2=$mysqli->query($sql2);
for ($i=0; $i <$result2->num_rows ; $i++) {
  $comments[]=$result2->fetch_array();
}
var_dump($_SESSION['userid']);
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
  <form action="comment_save.php" method="post">
          <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
            <div class="d-flex flex-start w-100">

              <div class="form-outline w-100">
                <textarea name="comment" class="form-control" id="textAreaExample" rows="4"
                  style="background: #fff;"></textarea>
                <label class="form-label" for="textAreaExample">Комментарий</label>
              </div>
            </div>
            <div class="float-end mt-2 pt-1">
              <button type="button" class="btn btn-primary btn-sm">Отправить</button>
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
