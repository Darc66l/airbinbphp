<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/log-reg.css">
    <title>Логин</title>
    <?
    include("../inc/head.php")
    ?>
</head>
<body>
<?php
      include_once("header.php")
    ?>
    <div>
  <h1>Upload images</h1>
  </p>
  <form action="../inc/upload-inc.php" method="post"enctype="multipart/form-data">
        <label for="image">Выберите изображение:</label>
        <input class="inputer" type="file" name="image" id="image" accept="image/*" required>
    <input type="text" name="name" placeholder="Название вашего дома">
    <input type="text" name="desc" placeholder="Описание">
    <input type="text" name="price" placeholder="Цена">
    <input type="text" name="email" placeholder="Ваш email">
    <button type="submit" name="submit">Загрузить</button>
  </form>
</div>

</body>
</html>