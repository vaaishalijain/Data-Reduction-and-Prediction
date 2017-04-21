
<html >
	<head>
		
		
		<title>Login</title>

		
		<link rel="stylesheet" href="style.css">
		

	</head>


	<body>
		

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">RCASTING</h1>
							<small class="site-description">If you can predict it, you can prevent it.</small>
						</div>
					</a> <!-- #branding -->

					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
														<li class="menu-item"><a href="login.html">Login</a></li>
							
							<li class="menu-item"><a href="review.html">Analysis</a></li>
<li class="menu-item"><a href="prediction.html">Prediction</a></li>
							
<li class="menu-item current-menu-item"><a href="recommend.html">Recommendation</a></li>
							<li class="menu-item"><a href="about.html">Contact</a></li>
								
						</ul> 

		</ul> 
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
						</div>

						<div class="content">
								
							


							<?php
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "travel";
								$uid = $_POST['userid'];
								$pass = $_POST['passid'];
								$name = $_POST['username'];
								$add = $_POST['address'];
								$cont = $_POST['contact'];
								$email = $_POST['email'];

								$conn = mysqli_connect($servername, $username, $password, $dbname);
								// Check connection
								if (!$conn) {
									die("Connection failed: " . mysqli_connect_error());
								}

								$sql = "INSERT INTO pdata (userid,password,name,address,contact,email)
								VALUES ('$uid', '$pass', '$name','$add', '$cont', '$email')";

								if (mysqli_query($conn, $sql)) {
									echo "Your account has been created successfully<br>Redirecting to login page in 3 seconds<br>";
									header("refresh:3; url=login.html");
								} else {
									echo "Error: " . $sql . "<br>" . mysqli_error($conn);
								}
									
								mysqli_close($conn);
							?>
								

							
							



							

							

			</footer>
		</div>
		
		


		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>