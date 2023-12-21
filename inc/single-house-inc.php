<?php
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
                echo '<h2>' . $row['name'] . '</h2>';
                echo '<p>' . $row['description'] . '</p>';
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