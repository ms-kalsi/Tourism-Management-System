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
   <title>Bill</title>

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


<div class="heading" style="background:url(images/header-bg-1.jfif) no-repeat">
   <h1>bill</h1>
</div>


<section class="about">

   <div class="content">
      <h3><?php
            $sql = "SELECT * FROM place WHERE place_id = 102;";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            if($resultcheck > 0){
               if($row = mysqli_fetch_assoc($result)) {
                  echo $row['LOCATION'];
                  
               }
            }
          ?>
             
          </h3>
      <p>PLACE PRICE:<br> &#8377
         <?php
            $sql = "SELECT * FROM place WHERE place_id = 102;";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            if($resultcheck > 0){
               if($row = mysqli_fetch_assoc($result)) {
                  echo $row['PRICE'];
                  
               }
            }
         ?>
      </p>
      <p>
         HOTEL PRICE:<br> &#8377<?php
            $sql = "SELECT * FROM hotels WHERE place_id = 102;";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            if($resultcheck > 0){
               if($row = mysqli_fetch_assoc($result)) {
                  echo $row['PRICE'];
                  
               }
            }
         ?>
         </p>

         <p>TOTAL PRICE:<br> &#8377
            <?php
            $sql1 = "SELECT * FROM place WHERE place_id = 102;";
            $sql2 = "SELECT * FROM hotels WHERE place_id = 102;";
            $result1 = mysqli_query($conn, $sql1);
            $result2 = mysqli_query($conn, $sql2);
            $resultcheck1 = mysqli_num_rows($result1);
            $resultcheck2 = mysqli_num_rows($result2);
            if($resultcheck1 > 0 and $resultcheck1 > 0){
               if($row1 = mysqli_fetch_assoc($result1) and $row2 = mysqli_fetch_assoc($result2)) {
                  echo $row1['PRICE'] + $row2['PRICE'];
                  
               }
            }
         ?>
         </p>

   </div>

</section>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>