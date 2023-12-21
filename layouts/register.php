<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/log-reg.css">
    <title>Регистрация</title>
    <?
    include("../inc/head.php")
    ?>
</head>
<body> <?php
      include_once("header.php")
    ?>
    <div>
  <h1>Register</h1>
  <p>Already have an account? <a href="login.php">Log In Here!</a>
  </p>
  <form action="../inc/reg.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="confirmPassword" placeholder="Confirm Password">
    <button type="submit" name="submit">Register</button>
  </form>
</div>

</body>
</html> 