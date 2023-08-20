<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:admin_login.php');
}

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $fname = $_POST['firstName'];
    $fname = filter_var($fname, FILTER_SANITIZE_STRING);
    $lname = $_POST['lastName'];
    $lname = filter_var($lname, FILTER_SANITIZE_STRING);
    $pass = sha1($_POST['pass']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $cpass = sha1($_POST['cpass']);
    $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

    $select_admin = $conn->prepare("SELECT * FROM `admins` WHERE email = ?");
    $select_admin->execute([$email]);

    if ($select_admin->rowCount() > 0) {
        $message[] = 'email already exist!';
    } else {
        if ($pass != $cpass) {
            $message[] = 'confirm password not matched!';
        } else {
            $insert_admin = $conn->prepare("INSERT INTO `admins`(email,firstName,lastName,password) VALUES(?,?,?,?)");
            $insert_admin->execute([$email,$fname,$lname, $cpass]);
            $message[] = 'new admin registered successfully!';
            
    }
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register admin</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="../css/admin_registration.css">

</head>

<body>

    

    <div class="container">
        <div class="title" align="center"> ADMIN REGISTRATION </div>
        <div class="content">
            <form action="" method="POST">
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

        </div>
    </div>













<script src="../js/admin_script.js"></script>

</body>

</html>
