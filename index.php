<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Havva Zeynep Akdemir - Portfolyo</title>
	<meta name="description" content="Havva Zeynep Akdemir - Portfolyo">
	<meta name="author" content="https://github.com/Havvazeynep , havvazeynepakdemir@gmail.com">
	<meta name="keywords" content="HTML CSS JS Javascript PHP Web Tasarım">
	<link rel="icon" href="./assets/images/icon.png">
	<!-- Include the site stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Dosis:800" rel="stylesheet">
	<!-- Include the site stylesheet -->
	<link rel="stylesheet" type="text/css" href="./assets/css/fontawesome.css">
	<!-- Include the site stylesheet -->
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
	<!-- Include the site stylesheet -->
	<link rel="stylesheet" type="text/css" href="./assets/css/plugins.css">
	<!-- Include the site stylesheet -->
	<link rel="stylesheet" type="text/css" href="./assets/css/icofont.css">
	<!-- Include the site stylesheet -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="./assets/css/responsive.css">
	<!-- Include the site stylesheet -->
	<link rel="stylesheet" type="text/css" href="./assets/css/color.css">
	<!-- Include the site stylesheet -->
	<style class="color_css"></style>
</head>
<body>
	<!-- Main container of the page -->
	<div id="wrapper">
		<!-- Header of the page -->
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<!-- logo of the page -->
						<div class="logo text-uppercase"><a href="https://drive.google.com/file/d/10gQPWhg2yU81ceIjCSRrqJt_JjMtMya4/view?usp=sharing">ÖZGEÇMİŞ</a></div>
					</div>	
				</div>
			</div>
			<!-- Nav of the page -->
			<nav id="nav" class="hidden-xs">
				<ul class="list-unstyled text-uppercase">
					<li><a href="#Welcome">Hoşgeldiniz</a></li>
					<li><a href="#works">Çalışmalarım</a></li>
					<li><a href="#about">Hakkımda</a></li>
					<li><a href="#services">Hizmetlerimiz</a></li>
					<li><a href="#skills">Çalışmalarım</a></li>
					<li><a href="#contact">İletişim</a></li>
				</ul>
			</nav>
		</header>
		<!-- Main of the page -->
		<main id="main">
			<!-- Banner sec of the page -->
			<?php include './components/welcome.php' ?>

			<!-- Work sec of the page -->
			<?php include './components/works.php' ?>

			<!-- About sec of the page -->
			<?php include './components/about.php' ?>

			<!-- Services sec of the page -->
			<?php include './components/services.php' ?>

			<!-- Skills sec of the page -->
			<?php include './components/skills.php' ?>

			<!-- Resume sec of the page -->
			<?php include './components/resume.php' ?>

			<!-- Testimonial of the page -->
			<?php include './components/testimonial.php' ?>

			<!-- Contact-sec of the page -->
			<?php include './components/contact.php' ?>
		</main>
		<!-- Footer of the page -->
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<span class="text">© 2022 Copyright AMEAN Danışmanlık, Havva Zeynep Akdemir. All Rights Reserved</span>
					</div>
					<div class="col-xs-12 col-sm-6">
						<!-- social icons of the page -->
						<ul class="list-unstyled social-icons">
							<li><a href="https://github.com/Havvazeynep" class="fab fa-github"></a></li>
							<li><a href="https://www.behance.net/havvazeynepakdemir" class="fab fa-behance"></a></li>
							<li><a href="https://www.linkedin.com/in/havvazeynepakdemir/" class="fab fa-linkedin-in"></a></li>
							<li><a href="https://t.me/havvazeynepakdemir" class="fab fa-telegram"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- Include jQuery -->
	<script src="./assets/js/jquery.js"></script>
	<!-- Include jQuery -->
	<script src="./assets/js/plugins.js"></script>
	<!-- Include jQuery -->
	<script src="./assets/js/jquery.main.js"></script>
	<div id="style-changer" data-src="./assets/inc/style-changer.html"></div>
</body>
</html>