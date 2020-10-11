<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PEER XP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />

    <!-- 
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE 
    DESIGNED & DEVELOPED by FreeHTML5.co
        
    Website:        http://freehtml5.co/
    Email:          info@freehtml5.co
    Twitter:        http://twitter.com/fh5co
    Facebook:       https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
     -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/owl.theme.default.min.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/flexslider.css">

    <!-- Pricing -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/pricing.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">

    <!-- Modernizr JS -->
    <script src="<?php echo URLROOT; ?>/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    </head>
    <body>
        
    
    <div id="page">
    <nav class="fh5co-nav" role="navigation" style="background-image: url(<?php echo URLROOT; ?>/images/staff-2.jpg);">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-right">
                        <p class="site"><a href="https://peerxp.com/" target="_blank"> www.peerxp.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href="<?php echo URLROOT; ?>/pages/index"><img src="<?php echo URLROOT;?>/images/peerxp-logo.png"><span></span></a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <?php if(isset($_SESSION['user_id'])) : ?>
                                <li class="active"><a href="<?php echo URLROOT; ?>/pages/index">Home</a></li>
                                <li><a href="<?php echo URLROOT;?>/pages/tickets">Tickets</a></li>
                                <li><a href="#">Welcome <?php echo ucwords($_SESSION['user_name']); ?></a></li>
                                <li class="btn-cta"><a href="<?php echo URLROOT;?>/users/logout"><span>Logout</span></a></li>
                            <?php else : ?>
                                <li class="btn-cta"><a href="<?php echo URLROOT;?>/users/login"><span>Login</span></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </nav>