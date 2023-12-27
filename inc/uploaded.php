<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/uploaded.css">
    <title>Document</title>
    <? include_once("head.php")  ?>
</head>
<body>
   
    <? include_once("database.php") ?>
    <? $sql = "SELECT * FROM test  ORDER BY id DESC LIMIT 1";
       $result = $conn->query($sql);?>
   <?include_once("../layouts/header.php");?>
   <div class="main">
    <h1>Объявление было успешно загружено</h1>
    <button class="buttons"><a href="../layouts/main.php">На главную</a></button>
    <? if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {?>
            <button class="buttons"><a href="../layouts/single-house.php?id=<?= $row['id'] ?>" >На страницу объявления</a></button>
   <?}} ?>
   </div>
</body>
</html>