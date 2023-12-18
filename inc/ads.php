<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style> 
    .main-header {
      position: relative;
      height: 100%;
    }

    .main-header {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper-header {
      width: 100%;
      height: 100%;
      margin-left: auto;
      margin-right: auto;
    }

    .swiper-slide-header {
      text-align: center;
      font-size: 18px;
      background: #fff;
      height: calc((100% - 30px) / 2) !important;

      /* Center slide text vertically */
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>
<body>
    <div class="main_header">
  <!-- Swiper -->
  <div class="swiper-header mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide-header">Slide 1</div>
      <div class="swiper-slide-header">Slide 2</div>
      <div class="swiper-slide-header">Slide 3</div>
      <div class="swiper-slide-header">Slide 4</div>
      <div class="swiper-slide-header">Slide 5</div>
      <div class="swiper-slide-header">Slide 6</div>
      <div class="swiper-slide-header">Slide 7</div>
      <div class="swiper-slide-header">Slide 8</div>
      <div class="swiper-slide-header">Slide 9</div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  </div>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
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
  </script>
</body>

</html>