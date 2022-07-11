<?php
include 'connect.php';
$sort=$_POST['sort'];
switch ($sort) {
  case 'А-Я':
    $sql="SELECT * FROM news ORDER BY `title`";
    $result=$mysqli->query($sql);
    for ($i=0; $i <$result->num_rows ; $i++) {
      $news_sorted[]=$result->fetch_assoc();
    }
    break;

case 'Я-А';
$sql="SELECT * FROM news ORDER BY `title` DESC";
$result=$mysqli->query($sql);
for ($i=0; $i <$result->num_rows ; $i++) {
  $news_sorted[]=$result->fetch_assoc();
}
    break;
      case 'По дате';
      $sql="SELECT * FROM news ORDER BY `date` DESC";
      $result=$mysqli->query($sql);
      for ($i=0; $i <$result->num_rows ; $i++) {
        $news_sorted[]=$result->fetch_assoc();
        }
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Новости.гоу</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="index.php" class="navbar-brand">Новости.гоу</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Главная <span class="sr-only"></span></a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="#">Сортировка:<span class="sr-only"></span></a>
</li>

        <li class="nav-item dropdown">
          <form class="form-inline my-2 my-lg-0" action="news_sorted.php" method="post">
          <select name="sort" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Сортировать по:
<option> А-Я</option>
<option> Я-А</option>
<option>По дате</option>
          </select>
          <li class="nav-item active">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Сортировать</button>
          </li>
        </li>
      </ul>
    </form>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Поиск">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
      </form>
    </div>
  </nav>
<?php foreach ($news_sorted as  $value): ?>
  <div class="container">
  <div class="row">
    <div class="col">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-success"><?php echo $value['tematic'];?></strong>
        <h3 class="mb-0"><?php echo $value['title'];?></h3>
        <div class="mb-1 text-muted"><?php echo $value['date'];?></div>
        <p class="mb-auto"><?php echo $value['short_text'];?></p>
        <a href="full_text.php?id=<?php echo $value['id']; ?>" class="stretched-link">Продолжить чтение</a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <svg class="bd-placeholder-img"   width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
      </div></div>
    </div>
  </div>
</div>
<?php endforeach; ?>
</body>
</html>
