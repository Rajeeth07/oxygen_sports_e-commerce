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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    

</head>

<body>

    <?php include 'components/user_header.php'; ?>


    <section class="about">

        <div class="row">




            <div class="image">
                <img src="images/whyjpg.jpg" alt="">
            </div>

        </div>






        <div class="row">


            <div class="content">
                <h3 align="center">WHO WE ARE</h3>

                <p>
                    Oxygen Sports is a leading provider of sports training and performance solutions. We specialize in improving the athletic performance of individuals and teams through innovative training methods and cutting-edge technology. Our team of experienced coaches and trainers work with athletes of all levels to help them reach their full potential.


                </p>

            </div>
            <div class="content">
                <h3 align="center">WHAT WE DO</h3>

                <p>
                    Our team is constantly innovating and researching new ways to improve our products and production processes, so you can trust that you're getting the latest and greatest gear when you shop with us. Our state-of-the-art production techniques ensure that every product meets our high standards for quality and performance, at a lower cost.



                </p>

            </div>
            <div class="content">
                <h3 align="center">WHY CHOOSE US</h3>

                <p>
                    Choosing Oxygen Sports is an excellent decision for anyone looking to improve their athletic performance. We have a team of experienced coaches and trainers who use cutting-edge methods and technology to help you achieve your goals. Whether you're a beginner or a professional, we have the expertise to help you reach your full potential.



                </p>

            </div>


        </div>




    </section>

    <h1 class="heading" style="font-size:25px;padding-top:15px">LATEST BLOGS</h1>

    <div>
        <style>
            .container {
                display: flex;
                padding-bottom: 30px;

            }

            .box {
                flex: 1;
                background-size: cover;
                background-position: center;

            }

            .box a {
                color: white;
            }

            .box-1 {
                background-image: url(images/weight-lifting.jpg);
                min-height: 400px;

                margin-right: 15px;
                background-size: cover;
                background-position: center;
                display: flex;
                flex-direction: column;

                justify-content: flex-end;
                align-items: center;
                padding: 15px;
                margin: 5px;
                padding: 5px;


            }

            .box-2 {
                background-image: url(images/shoe.jpg);
                min-height: 400px;

                margin-right: 15px;
                background-size: cover;
                background-position: center;
                display: flex;
                flex-direction: column;

                justify-content: flex-end;
                align-items: center;
                padding: 15px;
                margin: 5px;
                padding: 5px;


            }

            .box-3 {
                background-image: url(images/yoga.jfif);
                min-height: 400px;

                margin-right: 15px;
                background-size: cover;
                background-position: center;
                display: flex;
                flex-direction: column;

                justify-content: flex-end;
                align-items: center;
                padding: 15px;
                margin: 5px;
                padding: 5px;


            }

            @media (max-width: 768px) {

                /*breakpoint*/
                .container {
                    flex-direction: column;
                }
            }
        </style>

        <div class="container">
            <div class="box box-1">
                <div>
                    <h2 style="color:white;padding-bottom:300px">Evidence Mount on the benifits of strength training</h2>
                </div>
                <div>
                    <button class="btn btn-1" style="margin: 5px"><a href="#"> Read More</span>
                        </a></button>
                </div>
            </div>
            <div class="box box-2">
                <div>
                    <h2 style="color:white;padding-bottom:300px">New Rublic Kurt Sneaker Review</h2>
                </div>
                <div>
                    <button class="btn btn-1" style="margin: 5px"><a href="#"> Read More </span> </a></button>
                </div>
            </div>
            <div class="box box-3">
                <div>
                    <h2 style="color:white;padding-bottom:300px">Relax With Restorative Yoga</h2>
                </div>
                <div>
                    <button class="btn btn-1" style="margin: 5px"><a href="#"> Read More </span></a></button>
                </div>
            </div>
        </div>

    </div>

    <h1 class="heading" style="font-size:25px;padding-top:15px">OUR BRANDS</h1>

    
    <div class="our-clients" style="padding-bottom: 15px;">
  <ul>
    <li>  <img src="images/1-3.png" alt=""> </li>
    <li>  <img src="images/2-3.png" alt=""> </li>
    <li> <img src="images/fila2.jpg" alt=""> </li>
    <li>  <img src="images/3-4.png" alt=""> </li>
    <li> <img src="images/newbalance.png" alt=""> </li>
    <li> <img src="images/brand3.jpg" alt=""> </li>
  </ul>
</div>
        

        












   








    <?php include 'components/footer1.php'; ?>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

    <script>
        var swiper = new Swiper(".reviews-slider", {
            loop: true,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                991: {
                    slidesPerView: 3,
                },
            },
        });
    </script>

</body>

</html>