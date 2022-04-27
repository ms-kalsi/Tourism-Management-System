<?php
   define('PROJECT_ROOT_PATH', __DIR__);
   include_once (PROJECT_ROOT_PATH . '\index.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>location</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<section class="header">

   <a href="home.html" class="logo">travel.</a>

   <nav class="navbar">
      <a href="home.html">home</a>
      <a href="about.html">about</a>
      <a href="package.html">package</a>
      <a href="book.html">login/sign up</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/TEMPLE1.jpeg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>INCREDIBLE INDIA</h3>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/TEMPLE2.jpeg) no-repeat">
         </div>

         <div class="swiper-slide slide" style="background:url(images/TEMPLE3.jpeg) no-repeat">
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>
   

</section>

<section class="about">
   <div class="content">
      <h3><?php
            $sql = "SELECT * FROM place WHERE place_id = 104;";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            if($resultcheck > 0){
               if($row = mysqli_fetch_assoc($result)) {
                  echo $row['LOCATION'];
                  
               }
            }
         ?></h3>
      <p>total place price: <br> &#8377
         <?php
            $sql = "SELECT * FROM place WHERE place_id = 104;";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            if($resultcheck > 0){
               if($row = mysqli_fetch_assoc($result)) {
                  echo $row['PRICE'];
                  
               }
            }
         ?>
      </p>
      <p>Hotel Name: <br>
         <?php
            $sql = "SELECT * FROM hotels WHERE place_id = 104;";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            if($resultcheck > 0){
               if($row = mysqli_fetch_assoc($result)) {
                  echo $row['HOTEL_NAME'];
                  
               }
            }
         ?>
      </p>
      <p>Hotel Stay price: <br> &#8377
         <?php
            $sql = "SELECT * FROM hotels WHERE place_id = 104;";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            if($resultcheck > 0){
               if($row = mysqli_fetch_assoc($result)) {
                  echo $row['PRICE'];
                  
               }
            }
         ?>
      </p>
      <p>Contact No: <br>
         <?php
            $sql = "SELECT * FROM hotels WHERE place_id = 104;";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            if($resultcheck > 0){
               if($row = mysqli_fetch_assoc($result)) {
                  echo $row['CONTACT'];
                  
               }
            }
         ?>
      </p>
      <a href="http://localhost/myproject/bill4.php" class="btn">book now</a>
   </div>

</section>

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> clients reviews </h1>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Visit was magnificent, mesmerising, and memorable. It is essential to visit this location and see all of the shows. Don't miss the Laser Robotic Show, the Short Film, the Boating Show, and the Light Show.

Surjeet, our tour guide, was outstanding.

He was well-versed in all the performances and activities, as well as the best places to eat.

We also stayed at the oyo 44400 retreat Inn, which was close to the temple and was quite nice.</p>
            <h3>Ayush</h3>
            <span>traveler</span>
            <img src="images/pic-4.png" alt="">
         
   </div>

</section>

<!-- reviews section ends -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.html"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.html"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.html"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.html"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>mandeep singh kalsi & lakshay solanki</span>
   </div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>