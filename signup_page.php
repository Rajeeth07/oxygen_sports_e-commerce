<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
} else {
  $user_id = '';
};
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="css/signup_page.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>

</style>

<body>
  <div class="container">
    <div class="title" align="center">Sign Up to <a href="index.php"> Oxygen Sports </a> </div>
    <div class="content">
      <form action="signup_check.php" method="POST">
        <?php if (isset($_GET['error'])) { ?>
          <p style="color: red;" class="error"><?php echo $_GET['error'] ?></p> <?php } ?>
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="firstName" id="first_name" placeholder="Enter Your First Name">
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lastName" id="last_name" placeholder="Enter Your Last Name">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" id="email" placeholder="Enter Your Email Address ">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phoneNumber" id="phone_number" placeholder="Enter Your Phone Number ">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="pass" id="password" placeholder="Enter The Password">
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="cpass" id="confirm_password" placeholder="Confirm Your Password">
          </div>
        </div>


        <div class="button">
          <input type="submit" name="submit" value="Sign Up">
        </div>
      </form>
      <div align="center">
        Already have an account?
        <a href="signin_page.php">
          Sign In
        </a>
      </div>
    </div>
  </div>

</body>

</html>