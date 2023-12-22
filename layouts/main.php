<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Сдача и аренда жилья</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="../styles/style.css">
  <link rel="stylesheet" href="../styles/header.css">
  <?
  include("../inc/head.php")
    ?>

</head>

<body>
  <?php
  include_once("header.php")
    ?>
  <main>
    <?

    include("../inc/database.php");

    $sql = "SELECT * FROM test  ORDER BY id DESC LIMIT 3";
    $result = $conn->query($sql);
?>

    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
    <?    
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
        <div class="swiper-slide">
          <img src="<?= $row['image_path'] ?>" alt="<?= $row['image_name'] ?>">
        </div>
        <?php
      }
    } else {
      echo "0 results";
    }
    ?>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>


    </div>
    <!-- Объявления -->
    <?php
    include("ads.php")
      ?>
  </main>

  <!-- Footer с CSS стилями -->
  <footer>
    &copy; 2023 Сдача и аренда жилья. Все права защищены.
  </footer>

  <script>
    var swiperad = new Swiper(".mySwiper", {
      slidesPerView: 3,
      grid: {
        rows: 2,
      },
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
    const swiper = new Swiper('.swiper', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,

      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
      },

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      // And if we need scrollbar

    });
  </script>

</body>

</html>