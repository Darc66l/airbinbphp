<?php
session_start();
require_once("../inc/database.php");
if (isset($_POST['logout'])) {
    // Уничтожаем сессию
    session_destroy();

    // Перенаправляем пользователя на другую страницу (если необходимо)
    header('Location: main.php'); // Укажите URL, куда перенаправить пользователя
    exit();
}
?>

<header>
    <nav>
        <ul>
            <form class="header-wrap"  method="post" action="">
                <div class="links">
                <li><a href="main.php">Главная</a></li>
                <?
                if (!isset($_SESSION['sessionId'])) { ?>
                    <li><a href="../layouts/register.php">Регистрация</a></li>
                    <li><a href="../layouts/login.php">Вход</a></li>
                <? } else {
                    ?>
                    <li><a href="Upload.php">Подать Объявление</a></li>
                <? } ?>
                <li><a href="About.php">О нас</a></li>
                <li><a href="Contacts.php">Контакты</a></li>
                </div>
                <div class="head-login">
                <?
                if (isset($_SESSION['sessionId'])) {
                    echo "You are logged in as " . $_SESSION['sessionUser'];
                    ?>
                    <input class="logout-btn" type="submit" name="logout" value="Выход">

                <?
                } else {
                    echo "<p>You are logged in as Guest</p>";
                }
                ?>
                </div>
            </form>
        </ul>
    </nav>
</header>

</html>