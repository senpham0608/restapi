<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Test Restful Service</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link href="http://localhost:8080/test/css/main.css" rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">WELCOME TO MY TEST</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="http://localhost:8080/test/rest/get">GET: /</a></li>
											<li><a href="http://localhost:8080/test/rest/get/user/sen">GET: user/:username</a></li>
											<li><a href="http://localhost:8080/test/rest/get/user/wsgroup">GET: user/:username(wsgroup)</a></li>
											<li><a href="http://localhost:8080/test/rest/post/user">POST: user/</a></li>
										    <li><a href="http://localhost:8080/test/rest/put/user/sen">PUT</a></li>

										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Welcome to my test</h2>
							<p>W&S test<br />
							REST API<br />
							<ul class="actions">
								<li><a href="http://localhost:8080/test/rest/get" class="button special">Try it</a></li>
							</ul>
						</div>
						<a href="#one" class="more scrolly">About me</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>My Profile<br /></h2>
								<p>Hi, my name's Sen. Im a senior student at University Of Information Technology.<br />
								My major is information system. This is my RESTFul Web. Let's try it!^^</p>
							</header>
						</div>
					</section>

				
			</div>

		<!-- Scripts -->
			<script src="http://localhost:8080/test/js/jquery.min.js"></script>
			<script src="http://localhost:8080/test/js/jquery.scrollex.min.js"></script>
			<script src="http://localhost:8080/test/js/jquery.scrolly.min.js"></script>
			<script src="http://localhost:8080/test/js/skel.min.js"></script>
			<script src="http://localhost:8080/test/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="http://localhost:8080/test/js/main.js"></script>

	</body>
</html>