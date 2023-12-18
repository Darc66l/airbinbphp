<?php
session_start();
require_once("../inc/database.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="main.php">Главная</a></li>
                <li><a href="register.php">Регистрация</a></li>
                <li><a href="login.php">Вход</a></li>
                <li><a href="About.php">О нас</a></li>
                <li><a href="Contacts.php">Контакты</a></li>
                <?
                if (isset($_SESSION['sessionId'])) {
                    echo "You are logged in as " . $_SESSION['sessionId'];
                } else {
                    echo "Home";
                }
                ?>
            </ul>
        </nav>
    </header>
</body>

</html>