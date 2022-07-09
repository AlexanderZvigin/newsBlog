<?php
session_start();
include 'connect.php';
$sql="SELECT * FROM tematics";
$result=$mysqli->query($sql);
for ($i=0; $i <$result->num_rows ; $i++) {
$tematics[]=$result->fetch_array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Меню</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Главная</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Обращения</span></a>
                    </li>
                    <li>
                        <a href="admin_add_news.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Добавить новость</span></a>
                    </li>
                    <li>
                        <a href="admin_news.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Редактирование</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">

                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Новости</span> </a>

                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Пользователи</span> </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">

                        <span class="d-none d-sm-inline mx-1">Админ</span>
                          <span class="d-none d-sm-inline mx-1">Выход</span>
                    </a>

                </div>
            </div>
        </div>
        <?php
        if (!empty($_SESSION['error_add'])) {
          echo '<div class="alert alert-danger" role="alert" ';
          echo '</div>';
    foreach ($_SESSION['error_add'] as $key => $error) {
      echo $error;
    }
        }
        ?>

        <div class="col py-3">
          <form action="news_save.php" method="post">
          <div class="form-group">
            <label for="exampleFormControlInput1">Заголовок</label>
            <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Заголовок новости">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Краткий текст новости </label>
            <input name="shortText" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Краткий текст">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Тематика</label>
            <select name="tematics" class="form-control" id="exampleFormControlSelect1">
              <?php foreach ($tematics as  $value): ?>


              <option><?php echo $value['tematic']; ?></option>

            <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Полный текст новости:</label>
            <textarea name="fulltext" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
        </div>
    </div>
</div>

</body>
</html>
