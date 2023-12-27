<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $email = $_POST['email'];

    require 'database.php';
    require 'upload-img.php';
    
            // Если все в порядке, попробуйте загрузить файл
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "Файл " . htmlspecialchars(basename($_FILES["image"]["name"])) . " был успешно загружен на сервер.<br>";
                $imagePath = $target_file;
                $sql = "INSERT INTO test 
                (image_path,name,description,price,contact_email)
                 VALUES ('$imagePath','$name','$desc','$price','$email')";
    
                if ($conn->query($sql) === TRUE) {
                    echo "Данные успешно сохранены в базе данных.<br>";
                    header("Location: ../inc/uploaded.php");
                    exit;
                } else {
                    
                    include_once('../inc/upload.php');
                    echo '<h3 class="error">Ошибка при загрузке файла в базу данных. <br> Ошибка при сохранении данных: </h3>' . $conn->error;
                    exit;
                }
            } else {
                include_once('../inc/upload.php');
                echo '<h3 class="error"> Извините, произошла ошибка при загрузке вашего файла</h3>.<br>';
                exit;
            }
        
    }
else {
           include_once('../inc/upload.php');
           echo "Доступ к бд закрыт. ";
           exit();
        }
    ?>
