
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>RESUMEWALA</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/download1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.php">
							<img class="logo" style="margin-top: 7px" src="img/logo5.png" alt="logo">
							<img class="logo-alt" style="margin-top: 7px" src="img/logo6.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<!-- <li><a href="#templates">Templates</a></li> -->
					<li><a href="#service">Services</a></li>
					<li><a href="#features">Why us?</a></li>
					<!-- <li><a href="#pricing">Prices</a></li> -->
					<!--li><a href="#team">Team</a></li-->
					<!--li class="has-dropdown"><a href="#blog">Blog</a>
						<ul class="dropdown">
							<li><a href="blog-single.html">blog post</a></li>
						</ul>
					</li-->
					<li><a href="#contact">Contact</a></li>
					<li> 
						<?php
							session_start();
							if(isset($_SESSION['username']))
							{
							//echo '<a href="dashbord.html">';
							//	echo $_SESSION['username'];
								echo '<a href="api/user/signout.php">Log Out</a>';
							//echo '</a>';
							}
							else{
							echo '<a href="login.html">signUp/signIn</a>';
							}
						?>
					</li>			
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">We Are Creative Agency</h1>
							<p class="white-text">Create a Professional Resume in Minutes.</p>
							<a href="api/User/getstarted.php"><button class="white-btn">Get Started!</button></a>
							
							<!--<button class="main-btn">Learn more</button>-->
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Welcome to Resumewala</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-cogs"></i>
						<h3>Fast</h3>
						<p>The fastest way to make a free professional resume in minutes.</p>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-magic"></i>
						<h3>Easy to Use</h3>
						<p>No writing experience? No problem! Just point, click, and create.</p>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-mobile"></i>
						<h3>Professional</h3>
						<p>Our HR-approved resume templates will get you more callbacks.</p>
					</div>
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->



	<!-- Service -->
	<div id="service" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">What we offer</h2>
				</div>
				<!-- /Section header -->

				

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-rocket"></i>
						<h3>Graphic Design</h3>
						<p>Stand out from the competition. Market & strengthen your brand, with a little help from us.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-cogs"></i>
						<h3>Creative Idea</h3>
						<p>Inbuilt Creative options are provided on resume editor for creation of creative resume.</p>
					</div>
				</div>
				<!-- /service -->

				

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-pencil"></i>
						<h3>Awesome Support</h3>
						<p>TeamSupport helps get the focus of customer support back on the customer where it belongs.</p>
					</div>
				</div>
				<!-- /service -->

				
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Service -->


	<!-- Why Choose Us -->
	<div id="features" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- why choose us content -->
				<div class="col-md-6">
					<div class="section-header">
						<h2 class="title">Why Choose Us</h2>
					</div>
					<p>A choice that makes the difference.</p>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>The fastest way to make a free professional resume in minutes.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>No writing experience? No problem! Just point, click, and create.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Our HR-approved resume templates will get you more callbacks.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>TeamSupport helps get the focus of customer support back on the customer where it belongs.</p>
					</div>
				</div>
				<!-- /why choose us content -->

				<!-- About slider -->
				<div class="col-md-6">
					<div id="about-slider" class="owl-carousel owl-theme">
						<img class="img-responsive" src="./img/about1.jpg" alt="">
						<img class="img-responsive" src="./img/about2.jpg" alt="">
						<img class="img-responsive" src="./img/about1.jpg" alt="">
						<img class="img-responsive" src="./img/about2.jpg" alt="">
					</div>
				</div>
				<!-- /About slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Why Choose Us -->


	<!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background2.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-users"></i>
						<h3 class="white-text"><span class="counter">
							<?php
								$con=mysqli_connect("localhost","root","","accounts");
								// Check connection
								if (mysqli_connect_errno())
								  {
								  echo "Failed to connect to MySQL: " . mysqli_connect_error();
								  }

								$sql="SELECT id FROM users ORDER BY id";

								if ($result=mysqli_query($con,$sql))
								  {
								  // Return the number of rows in result set
								  $rowcount=mysqli_num_rows($result);
								  printf("%d",$rowcount);
								  // Free result set
								  mysqli_free_result($result);
								  }

								mysqli_close($con);
							?>
						</span></h3>
						<span class="white-text">Happy clients</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-trophy"></i>
						<h3 class="white-text"><span class="counter">12</span></h3>
						<span class="white-text">Awards won</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-coffee"></i>
						<h3 class="white-text"><span class="counter">154</span>K</h3>
						<span class="white-text">Cups of Coffee</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-file"></i>
						<h3 class="white-text"><span class="counter">45</span></h3>
						<span class="white-text">Projects completed</span>
					</div>
				</div>
				<!-- /number -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->

	

	

	<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Get in touch</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Phone</h3>
						<p>+91-9624653606</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>pranavgajera1998@gmail.com</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Address</h3>
						<p>BVM Engineering College</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact form -->
				<div class="col-md-8 col-md-offset-2">
					<form class="contact-form">
						<input type="text" class="input" placeholder="Name">
						<input type="email" class="input" placeholder="Email">
						<input type="text" class="input" placeholder="Subject">
						<textarea class="input" placeholder="Message"></textarea>
						<button class="main-btn">Send message</button>
					</form>
				</div>
				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->


	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.php"><img src="img/logo6.png" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="https://www.facebook.com/pankit.gajera" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/pranavgajera" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/u/0/112738424590772829765" target="_blank"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="https://www.instagram.com/prnv_2807/" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://in.linkedin.com/in/pranav-gajera-452857139" target="_blank"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="https://in.linkedin.com/in/pranav-gajera-452857139" target="_blank"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2018. All Rights Reserved. Designed by <a href="index.php">Pranav</a></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/main1.js"></script>

</body>

</html>
