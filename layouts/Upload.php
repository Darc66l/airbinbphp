<?php
if (!isset($_SESSION['sessionId'])) {
    echo "<h1>Acces denied</h1>";
    echo '<a href="main.php">Перейти на главную</a>';
    exit();
}
 else{
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/log-reg.css">
    <title>Подача объявления</title>
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
    <input type="text" name="name" placeholder="Название вашего дома" required>
    <input type="text" name="desc" placeholder="Описание" required>
    <input type="text" name="price" placeholder="Цена" required>
    <input type="text" name="email" placeholder="Ваш email" required>
    <button type="submit" name="submit">Загрузить</button>
  </form>
</div>

</body>
</html>
<?}?>