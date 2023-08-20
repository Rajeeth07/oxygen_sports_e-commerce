<div>
    <style>
        :root {
            --white: #FFF;
            --black: #000;
            --dark: #1E1E1E;
            --gray: rgba(1, 1, 1, 0.6);
            --lite: rgba(255, 255, 255, 0.6);
            --primary: #002347;
            --secondary: #fdc632;
        }


        /***************************
            DEFAULT
****************************/
        body {
            margin: 0;

            font-family: 'Poppins', sans-serif;
        }

        a {
            text-decoration: none !important;
            min-width: fit-content;
            width: fit-content;
            width: -webkit-fit-content;
            width: -moz-fit-content;
        }

        a,
        button {
            transition: 0.5s;
        }

        a,
        p {
            font-size: 14px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: var(--primary);
            font-weight: 600;
        }

        h3 {
            font-size: medium;
        }

        a,
        button,
        input,
        textarea,
        select {
            outline: none !important;
        }

        fieldset {
            border: 0;
        }

        .title {
            color: var(--primary);
        }

        .flex,
        .fixed_flex {
            display: flex;
        }

        .flex-content {
            width: 100%;
            position: relative;
        }

        .padding_1x {
            padding: 1rem;
        }

        .padding_2x {
            padding: 2rem;
        }

        .padding_3x {
            padding: 3rem;
        }

        .padding_4x {
            padding: 4rem;
        }

        .btn {
            padding: 0.8rem 2rem;
            border-radius: 5px;
            text-align: center;
            font-weight: 500;
            text-transform: uppercase;
        }

        .btn_1 {
            border: 1px solid var(--primary);
            background-color: var(--primary);
            color: var(--secondary);
        }

        .btn_1:hover {
            background-color: transparent;
            color: var(--primary);
        }

        .btn_2 {
            padding: 10px;
            border: 1px solid var(--secondary);
            background-color: #410000;
            color: whitesmoke;
        }

        .btn_2:hover {
            border: 1px solid var(--primary);
            background-color: var(--primary);
            color: var(--secondary);
        }

        @media (max-width:920px) {
            .flex {
                flex-wrap: wrap;
            }

            .padding_1x,
            .padding_2x,
            .padding_3x,
            .padding_4x {
                padding: 1rem;
            }

            .btn {
                padding: 0.5rem 1rem;
            }

            a,
            p {
                font-size: 12px;
            }
        }



        /***************************
               FOOTER
****************************/
        footer {
            background-color: #212529;
            color: var(--lite);
        }

        footer h3 {
            color: var(--white);
            margin-bottom: 1.5rem;
        }

        footer a {
            color: var(--lite);
            display: block;
            margin: 15px 0;
        }

        footer a:hover {
            color: var(--white);
        }

        footer fieldset {
            padding: 0;
        }

        footer fieldset input {
            background-color: whitesmoke;
            border: 0;
            color: var(--lite);
            padding: 1rem;
        }

        footer fieldset .btn {
            border-radius: 0;
            border: 0;
        }

        footer fieldset .btn_2:hover {
            background-color: var(--secondary);
            border: 0;
            color: var(--primary);
        }

        footer .flex:last-child {
            align-items: center;
        }

        footer .flex:last-child .flex-content:last-child {
            text-align: right;
        }

        footer .flex:last-child p {
            color: var(--white);
        }

        footer .flex:last-child a {
            width: 40px;
            display: inline-block;
            background-color: #334f6c;
            color: var(--white);
            padding: 0.5rem;
            margin-right: 3px;
            text-align: center;
        }

        footer .flex:last-child a:hover {
            background-color: var(--secondary);
            color: var(--gray);
        }

        @media (max-width:1100px) {
            footer .flex:first-child {
                flex-wrap: wrap;
            }

            footer .flex:first-child .flex-content {
                flex: 1 1 40%;
            }
        }

        @media (max-width:920px) {
            footer .flex:last-child .flex-content:last-child {
                text-align: left;
            }
        }

        @media (max-width:320px) {
            footer .flex:first-child .flex-content {
                flex: 1 1 100%;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!--footer-->
    <footer class="padding_4x">
        <div class="flex">
            <section class="flex-content padding_1x">
                <h3>Top Products</h3>
                <a href="#">Managed Website</a>
                <a href="#">Manage Reputation</a>
                <a href="#">Power Tools</a>
                <a href="#">Marketing Service</a>
            </section>
            <section class="flex-content padding_1x">
                <h3>Quick Links</h3>
                <a href="index.php"> </i> Home</a>
                <a href="about.php"> </i> About</a>
                <a href="shop.php"> </i> Shop</a>
                <a href="blog.php"> </i> Blog</a>
            </section>
            <section class="flex-content padding_1x">
               
                    <h3>Extra Links</h3>
                    <a href="signin_page.php">  login</a>
                    <a href="signup_page.php"> register</a>
                    <a href="cart.php">  cart</a>
                    <a href="orders.php"> orders</a>
               

            </section>
            <section class="flex-content padding_1x">
                <h3>contact us</h3>
                <a href="tel:1234567890"><i class="fas fa-phone"></i> +94 76262 3335</a>
                <a href="tel:11122233333"><i class="fas fa-phone"></i> +94 76262 3335</a>
                <a href="mailto:oxygen.sports.web@gmail.com"><i class="fas fa-envelope"></i> oxygen.sports.web@gmail.com</a>
                <a href="https://www.google.com/myplace"><i class="fas fa-map-marker-alt"></i> Colombo, Srilanka </a>
            </section>
            <section class="flex-content padding_1x">
                <h3>Newsletter</h3>
                <p>Do Not Miss Information About New Products</p>
                <fieldset class="fixed_flex">
                    <input type="email" name="newsletter" placeholder="Your Email Address">
                    <button class="btn btn_2">Subscribe</button>
                </fieldset>
            </section>
        </div>
        <div class="flex">
            <section class="flex-content padding_1x">
                <p>Copyright ©2023 All rights reserved || Group 9 </p>
            </section>
            <section class="flex-content padding_1x">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </section>
        </div>
    </footer>
</div>
<!--FONT AWESOME-->