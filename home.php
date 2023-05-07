<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>



<section class="hero">

   <div class="swiper hero-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="content">
               <span>Enjoy Italian Cuisine</span>
               <h3>Spaghetti Alfredo</h3>
               <a href="menu.php" class="btn">Order to Click</a>
            </div>
            <div class="image">
               <img src="project images/spaghetti_alfredo_peas__dana_gallagher0019-v2_copy.webp" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Authentic Italian Pizza</span>
               <h3>Crispy Chessey Pizza</h3>
               <a href="menu.php" class="btn">Order to Click</a>
            </div>
            <div class="image">
               <img src="project images/Spinach--Mushroom-Prod-images-500x500.png" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Classic Tiramisù</span>
               <h3>Tiramisu Cake</h3>
               <a href="menu.php" class="btn">Order to Click</a>
            </div>
            <div class="image">
               <img src="project images/1717_-_Whole.webp" alt="">
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="category mt-5">

   <h1 class="title">Food Category</h1>

   <div class="box-container mb-5 mt-5">

      <a href="category.php?category=Pasta" class="box border border-2">
         <img src="images/cat-1.png" alt="">
         <h3>Pasta</h3>
      </a>

      <a href="category.php?category=Pizza" class="box border border-2">
         <img src="images/cat-2.png" alt="">
         <h3>Pizza</h3>
      </a>

      <a href="category.php?category=Drinks" class="box border border-2">
         <img src="images/cat-3.png" alt="">
         <h3>Drinks</h3>
      </a>

      <a href="category.php?category=Desserts" class="box border border-2">
         <img src="images/cat-4.png" alt="">
         <h3>Desserts</h3>
      </a>

   </div>

</section>























<?php include 'components/footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>