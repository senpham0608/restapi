<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>My test - Pham Thi Huong Sen</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="http://localhost:8080/test/css/main.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script> 

		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">REST API</a></h1>
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

				<!-- Main -->
				<center>
					<header>
						<h2><?php 
					if($getuser == 'all'){
						echo 'List of users';
					}
					else{
						echo 'User Information';
					}
					?></h2>
						<p>Use Array As Dummy Database</p>
					</header>
				</center>
				<section class="wrapper style5">
					<div class="inner">
					<section id = "content">
					
						<?php 
						if($content=='pass required'){
							echo '<script>
								 var pass = prompt("Please enter password:", "");
								if (pass != null) {
									$.ajax({
										type: "post",
										url:"http://localhost:8080/test/rest/getpassword/"+pass,
										data: {userName : "'.$userName.'"},
										success: function(data){
											var obj=jQuery.parseJSON(data);
											if(obj["content"]=="false"){
												$("#content").html("User name or password Invalid!");
											}
											else{
												var html = "<h4>"+obj["content"]["name"]+"</h4><p>ID: "+obj["content"]["id"]+"<p>";
												html += "<p>NAME: "+obj["content"]["name"]+"<p>";
												html += "<p>EMAIL: "+obj["content"]["email"]+"<p>";
												html += "<p>ABOUT: "+obj["content"]["about"]+"<p>";
												$("#content").html(html);
											}
										}
									});
								}
							</script>';

						}
						else{
							if($getuser == 'all'){
								for($i=0; $i<count($content);$i++)
								{
									echo "<section><h4>".$content[$i]["name"]."</h4><p>ID: ".$content[$i]['id']."<p>".
									 "<p>NAME: ".$content[$i]['name']."<p>".
									 "<p>EMAIL: ".$content[$i]['email']."<p>".
									 "<p>ABOUT: ".$content[$i]['about']."<p>".
									 "<hr></section>";
								}
							}
							else{
								echo "<h4>".$content["name"]."</h4><p>ID: ".$content['id']."<p>".
									 "<p>NAME: ".$content['name']."<p>".
									 "<p>EMAIL: ".$content['email']."<p>".
									 "<p>ABOUT ME: ".$content['about']."<p>".
									 "<hr></section>";
							}
						}
						?>
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