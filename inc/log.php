<?php

if (isset($_POST['submit'])) {

    require 'database.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
           include_once('../layouts/login.php');
            echo "<h4>Ошибка базы данных</h4>";
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $passCheck = password_verify($password, $row['password']);
                if ($passCheck == false) {
                    include_once('../layouts/login.php');
                    echo "<h4>Неверный пароль</h4>";
                    exit();
                } elseif ($passCheck == true) {
                    session_start();
                    $_SESSION['sessionId'] = $row['id'];
                    $_SESSION['sessionUser'] = $row['username'];
                    header("Location: ../layouts/main.php?success=loggedin");
                    echo "<h4>Неверный пароль</h1>";
                    exit();
                } else {
                    header("Location: ../layouts/login.php?error=wrongpass");
                    
                    exit();
                }
            } else {
                include_once('../layouts/login.php');
                echo '<h4>Нет такого пользователя</h4>';
                exit();
            }
        }
        
        
    }  
else {
            header("Location: ../layouts/login.php?error=accessforbidden");
            exit();
        }
    ?>
