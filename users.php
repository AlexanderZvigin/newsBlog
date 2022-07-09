<?php
include 'connect.php';
$sql="SELECT * FROM users";
$result=$mysqli->query($sql);
for ($i=0; $i <$result->num_rows ; $i++) {
  $users[]=$result->fetch_array();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Просмотр пользователей</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  <?php require_once 'sidebar.php'; ?>
          <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Псевдоним</th>
              <th scope="col">Пароль</th>
              <th scope="col">Эл.почта</th>
              <th scope="col">Город</th>
              <th scope="col">Страна</th>
              <th scope="col">Пол</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
              <th scope="row"><?php echo $user['id'] ?></th>
              <td><?php echo $user['username'] ?></td>
              <td><?php echo $user['password'] ?></td>
              <td><?php echo $user['email'] ?></td>
              <td><?php echo $user['town'] ?></td>
              <td><?php echo $user['country'] ?></td>
              <td><?php echo $user['gender'] ?></td>
            </tr>
              <?php endforeach; ?>
          </tbody>
        </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>
