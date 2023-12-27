<?
    $target_dir = "../assets/uploads/"; // Укажите путь к директории, где будут храниться загруженные изображения
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($_FILES['image']['error'] > 0) {
        include_once('../layouts/upload.php');
        echo '<h3 class="error">Ошибка загрузки файла: ' . $_FILES['image']['error'] . '</h4><br>';
        exit;
    }

    // Проверка, является ли файл изображением
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        include_once('../layouts/upload.php');
        echo '<h3 class="error">Файл не является изображением.</h4><br>';
        $uploadOk = 0;
        exit;
    }

    $hash1 = hash_file('sha256', $target_file);
    $hash2 = hash_file('sha256', $_FILES["image"]["tmp_name"]);
    if($hash1 == $hash2)
    {
        include_once('../layouts/upload.php');
        echo '<h3 class="error">Извините, файл уже существует</h4>.<br>';
        $uploadOk = 0;
        exit;
    }

    // Разрешенные типы файлов
    $allowedFileTypes = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedFileTypes)) {
        include_once('../layouts/upload.php');
        echo '<h3 class="error">Извините, разрешены только файлы JPG, JPEG, PNG и GIF</h4>.<br>';
        $uploadOk = 0;
        exit;
    }

    // Проверка наличия ошибок перед загрузкой файла
    if ($uploadOk == 0) {
        include_once('../layouts/upload.php');
        echo '<h3 class="error">Извините, ваш файл не был загружен</h4>.<br>';
        exit;
    } 

?>
