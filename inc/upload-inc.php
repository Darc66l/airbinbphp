<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $email = $_POST['email'];

    require 'database.php';
    require 'upload-img.php';
    
        if (empty($name)) {
            $error .= "Введите название вашего дома. ";
        }

        if (empty($desc)) {
            $error .= "Введите описание. ";
        }

        if (empty($price)) {
            $error .= "Введите цену. ";
        }

        if (empty($email)) {
            $error .= "Введите ваш email. ";
        }

        if (!empty($error)) {
            echo "<h1>$error</h1>";
        }else {
            // Если все в порядке, попробуйте загрузить файл
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "Файл " . htmlspecialchars(basename($_FILES["image"]["name"])) . " был успешно загружен на сервер.<br>";
                $imagePath = $target_file;
                $sql = "INSERT INTO test 
                (image_path,name,description,price,contact_email)
                 VALUES ('$imagePath','$name','$desc','$price','$email')";
    
                if ($conn->query($sql) === TRUE) {
                    echo "Данные успешно сохранены в базе данных.<br>";
                    exit;
                } else {
                    echo "Ошибка при загрузке файла в базу данных. <br> Ошибка при сохранении данных: " . $conn->error;
                    exit;
                }
            } else {
                echo "Извините, произошла ошибка при загрузке вашего файла.<br>";
                exit;
            }
        
    }
}   
else {
           echo "Доступ к бд закрыт. ";
            exit();
        }
    ?>
