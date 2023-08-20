<?php
if (isset($message)) {
   foreach ($message as $message) {
      echo '
         <div class="message">
            <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
   }
}
?>

<head>

   <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@500;600;700;800&display=swap");
   </style>
   <style>
      .logo img {
         float: left;
         width: 150px;
         height: 45px;

         /* background: #555; */
      }

      h1 {

         position: relative;
         color: black;
         left: 10px;
         font-size: 35px;
      }

      .topbar {
         text-align: right;
         background-color: #212529;
         width: 100%;
         position: relative;
         height: 35px;
         display: flex;
         justify-content: space-evenly;
         padding: 2px;

      }

      .topbar div {
         color: white;
         padding: 10px;
      }
   </style>
</head>
<div style="width: 100%;" class="topbar">
   <div>Free Shipping </div>
   <div> World Wide Delivery </div>
   <div> Grab New Year Deals </div>

</div>

<header class="header">

   <section class="flex">
      <div class="logo">
         <a href="index.php"> <img src="images/single21.png" alt="">
         </a>
      </div>


      <!-- <a href="index.php"><h1>Oxygen Sports</h1></a>  -->




      <nav class="navbar">

         <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">




         <a href="index.php">Home</a>
         <a href="about.php">About</a>
         <a href="orders.php">Orders</a>
         <a href="shop.php">Shop</a>
         <a href="https://blog.decathlon.in/">Blog</a>
         <!-- <a href="contact.php">Contact</a> -->
      </nav>

      <div class="icons">
         <?php
         $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
         $count_wishlist_items->execute([$user_id]);
         $total_wishlist_counts = $count_wishlist_items->rowCount();

         $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
         $count_cart_items->execute([$user_id]);
         $total_cart_counts = $count_cart_items->rowCount();
         ?>
         <div id="menu-btn" class="fas fa-bars"></div>
         <!-- <a href="search_page.php" ><i class="fas fa-search"></i></a> -->
         <a href="wishlist.php"><i class="fa-regular fa-heart"></i><span>(<?= $total_wishlist_counts; ?>)</span></a>
         <a href="cart.php"><i class="fa-brands fa-shopify"></i><span>(<?= $total_cart_counts; ?>)</span></a>

         <div id="user-btn" class="fa-solid fa-circle-user"></div>
      </div>

      <div class="profile">
         <?php
         $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
         $select_profile->execute([$user_id]);
         if ($select_profile->rowCount() > 0) {
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

         ?>
            <p><?= $fetch_profile["firstName"]; ?></p>
            <!-- <a href="update_user.php" class="btn">update profile</a> -->
            <div class="flex-btn">
               <!-- <a href="signup_page.php" class="option-btn">register</a>
               <a href="signin_page.php" class="option-btn">login</a> -->
            </div>
            <a href="components/user_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a>
         <?php
         } else {
         ?>
            <!-- <p>please login or register first!</p> -->
            <div class="flex-btn">

               <!-- <a href="signup_page.php" class="option-btn">register</a> -->
               <a href="signin_page.php" class="option-btn">login</a>
            </div>
         <?php
         }
         ?>


      </div>

   </section>

</header>