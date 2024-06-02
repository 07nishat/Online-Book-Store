<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> BookStore.com</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-1.png" alt="">
         </div>
         <div class="content">
            <span>১০% পর্যন্ত মূল্যছাড়</span>
            <h3>সকল ইসলামিক বই এর ওপর</h3>
            <a href="category.php?category=Islamic Book" class="btn">Shop Now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-2.png" alt="">
         </div>
         <div class="content">
            <span>৪৯৯+ টাকার উপন্যাস বই অর্ডারে </span>
            <h3>১০০০ টাকার গিফট ভাউচার জেতার আকর্ষণীয় সুযোগ</h3>
            <a href="category.php?category= Noble Books" class="btn">Shop Now.</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-3.png" alt="">
         </div>
         <div class="content">
            <span>ডেলিভারি চার্জ ফ্রি! </span>  
            <h3>তাম্রলিপি প্রকাশনীর যেকোনো একটি বই কিনলেই</h3>
            <a href="category.php?category=Tamralipi" class="btn">Shop Now.</a>
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<section class="category">

   <h1 class="heading">Shop by Category</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=Islamic Book" class="swiper-slide slide">
      <img src="images/icon-1.PNG" alt="">
      <h3>ইসলামিক বই</h3>
   </a>

   <a href="category.php?category=Noble Books" class="swiper-slide slide">
      <img src="images/icon-2.png" alt="">
      <h3>উপন্যাস</h3>
   </a>

   <a href="category.php?category=History and Tradition" class="swiper-slide slide">
      <img src="images/icon-3.png" alt="">
      <h3>ইতিহাস ও ঐতিহ্য</h3>
   </a>

   <a href="category.php?category=Exams Preparation " class="swiper-slide slide">
      <img src="images/icon-4.png" alt="">
      <h3>ভর্তি নিয়োগ </h3>
   </a>

   <a href="category.php?category=মুক্তিযুদ্ধ" class="swiper-slide slide">
      <img src="images/icon-5.png" alt="">
      <h3>মুক্তিযুদ্ধ</h3>
   </a>

   


   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>




<section class="category">

   <h1 class="heading">Shop by Author</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=হুমায়ূন আহমেদ" class="swiper-slide slide">
      <img src="images/humayun.PNG" alt="">
      <h3>হুমায়ূন আহমেদ</h3>
   </a>

   <a href="category.php?category=আনিসুল হক" class="swiper-slide slide">
      <img src="images/anisul.PNG" alt="">
      <h3>আনিসুল হক </h3>
   </a>

   <a href="category.php?category=আলী ইমাম" class="swiper-slide slide">
      <img src="images/imam.png" alt="">
      <h3>আলী ইমাম</h3>
   </a>

   <a href="category.php?category=সেলিনা হোসেন" class="swiper-slide slide">
      <img src="images/selina.PNG" alt="">
      <h3>সেলিনা হোসেন</h3>
   </a>

   <a href="category.php?category=আহমদ ছফা" class="swiper-slide slide">
      <img src="images/ahmed.PNG" alt="">
      <h3>আহমদ ছফা</h3>
   </a>

   


   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>




<section class="category">

   <h1 class="heading">Shop by Publisher</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=Tamralipi" class="swiper-slide slide">
      <img src="images/tamrolipi.jpg" alt="">
      <h3>তাম্রলিপি</h3>
   </a>

   <a href="category.php?category=Anupam Prakashany" class="swiper-slide slide">
      <img src="images/anupom.jpg" alt="">
      <h3>অনুপম প্রকাশনী</h3>
   </a>

   <a href="category.php?category=Gyankosh " class="swiper-slide slide">
      <img src="images/geankosh.jpg" alt="">
      <h3>জ্ঞানকোষ </h3>
   </a>

   <a href="category.php?category=Adarsha " class="swiper-slide slide">
      <img src="images/adorsho.PNG" alt="">
      <h3>আদর্শ  </h3>
   </a>

   <a href="category.php?category=Anyaprokash" class="swiper-slide slide">
      <img src="images/onnoprokash.JPG" alt="">
      <h3>অন্যপ্রকাশ</h3>
   </a>

   


   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>






<section class="home-products">

   <h1 class="heading">Latest products</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>TK.</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
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