<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

if (isset($_POST['submit'])) {

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ? AND status=1");
   $select_user->execute([$email, $pass]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if ($select_user->rowCount() > 0) {
      $_SESSION['user_id'] = $row['id'];
      header('location:index.php');
   } else {
      $message[] = 'incorrect username or password!';
   }
}

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="css/signin_page.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>

</style>

<body>


   <div class="container">

      <div class="title" align="center">Sign In to <a href="index.php"> Oxygen Sports </a> </div>
      <div class="content">
         <div style="color: red;">
         <?php
         if (isset($message)) {
            foreach ($message as $message) {
               echo '
         <div class="message">
            <span">' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
            }
         }
         ?>
         </div>
        
         <form action="signin_page.php" method="POST">
            <div class="user-details" align="center">


               <div class="input-box">
                  <span class="details">Email</span>
                  <input type="text" name="email" placeholder="Enter Your Email Address " required>
                  <br>

               </div>


               <div class="input-box">
                  <span class="details">Password</span>
                  <input type="password" name="pass" placeholder="Enter The Password" required>
               </div>

            </div>


            <div class="button">
               <input type="submit" name="submit" value="Sign In">
            </div>
         </form>
         <div align="center">
            New user to the site?
            <a href="signup_page.php">
               Sign Up
            </a>
         </div>
      </div>
   </div>

</body>

</html>