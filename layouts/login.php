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
  <h1>Login</h1>
  <p>No account? <a href="register.php">Register here!</a>
  </p>
  <form action="../inc/log.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit" name="submit">Login</button>
  </form>
</div>

</body>
</html>