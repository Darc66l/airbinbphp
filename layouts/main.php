<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Сдача и аренда жилья</title>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="../styles/style.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body>

    <!-- Header навигатор -->
    <?php
      include_once("header.php")
    ?>
  <main>

    <!-- JS слайдер с новостями -->
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="../assets/hot-take1.jpeg" alt="hot take 1"></div>
        <div class="swiper-slide"><img src="../assets/hot-take2.jpeg" alt="hot take 2"></div>
        <div class="swiper-slide"><img src="../assets/hot-take3.jpeg" alt="hot take 3"></div>
        ...
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
    
      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    
      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
    </div>
  
    <!-- Объявления -->
    <?php
      include("../inc/ads.php")
    ?>
  </main>
  
    <!-- Footer с CSS стилями -->
    <footer>
      <p>&copy; 2023 Сдача и аренда жилья. Все права защищены.</p>
    </footer>
  
    <script>
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
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
    </script>
  
  </body>
</html>
