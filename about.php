<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">Home</a> <span> / About</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>About us?</h3>
         <p>The Pie Spot restaurant is a fine dining interpretation of the classic multi
             cuisine with hints of Bengali influence laced into the menu.
         The Pie Spot is located on the hills of Himchori and benefit from a cool climate with the
           influence of the sea breeze of Cox's bazar.
        An amazing panorama over the plain of Himchori and the sea.
        The Pie Spot has been established to bring the friendly, warm ambience
         of the Bengali way of life to you. It’s a cosy and inviting atmosphere that’s accessible and affordable any time of day, whatever the weather or attire.

</p>
        
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">Services</h1>

   <div class="box-container">



      <div class="box border border-2">
         <img src="images/step-2.png" alt="">
         <h3>Fast Delivery</h3>
         <p>Order from home</p>
      </div>

      <div class="box border border-2">
         <img src="images/step.png" alt="">
         <h3>Enjoy Food</h3>
         <p>Enjoy our services</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">Our Team</h1>

   <div class="swiper reviews-slider">
     <div class="swiper-wrapper ">

       <div class="swiper-slide slide border border-2">
         <img src="images/pic-6.jpg" alt="">
          <p>Director of The Pie Spot Restaurant</p>
         <h3>Deiego Albert</h3>
      </div>


         <div class="swiper-slide slide border border-2">
            <img src="images/pic-1.jpg" alt="">
            <p>Head Chef of The Pie Spot Restaurant</p>
           
            
            <h3>John Simth</h3>
         </div>

         <div class="swiper-slide slide border border-2">
            <img src="images/pic-2.jpg" alt="">
            <p>Chef of The Pie Spot Restaurant</p>
           
            
            <h3>Albert Joy</h3>
         </div>

         <div class="swiper-slide slide border border-2">
            <img src="images/pic-3.jpg" alt="">
            <p>Chef of The Pie Spot Restaurant</p>
           
            
            <h3>Maria Decosta</h3>
         </div>
         <div class="swiper-slide slide border border-2">
            <img src="images/pic-4.jpg" alt="">
            <p>Chef Assistant of The Pie Spot Restaurant</p>
           
            
            <h3>Vijay Thapa</h3>
         </div>
         <div class="swiper-slide slide">
            <img src="images/pic-5.jpg" alt="">
            <p>Chef Assistant of The Pie Spot Restaurant</p>
           
            
            <h3>Kiaro Steve</h3>
         </div>
    </div>
   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>