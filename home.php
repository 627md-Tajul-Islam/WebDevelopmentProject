<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>

<!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
<!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<!-- Custom Css -->
    <link rel="stylesheet" href="css/style.css">

</head>
<!-- Main Coding starts here -->
<body>

<!-- header section starts  -->
<section class="header">
<!-- Title starts here  -->
   <a href="home.php" class="logo">Albatros Travels</a>
<!-- Title ends here  -->
<!-- menu starts here  -->
   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>
<!-- menu ends here  -->
<!-- Menu Toggle Icon starts here  -->
   <div id="menu-btn" class="fas fa-bars"></div>
<!-- Menu Toggle Icon ends here  -->
</section>
<!-- header section ends -->

<!-- home section starts  -->
<section class="home">
<!-- home container starts  -->
   <div class="swiper home-slider">

      <div class="swiper-wrapper">
<!-- 3 div starts  -->
         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>Travel is the only thing you buy that makes you richer</span>
               <h3>travel around the world</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>Life is a journey, not a destination</span>
               <h3>discover the new places</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>"Do not look back with regret</span>
               <h3>make your tour worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
      </div>
<!-- carousel button starts  -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
<!-- carousel button ends  -->
   </div>
<!-- home container ends  -->
</section>
<!-- home section ends -->




<!-- services section starts  -->
<section class="services">
   <h1 class="heading-title"> our services </h1>
<!-- services card starts  -->
   <div class="box-container">
      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>
      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>
      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>
      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>
      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>
      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>
   </div>
<!-- services card ends  -->
</section>
<!-- services section ends -->





<!-- footer starts  -->
<section class="footer">
<!-- footer menu starts here  -->
   <div class="box-container">
<!-- Quick link menu starts here  -->
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
<!-- Quick link menu ends here  -->
 <!-- Extra link menu ends here  -->
      <div class="box">
         <h3>Extra Links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>
<!-- Extra link menu ends here  -->
<!-- Contact us menu starts here  -->
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +88 01303477128 </a>
         <a href="#"> <i class="fas fa-phone"></i> +88 01738391163 </a>
         <a href="#"> <i class="fas fa-envelope"></i> tajul.islamdev@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Jashore, Bangladesh - 7400 </a>
      </div>
<!-- Contact us menu ends here  -->
<!-- Follow us menu ends here  -->
      <div class="box">
         <h3>follow us</h3>
         <a target="_blank" href="https://www.facebook.com/devloper.tajul/"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a target="_blank" href="https://www.instagram.com/shahedi_bilash222/"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a target="_blank" href="https://www.linkedin.com/in/tajul-islam-627tj/"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>
<!-- Follow us menu ends here  -->
   </div>

   <div class="credit"> created by <span id="special"><a target="_blank" href="https://github.com/627md-Tajul-Islam">Tajul Islam & Team</span></a> | all rights reserved </div>
<!-- footer menu ends here  -->
</section>
<!-- footer ends -->




<!-- Swiper JS-->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<!-- Custom JS -->
    <script src="js/script.js"></script>
</body>
<!-- Main Coding ends here -->
</html>