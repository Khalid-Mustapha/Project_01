<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bliss Tech &mdash; Mobile Phone Repair in Ibadan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

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

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
	
	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><a href="index.php">Bliss Tech<span>.</span></a></h1>
				<nav role="navigation">
					<ul>
						<li class="active"><a href="products.php">Products</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li class="cta"><a href="#">Get started</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	

	<aside id="fh5co-hero" clsas="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/maybe.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Our Awesome Products</h2>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	
	<div id="fh5co-grid-products" class="animate-box">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
        <h2>See our products</h2>
      </div>
    </div>
    <div class="row">
      <?php
        include 'connect.php';

        while ($row = mysqli_fetch_assoc($result)) {
          $image = 'images/' . $row["image1"];
      ?>
      <div class="col-md-4">
        <a href="phone.php">
          <div class="item-grid-containerk">
            <div class="item-gridk" style="background-image: url(<?php echo $image; ?>);" alt='$phonename'>
              <div class="v-alignk">
                <div class="v-align-middlek">
                  <h3 class="titlek"><?php echo ucwords($row["phone"]); ?></h3>
                  <h5 class="categoryk"><?php echo $row["price"]; ?></h5>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <?php
        }
      ?>
    </div>
  </div>
</div>

	<footer id="fh5co-footer" role="contentinfo">
	
		<div class="container">
			
			<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Our Services</h3>
				<ul class="float">
					<li><a href="services.php">Phone &amp; Laptop repair</a></li>
					<li><a href="services.php">Used phones</a></li>
					
				</ul>
				<ul class="float">
				  <li><a href="services.php">Accessories</a></li>
					<li><a href="services.php">Pickup and Delivery</a></li>
				</ul>
			</div>


			
			
			<div class="col-md-12 fh5co-copyright text-center">
				<p>&copy; <?php echo date('Y') ?>  <span>Designed with <i class="icon-heart"></i> by Khalid Mustapha <br>
				 Distributed By: <a class="" href="https://htmltemplates.co" target="_blank">HTML Templates</a> 
			</div>
			
		</div>
	</footer>
	</div>
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Easy PieChart -->
	<script src="js/jquery.easypiechart.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>