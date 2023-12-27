<?php
if (isset($_POST['submit'])) {
    require 'database.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPassword'];

    if ($password != $confirmPass) {
        include_once("../layouts/register.php");
        echo '<h4 class="error">Пароли не совпадают</h4>';
        exit();
    } else {
        $sql = "SELECT username FROM users WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) { 
            include_once("../layouts/register.php");
            echo '<h4 class="error">Ошибка базы данных</h4>';
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);

            if ($rowCount > 0) {
                include_once("../layouts/register.php");
                echo '<h4 class="error">Пользователь с таким именем уже существует</h4>';
                exit();
            } else {
                $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    include_once('../layouts/register.php');
                    echo '<h4 class="error">Неверный пароль</h4>';
                    exit();
                } else {
                    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPass);
                    mysqli_stmt_execute($stmt);

                    // Получить только что добавленного пользователя
                    $sql = "SELECT id, username FROM users WHERE username = ?";
                    $stmt = mysqli_stmt_init($conn);
                    if (mysqli_stmt_prepare($stmt, $sql)) {
                        mysqli_stmt_bind_param($stmt, "s", $username);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);
                        mysqli_stmt_bind_result($stmt, $userId, $username);
                        mysqli_stmt_fetch($stmt);

                        // Начать сессию и сохранить идентификатор и имя пользователя
                        session_start();
                        $_SESSION['sessionId'] = $userId;
                        $_SESSION['sessionUser'] = $username;
                        header("Location: ../layouts/main.php?success=registered");
                        exit();
                    } else {
                        include_once('../layouts/register.php');
                        echo '<h4 class="error">Ошибка базы данных</h4>';
                    }
                }
            }
        }
    }
}
?>