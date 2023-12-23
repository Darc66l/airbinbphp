<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Сдача и аренда жилья</title>
  <link rel="stylesheet" href="../styles/slideshow.css">
  <link rel="stylesheet" href="../styles/style.css">
  <link rel="stylesheet" href="../styles/header.css">
 <?
  include("../inc/head.php")
    ?>

</head>

<body>
<?php include_once("header.php"); ?>
  <main>
    <?php
    include("../inc/database.php");

    $sql = "SELECT * FROM test  ORDER BY id DESC LIMIT 3";
    $result = $conn->query($sql);
    $result2 = $conn->query($sql);
    $row2 = $result2->fetch_assoc();
    $maxid = $row2['id'];

    ?>

    <div class="slideshow-container">
      <?php
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $maxid = $row['id'];
          ?>
          <a href="single-house.php?id=<?= $row['id'] ?>">
            <div class="mySlides fade">
              <div class="numbertext">
                <?= $row['id'] - $maxid + 1 ?> / 3
              </div>
              <img src="<?= $row['image_path'] ?>" alt="<?= $row['image_name'] ?>">
            </div>
          </a>
          <?php
        }
      } else {
        echo "0 results";
      }
      ?>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>
    </div>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <?php include("ads.php"); ?>
  </main>

  <footer>
    &copy; 2023 Сдача и аренда жилья. Все права защищены.
  </footer>

  <script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

  </script>

</body>

</html>