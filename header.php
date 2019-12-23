<?php
 require_once "object.php";
 @session_start();
    if(!isset($_SESSION['user_name']) || empty($_SESSION['user_name'])){
        header('location:index.php?msg=1');
    }

 ?>
<!DOCTYPE HTML>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($title)) echo $title . '| ' ; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.html"/>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]--></head>
<body>
<!-- <div class="dolce-preloader">
    <div class="spinner"></div>
</div> -->
<header class="header-area" id="home">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">

                    
    <div class="header-menu">
        <div class="container">
            <!--  -->
                <div class="col-md-12">
                    <div><i class=""></i></div>
                    <nav class="main-menu" id="navigation">
                        <ul class="navbar-nav">
                            <li class="active"><a href="#home" >home</a></li>
                            
                            <li><a href="about.php" class="scroll-link">about us</a></li>
                          <!-- 
                           -->
                            <li><a href="orderProduct.php" class="scroll-link">product</a></li>
                         
                            <li><a href="contact.php" class="scroll-link">contact us</a></li>
                            <li class="nav-item activedropdown">
                                <a href="#" class="scroll-link" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- <a class="nav-link" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
                                      welcome <?php echo $_SESSION['user_name'];  ?>
                                    </a>

                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a href="logout.php">logout</a>
                                  </div>
                                <!-- <a href="contact.php" class="scroll-link">contact us</a> -->
                            </li>

                           <!-- <li><i class="fa fa-shopping-cart"></i></li> -->
                        </ul>
                        <div class="cart-box">
                            <div class="single-cart">
                                <div class="cart-image"><img src="assets/images/product-2.png" alt="food"></div>
                                <div class="cart-details"><span>cup cake</span>

                                    <p>2 x $40.00</p></div>
                                <div class="close-icon text-right"><i class="fa fa-close"></i></div>
                            </div>
                            <hr>
                            <div class="single-cart">
                                <div class="cart-image"><img src="assets/images/product-4.png" alt="food"></div>
                                <div class="cart-details"><span>cup cake</span>

                                    <p>1 x $25.00</p></div>
                                <div class="close-icon text-right"><i class="fa fa-close"></i></div>
                            </div>
                            <hr>
                            <div class="total-price"><span>total</span><span>$65.00</span></div>
                            <div class="cart-btn"><a href="index-2.html" class="view-cart">view cart</a><a
                                    href="index-2.html" class="checkout">checkout</a></div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="welcome-area" id="hero">
    <div class="slider-area owl-carousel">
        <div class="single-slide-1 single-slide-bg">
            <div class="slide-shade">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1"><h1>WELCOME TO TAJ BAKERY</h1>

                            <p>Taj bakery promises to deliver you with the fresh,delicious and beautiul looking cakes.

                                We know that your time is valuable and sometimes every minute in the day counts. That’s why we deliver! So you can spend more time doing the things you love</p></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide-2 single-slide-bg">
            <div class="slide-shade">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1"><h1>WELCOME TO our bakery</h1>

                            <p>Taj bakery promises to deliver you with the fresh,delicious and beautiul looking cakes.

                                We know that your time is valuable and sometimes every minute in the day counts. That’s why we deliver! So you can spend more time doing the things you love</p></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide-3 single-slide-bg">
            <div class="slide-shade">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1"><h1>WELCOME TO Taj
                            website</h1>

                            <p>Taj bakery promises to deliver you with the fresh,delicious and beautiul looking cakes.

                                We know that your time is valuable and sometimes every minute in the day counts. That’s why we deliver! So you can spend more time doing the things you love</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



