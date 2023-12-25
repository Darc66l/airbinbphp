<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/log-reg.css">
    <link rel="stylesheet" href="../styles/header.css">

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
    <input class="inputs-form"  type="text" name="username" placeholder="Username" required>
    <input class="inputs-form" type="password" name="password" placeholder="Password" required>
    <input class="inputs-form" type="password" name="confirmPassword" placeholder="Confirm Password" required>
    <button class="submit-btn" type="submit" name="submit">Register</button>
  </form>
</div>

</body>
</html> 