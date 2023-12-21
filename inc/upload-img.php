<?
    $target_dir = "../assets/uploads/"; // Укажите путь к директории, где будут храниться загруженные изображения
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($_FILES['image']['error'] > 0) {
        echo 'Ошибка загрузки файла: ' . $_FILES['image']['error'] . '<br>';
        exit;
    }

    // Проверка, является ли файл изображением
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "Файл не является изображением.<br>";
        $uploadOk = 0;
        exit;
    }

    // Проверка, существует ли файл
    if (file_exists($target_file)) {
        echo "Извините, файл уже существует.<br>";
        $uploadOk = 0;
        exit;
    }

    // Разрешенные типы файлов
    $allowedFileTypes = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedFileTypes)) {
        echo "Извините, разрешены только файлы JPG, JPEG, PNG и GIF.<br>";
        $uploadOk = 0;
        exit;
    }

    // Проверка наличия ошибок перед загрузкой файла
    if ($uploadOk == 0) {
        echo "Извините, ваш файл не был загружен.<br>";
        exit;
    } 

?>
