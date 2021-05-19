<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Saveblock Website">
    <meta name="keywords" content="Saveblock, gifts, toys, memories">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SaveBlock | Shop</title>

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
                        <span>Catalogue</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
    <!-- Breadcrumb End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-heading active">
                                            <a data-toggle="collapse" data-target="#collapseOne">GameBlock</a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="img/shop/product_gameblock_amongus.jpg">Among Us</a></li>
                                                    <li><a href="img/shop/product_gameblock_undertale.jpg">Undertale</a></li>
                                                    <li><a href="img/shop/product_gameblock_minecraft.jpg">Minecraft</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseTwo">AniBlock</a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="img/shop/product_aniblock_evangelion.jpg">Evangelion</a></li>
                                                    <li><a href="img/shop/product_aniblock_simpsons.jpg">Simpsons</a></li>
                                                    <li><a href="img/shop/product_aniblock_aot.jpg">Attack On Titan</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseThree">All SaveBlocks</a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="saveblock/shop.php#">See All</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hamza wants this gone -->
                                    <!-- <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseFour">Accessories</a>
                                        </div>
                                        <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Coats</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">T-shirts</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->
                                    
                                    <!-- Hamza wants this gone -->
                                    <!-- <div class="card">
                                        <div class="card-heading">
                                            <a data-toggle="collapse" data-target="#collapseFive">Cosmetic</a>
                                        </div>
                                        <div id="collapseFive" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Coats</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">T-shirts</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__filter">
                            <div class="section-title">
                                <h4>Shop by price</h4>
                            </div>
                            <div class="filter-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="35" data-max="65"></div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <p>Price:</p>
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                            <a href="#">Filter</a>
                        </div>
                        <div class="sidebar__sizes">
                            <div class="section-title">
                                <h4>Block Storage Size</h4>
                            </div>
                            <div class="size__list">
                                <label for="m">
                                    byte (8.5cm cubed)
                                    <input type="checkbox" id="m">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="l">
                                    kilobyte (15cm cubed)
                                    <input type="checkbox" id="l">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="xl">
                                    megabyte (25cm cubed)
                                    <input type="checkbox" id="xl">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Remove for Hamza -->
                        <!-- <div class="sidebar__color">
                            <div class="section-title">
                                <h4>Block Filter</h4>
                            </div>
                            <div class="size__list color__list">
                                <label for="black">
                                    Blacks
                                    <input type="checkbox" id="black">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="whites">
                                    Whites
                                    <input type="checkbox" id="whites">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="reds">
                                    Reds
                                    <input type="checkbox" id="reds">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="greys">
                                    Greys
                                    <input type="checkbox" id="greys">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="blues">
                                    Blues
                                    <input type="checkbox" id="blues">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="beige">
                                    Beige Tones
                                    <input type="checkbox" id="beige">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="greens">
                                    Greens
                                    <input type="checkbox" id="greens">
                                    <span class="checkmark"></span>
                                </label>
                                <label for="yellows">
                                    Yellows
                                    <input type="checkbox" id="yellows">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="simpleCart_shelfItem product">
                                <div class="product__item__pic set-bg" data-setbg="img/shop/product_gameblock_amongus.jpg">
                                    <div class="label new">New</div>
                                    <ul class="product__hover">
                                        <li><a href="img/shop/product_gameblock_amongus.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <!--<li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><span class="icon_bag_alt"> <a href="javascript:;" class="item_add"></a></span></li>-->
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="amongus.php">Among Us GameBlock</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                      <span class="cart-btn"> <a href="javascript:;" class="item_add">Add to cart</a></span><br>
                                    <div class="item_price">$55</div>
                                  
                                </div>
                            </div>
                        </div>
                     
                        
                        <div class="col-lg-4 col-md-6">
                            <div class="simpleCart_shelfItem product">
                                <div class="product__item__pic set-bg" data-setbg="img/shop/product_aniblock_aot.jpg">
                                    <ul class="product__hover">
                                        <li><a href="img/shop/product_aniblock_aot.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                         <!--<li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <li><span class="icon_bag_alt"> <a href="javascript:;" class="item_add"></a></span></li>-->
                                     
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="aot.php" class="item_name">Attack on Titan AniBlock</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="cart-btn"> <a href="javascript:;" class="item_add">Add to cart</a></span><br>
                                    <span class="item_price">$55</span>
                                </div>
                            </div>
                        </div>
                       
                        
                        <div class="col-lg-4 col-md-6">
                            <div class="simpleCart_shelfItem product">
                                <div class="product__item__pic set-bg" data-setbg="img/shop/product__gameblock_undertale.jpg">
                                    <ul class="product__hover">
                                        <li><a href="img/shop/product__gameblock_undertale.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <span class="icon_bag_alt"><a href="javascript:;" class="item_add"></a></span>
                                        <span class="cart-btn"> <a href="javascript:;" class="item_add">Add to cart</a></span>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="undertale.php" class="item_name">Undertale GameBlock</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="cart-btn"> <a href="javascript:;" class="item_add">Add to cart</a></span><br>
                                    <span class="item_price">$55</span>
                                </div>
                            </div>
                        </div>
                        
            <div class="col-lg-4 col-md-6">
                            <div class="simpleCart_shelfItem product">
                                <div class="product__item__pic set-bg" data-setbg="img/shop/product__aniblock_simpsons.jpg">
                                    <ul class="product__hover">
                                        <li><a href="img/shop/product__aniblock_simpsons.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="simpsons.php" class="item_name">Simpsons Aniblock</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="cart-btn"> <a href="javascript:;" class="item_add">Add to cart</a></span><br>
                                    <span class="item_price">$55</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                             <div class="simpleCart_shelfItem product">
                                <div class="product__item__pic set-bg" data-setbg="img/shop/product_gameblock_minecraft.jpg">
                                    <ul class="product__hover">
                                        <li><a href="img/shop/product_gameblock_minecraft.jpg" class="image-popup"><span class="arrow_expand">
                                            <div class="label stockout stockblue">Out Of Stock</div></span></a></li>
                                        <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                        <span class="icon_bag_alt"><a href="javascript:;" class="item_add"></a></span>
                                        <span class="cart-btn"> <a href="javascript:;" class="item_add">Add to cart</a></span>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="minecraft.php" class="item_name">MineCraft GameBlock</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="cart-btn"> <a href="javascript:;" class="item_add">Add to cart</a></span><br>
                                    <span class="item_price">$55</span>
                                </div>
                            </div>
                           
                        </div>
                      <div class="col-lg-4 col-md-6">
                             <div class="simpleCart_shelfItem product">
                                <div class="product__item__pic set-bg" data-setbg="img/shop/product_aniblock_evangelion.jpg">
                                    <ul class="product__hover">
                                        <li><a href="img/shop/product_aniblock_evangelion.jpg" class="image-popup"><span class="arrow_expand">
                                            <div class="label">Sale</div></span>
                                            </a>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="evangelion.php" class="item_name">Evangelion AniBlock</a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="cart-btn"> <a href="javascript:;" class="item_add">Add to cart</a></span><br>
                                    <span class="item_price">$55</span>
                                </div>
                            </div>
                           
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section End -->

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
                <div class="col-lg-2 col-md-8 col-sm-8 p-0">
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
    <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/simpleCart.js"></script>
    <script src="js/simpleCart.min.js"></script>
   <script src="js/simplecartjs-config.js"></script>
      <script src="js/script.js"></script>
</body>

</html>