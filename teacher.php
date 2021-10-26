<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./teacher.php";
    header("Location: $url");
}

?>

<!DOCTYPE HTML>
<html>
	<head>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>StudEase&mdash;study with ease</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="study with easy" />
	<meta name="keywords" content="study with easy" />
	<meta name="author" content="Study Ease" />


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
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Pricing -->
	<link rel="stylesheet" href="css/pricing.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
		<style>
	#logoImage{
		margin-top: -20px;
  		width: 50%;
		}
	#navElements{
		padding-top: 20px;
	}
</style>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="site">Welcome <?php echo $username;?></p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
					<div class="row">
					<div class="col-xs-2">
						<a href="index.html"><img src="study.png" alt="logo" id="logoImage"></a>
					</div>
					<div class="col-xs-10 text-right menu-1" id="navElements">
						<ul>
							<li class="active"><a href="home.php">Home</a></li>
							<!-- <li><a href="courses.php">Courses</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="pricing.html">Pricing</a></li> -->
							<li class="has-dropdown">
								<a href="#">Course</a>
								<ul class="dropdown">
									<li><a href="#">I Grade</a></li>
									<li><a href="#">II Grade</a></li>
									<li><a href="#">III Grade</a></li>
									<li><a href="#">IV Grade</a></li>
									<li><a href="#">V Grade</a></li>
									<li><a href="#">VI Grade</a></li>
									<li><a href="#">VII Grade</a></li>
									<li><a href="#">VIII Grade</a></li>
									<li><a href="#">IX Grade</a></li>
									<li><a href="#">X Grade</a></li>
								</ul>
							</li>
							<!-- <li class="has-dropdown">
								<a href="#">Subjects</a>
								<ul class="dropdown">
									<li><a href="#">MATHEMATICS</a></li>
									<li><a href="#">SCIENCE</a></li>
									<li><a href="#">ENGLISH</a></li>
									<li><a href="#">HISTORY</a></li>
									<li><a href="#">GEOGRAPHY</a></li>
									<li><a href="#">HINDI</a></li>
									<li><a href="#">MARATHI</a></li>
								</ul>
							</li> -->
							<li><a href="courses.html">Books</a></li>
							<li><a href="#">Music</a></li>
							<li><a href="teacher.php">Teacher</a>
							<li><span class="login-signup"><a href="logout.php">Logout</a></span></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Our Faculty</h1>
									<h2>Teachers working at<a href="#" target="_blank">&nbsp; &nbsp;StudEase</a></h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	
	<div id="fh5co-staff">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(images/p1.jpg);">
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
						<span>Mathematics Teacher</span>
						<h3><a href="#">Mike K</a></h3>
						<p>A doctoral degree in mathematics. Specializations in computer algebra and mathematical theory analysis.</p>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(images/p2.jpg);">
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
						<span>Science Teacher</span>
						<h3><a href="#">Jullie V</a></h3>
						<p>Hold a PhD degree in relevant discipline along with Post-Doctoral research work of at least 2 years.</p>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(images/p3.jpg);">
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
						<span>English Teacher</span>
						<h3><a href="#">Josh L</a></h3>
						<p>C2 Proficiency, formerly known as Cambridge English: Proficiency (CPE)</p>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(images/p4.jpg);">
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
						<span>History Teacher</span>
						<h3><a href="#">K K W</a></h3>
						<p>PhD, years of discipline, patience, and work of the highest intellectual and academic quality. </p>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(images/p5.jpg);">
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
						<span>Geography Teacher</span>
						<h3><a href="#">Jim J</a></h3>
						<p>An undergraduate-level (bachelor's) geography degree of four years.</p>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(images/p6.jpg);">
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
						<span>Hindi Teacher</span>
						<h3><a href="#">Shushma S</a></h3>
						<p>Completed Bachelor of Arts, Major Language Hindi.</p>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(images/p7.jpg);">
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
						<span>Marathi Teacher</span>
						<h3><a href="#">Yogita Y</a></h3>
						<p>Completed Bachelor of Arts, Major Language Marathi.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-register" style="background-image: url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animate-box">
				<div class="date-counter text-center">
					<h2>Launching New Book Series.</h2>
					<h3>By StudEase</h3>
					<div class="simply-countdown simply-countdown-one"></div>
					<p><strong>Limited Offer, Hurry Up!</strong></p>
					<p><a href="#" class="btn btn-primary btn-lg btn-reg">Register Now!</a></p>
				</div>
			</div>
		</div>
	</div>


	<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2020 All Rights Reserved.</small> 
						<small class="block">Designed by <a href="#" target="_blank">Sreelakshmy Prajoth</a></small>
					</p>
				</div>
			</div>

		</div>
	</footer>


	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>

