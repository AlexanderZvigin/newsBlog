<?php
include 'connect.php';
$sql="SELECT * FROM news";
$result=$mysqli->query($sql);
for ($i=0; $i <$result->num_rows; $i++) {
  $news[]=$result->fetch_array();
}
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
<?php require_once 'sidebar.php'; ?>
<?php if (empty($_SESSION['error_add'])){
echo '<div class="alert alert-success" role="alert">';
echo "Новость успешно изменена!";
 echo '</div>';
}
else {
  echo '<div class="alert alert-danger" role="alert">';
echo $_SESSION[error_add]['0'];
echo  '</div>' ;
}
?>
<?php foreach ($news as  $value): ?>
  <div class="container">
  <div class="row">
    <div class="col">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-success"><?php echo $value['tematic'];?></strong>
        <h3 class="mb-0"><?php echo $value['title'];?></h3>
        <div class="mb-1 text-muted"><?php echo $value['date'];?></div>
        <p class="mb-auto"><?php echo $value['short_text'];?></p>
        <a href="admin_change_news.php?id=<?php echo $value['id']; ?>" class="stretched-link">Редактирование</a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <svg class="bd-placeholder-img"   width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
      </div></div>
    </div>
  </div>
</div>
<?php endforeach; ?>
</div>
</div>
</body>
</html>
