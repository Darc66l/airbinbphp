<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Сдача и аренда жилья</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="../styles/style.css">

</head>

<body>
  <?php
  include_once("header.php")
    ?>
  <main>

    <!-- Slider main container -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="../assets/hot-take1.jpeg" alt="hot-take1"></div>
        <div class="swiper-slide"><img src="../assets/hot-take2.jpeg" alt="hot-take2"></div>
        <div class="swiper-slide"><img src="../assets/hot-take3.jpeg" alt="hot-take3">3</div>
        ...
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