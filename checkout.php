<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SaveBlock | Checkout</title>

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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/simpleCart.js"></script>
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
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Shopping cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
            </div>
            <form action="purchased.php" class="checkout__form">
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Billing Details</h5>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>First Name <span>*</span></p>
                                    <input type="text" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Last Name <span>*</span></p>
                                    <input type="text" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Address <span>*</span></p>
                                    <input type="text" placeholder="Street Address" required>
                                    <input type="text" placeholder="Apartment. suite, unite ect ( optinal )">
                                </div>
                                <div class="checkout__form__input">
                                    <p>City <span>*</span></p>
                                    <input type="text" required>
                                </div>
                                <div class="checkout__form__input">
                                    <p>State <span>*</span></p>
                                    <input type="text" required>
                                </div>
                                <div class="checkout__form__input">
                                    <p>Postcode/Zip <span>*</span></p>
                                    <input type="text" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Phone <span>*</span></p>
                                    <input type="text" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Email <span>*</span></p>
                                    <input type="email" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h5 class="mb-3">Payments</h5>
                                <div class="form-check">
                                    <input id="creditCard" name="paymentMethod" type="radio"
                                    class="form-check-input" checked required>
                                    <label for="creditCard">Credit Card
                                    </label>
                                    </div>
                                    <div class="form-check">
                                        <input id="debitcard" name="paymentMethod" type="radio"
                                        class="form-check-input" checked required>
                                        <label for="debitCard">Debit Card
                                        </label>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-md-6">
                                            Name on Card
                                            <input type="text"
                                            class="form-control" required>
                                            <small class="text-muted">
                                                Full name as displayed on card.
                                            </small>
                                            <div class="invalid-feedback">
                                                Name on card is required.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            Credit Card Number
                                            <input type="text"
                                            class="form-control" required>
                                            <div class="invalid-feedback">
                                                Credit Card Number is required.
                                            </div>
                                    </div>
                                        <div class="col-md-3">
                                            <label for="cc-expire"
                                            class=form-label> Expiration
                                        </label>
                                        <input id="cc-expire"
                                        type="text" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Expiration is required
                                        </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="cc-cvv"
                                            class=form-label> CVV
                                        </label>
                                        <input id="cc-cvv"
                                        type="text" class="form-control" required>
                                        <div class="invalid-feedback">
                                            CVV is required
                                        </div>
                                        </div>
                                </div>
                                </div>
                        </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="checkout__order">
                                <h5>Order Summary</h5>
                                <div class="product-total">
    
                                    <p><b>Items:</b> <span class="simpleCart_quantity"></span></p>
                                    <!--number of items in the cart-->
                                    
                                    <p><b>Total:</b> <span class="simpleCart_total"></span></p>
                                    <!-- total cost of cart before tax & shipping-->
                                    
                                    <p><b>Tax rate:</b> <span class="simpleCart_taxRate"></span></p>
                                    <!--will be display as a percentage ( ie 7% )-->
                                    
                                    <p><b>Tax:</b> <span class="simpleCart_tax"></span></p>
                                    <!--taxRate X total displayed as currency-->
                                    
                                    <p><b>Final price:</b> <span class="simpleCart_grandTotal"></span> </p>
                                    <!--total of the cart after tax & shipping -->
                                    
                                </div>
                                <div>
                                    <a href="./purchased.php">
                                        <input type="submit" value="Place Order" />
                                     </a>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

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
<?php require_once './includes/footer.php';
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
    </body>

    </html>