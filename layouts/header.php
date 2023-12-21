<?php
session_start();
require_once("../inc/database.php");
?>

    <header>
        <nav>
            <ul>
                <li><a href="main.php">Главная</a></li>
                <li><a href="register.php">Регистрация</a></li>
                <li><a href="login.php">Вход</a></li>
                <li><a href="About.php">О нас</a></li>
                <li><a href="Contacts.php">Контакты</a></li>
                <li><a href="Upload.php">ПОдать Объявление</a></li>
                <?
                if (isset($_SESSION['sessionId'])) {
                    echo "You are logged in as " . $_SESSION['sessionId'];
                } else {
                    echo "You are logged in as Guest";
                }
                ?>
            </ul>
        </nav>
    </header>

</html>