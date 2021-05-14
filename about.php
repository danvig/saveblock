<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Saveblock Website">
    <meta name="keywords" content="Saveblock, gifts, toys, memories">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SaveBlock | About Us</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- PHP -->
    <?php  
        session_start();
        if(!isset($_SESSION['username']))
        {
            header("Location: login.php");
        }
    ?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <?php
        require_once './includes/offcanvasheader.php';
    ?>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <!-- To edit, go to includes folder and edit the file "header.php" -->
    <?php
        require_once './includes/header.php';
    ?>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <span>About</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <!-- LEFT HALF OF PAGE -->
                <div class="col-lg-6 col-md-6">
                    <div class="contact__map">
                        <img src="img/about.png">
                    </div>
                </div>
                
                <!-- RIGHT HALF OF PAGE -->
                <div class="col-lg-6 col-md-6">
                    <div class="contact__content">
                        <div class="contact__address">
                            <h4>About Us</h4>
                            <br>
                            <p>
                                All dreams deserve to be saved. Perfect memories preserved for life. At SaveBlock, we believe that your dreams,
                                movements, and experiences are worth saving!

                                <br><br>

                                At SaveBlock, we aim to sell high-quality print and environmentally friendly <i>cubic dioramas</i> - decorative toys
                                able to display content across culture to whatever the customer personally wants with nothing but a screenshot
                                and a transaction.
                                
                                <br><br>

                                SaveBlock captures a piece of time or movement in one diorama. We offer a wide range of designs to our customers
                                with the customisation possibilities limited only by your imagination.

                                <br><br>

                                Gifts for family? Give them something unique that no one else has thought of. A new addition to the family? Capture
                                their birth in a diorama. Just want to treat yourself? We can do that too!

                                <br><br>

                                Want a continuous stream of memories? Subscribe to us for only <strong>$40 a month</strong> and get an exclusive, never seen before, SaveBlock
                                delivered to your door every month!

                                <br><br>

                                "Some cool guy had a dream. I said <strong>same</strong>". Dreams deserve to be saved. And SaveBlock is turning <u>that</u>
                                dream... into reality.
                            </p>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Contact Section End -->

<!-- Instagram Begin -->
<div class="instagram">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-1.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ saveblock</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-2.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ saveblock</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-3.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ saveblock</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-4.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ saveblock</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-5.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ saveblock</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="img/instagram/insta-6.jpg">
                    <div class="instagram__text">
                        <i class="fa fa-instagram"></i>
                        <a href="#">@ saveblock</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Instagram End -->

<!-- Footer Section Begin -->
<?php
        require_once './includes/footer.php';
    ?>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
