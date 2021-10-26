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
    $url = "./courses.php";
    header("Location: $url");
}

if (isset($_GET['file'])) {
$file = $_GET['file'];
if (file_exists($file) && is_readable($file) && preg_match('/\.pdf$/',$file)) {
 header('Content-Type: application/pdf');
 header("Content-Disposition: attachment; filename=\"$file\"");
 readfile($file);
 }
}

?>
<!DOCTYPE HTML>
<html>
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
									<li><a href="std1.php">I Grade</a></li>
									<li><a href="std2.php">II Grade</a></li>
									<li><a href="std3.php">III Grade</a></li>
									<li><a href="std4.php">IV Grade</a></li>
									<li><a href="std5.php">V Grade</a></li>
									<li><a href="std6.php">VI Grade</a></li>
									<li><a href="std7.php">VII Grade</a></li>
									<li><a href="std8.php">VIII Grade</a></li>
									<li><a href="std9.php">IX Grade</a></li>
									<li><a href="std10.php">X Grade</a></li>
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
							<li><a href="#">Books</a></li>
							<li><a href="#">Music</a></li>
							<li><a href="teacher.php">Teacher</a></li>
							<li><a href="#	">Contact</a></li>
							<li class="btn-cta"><span class="login-signup"><a href="logout.php">Logout</a></span></li>
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
			   					<h1 class="heading-section">Grade III</h1>
									<h2>Course subject Books provided by <a href="#" target="_blank">&nbsp; StudEase</a></h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Our Books</h2>
					<p>We help studets to learn better and effectively. Our books are written by one of the best teachers in
					the required fields, to help students understad concept easily.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/math.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Mathematics</a></h3>
							<p>the abstract science of number, quantity, and space, either as abstract concepts ( pure mathematics ), or as applied to other discipline.
							</p>
							<span><a href="std2.php?file=class/3Maths.pdf" class="btn btn-primary btn-sm btn-course">Download</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/envoir.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Envoirmental Studies</a></h3>
							<p>Envoirmental Studies is a systematic enterprise that builds and organizes knowledge in the form of testable explanations and predictions about the world.</p>
							<span><a href="std2.php?file=class/3Env.pdf" class="btn btn-primary btn-sm btn-course">Download</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/english.png);">
						</a>
						<div class="desc">
							<h3><a href="#">English</a></h3>
							<p>English is a West Germanic language of the Indo-European language family, originally spoken by the inhabitants of early medieval England.</p>
							<span><a href="std2.php?file=class/3Eng.pdf" class="btn btn-primary btn-sm btn-course">Download</a></span>
						</div>
					</div>
				</div>
				
					<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url(images/marathi.jpg);">
						</a>
						<div class="desc">
							<h3><a href="#">Marathi</a></h3>
							<p>Marathi is an Indo-Aryan language spoken predominantly by Marathi people of Maharashtra, India. It is the official language </p>
							<span><a href="std2.php?file=class/3Marathi.pdf" class="btn btn-primary btn-sm btn-course">Download</a></span>
						</div>
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
		<!-- 	<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3>About Education</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learning</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Course</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learn &amp; Grow</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Blog</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Engage us</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Visual Assistant</a></li>
						<li><a href="#">System Analysis</a></li>
						<li><a href="#">Advertise</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Legal</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div> -->

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

