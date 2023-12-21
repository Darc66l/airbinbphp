<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/single-house.css">
    <title>Advertisement Page</title>
    <?
    include("../inc/head.php")
    ?>
</head>
<body>

    <?php
    include("header.php")
    ?>

    <?php
    include("../inc/database.php");

    $id = $_GET['id'];

    $sql = "SELECT * FROM test WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>
            <section class="ad-details">
                <div class="ad-image">
                    <?php echo '<img src="' . $row['image_path'] . '" alt="Advertisement Image">'; ?>
                </div>
                <div class="ad-info">
                    <?php
                    echo '<h1>' . $row['name'] . '</h1>';
                    echo '<h4>' . $row['description'] . '</h4>';
                    echo '<p><strong>Price:</strong> ' . $row['price'] . '</p>';
                    echo '<p><strong>Contact:</strong> ' . $row['contact_email'] . '</p>';
                    ?>
                </div>
            </section>
    <?php
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
    <footer>
        <p>&copy; 2023 Advertisement Page</p>
    </footer>

</body>
</html>
