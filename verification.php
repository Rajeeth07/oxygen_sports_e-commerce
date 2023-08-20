<?php session_start() ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/verification.css">
    <title>Verification</title>

</head>

<body>



    <div class="container" align="center">
        <div class="title"> <a href="home.php" align="center"> Oxygen Sports </a> <span> Verification</span> </div>
        <div class="content" align="center">

            <form action="#" method="POST">
                <div class="user-details" align="center">

                    <div class="input-box">
                        <span class="details">OTP CODE </span>

                        <input type="text" id="otp" class="form-control" name="otp_code" required autofocus>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Verify" name="verify">
                </div>
            </form>
        </div>

    </div>




</body>

</html>
<?php
include 'components/connect.php';
if (isset($_POST["verify"])) {
    $otp = $_SESSION['otp'];
    $email = $_SESSION['mail'];
    $otp_code = $_POST['otp_code'];
    if ($otp != $otp_code) {
?>
        <script>
            alert("Invalid OTP code");
        </script>
    <?php
    } else {
        $sql = "UPDATE users SET status = 1 WHERE email = '$email'";
        $stat = $conn->query($sql);
    ?>
        <script>
            alert("Your Account is verified, You may sign in now");
            window.location.replace("index.php");
        </script>
<?php
    }
}
?>