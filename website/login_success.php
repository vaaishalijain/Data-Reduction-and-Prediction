
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
							<li class="menu-item current-menu-item"><a href="login.html">Login</a></li>
							
							
							<li class="menu-item"><a href="review.html">Analysis</a></li>
							<li class="menu-item"><a href="prediction.html">Prediction</a></li>
							<li class="menu-item"><a href="recommend.html">Recommendation</a></li>
							
							<li class="menu-item"><a href="about.html">Contact</a></li>
						</ul> 
				</div>
			</header>
			<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="breadcrumbs">
							<a href="index.html">Home</a>
							<span>Login</span>
						</div>

	<div class="content">
								
							


							<?php
								// Check if session is not registered, redirect back to main page. 
								session_start();
								if(!isset($_SESSION['userid'])) {
									header("location:login.html");
								}
							?>

								
								<?php
									//print_r($_SESSION);
								?>

								
								
								Welcome <?php echo $_SESSION['userid'];
								?>
								
								 
								
						  <p align="right"><br>
						    <br>
						  </p>
						  </footer>
	  <div class="content">
			  <div align="right">
			    <form name='registration' action="review.html" method="post">
			      <h1 align="left">Principal Component Analysis<img src="DataMining.jpg" width="363" height="278" align="right" ></h1>
			      <p align="center">Principal component analysis (PCA) is a technique used to emphasize variationand bring out strong patterns in a dataset. It's often used to make data easy to explore and visualize. This transformation is defined in such a way that the first principal component has the largest possible <a href="https://en.wikipedia.org/wiki/Variance" title="Variance">variance</a> (that is, accounts for as much of the variability in the data as possible), and each succeeding component in turn has the highest variance possible under the constraint that it is <a href="https://en.wikipedia.org/wiki/Orthogonal" title="Orthogonal">orthogonal</a> to the preceding components. The resulting vectors are an uncorrelated <a href="https://en.wikipedia.org/wiki/Orthogonal_basis_set" title="Orthogonal basis set">orthogonal basis set</a>. PCA is sensitive to the relative scaling of the original variables.</p>
			      <p align="center" ><br><br>                  <a href="logout.php">
			        <input type="submit" value="Proceed" align="center">
			      </a>                  
			      <a href="logout.php">
			     
			      <p align="left">&nbsp;</p>
			      <p align="left">&nbsp;</p>
			      <p align="right">
			        <input type="button" value="LOGOUT" align="right">
			      </p>
			      			      <p>&nbsp;</p>
		        </form>
			    <a href="logout.php">
			    
              </a></div>
              
			</div>
	  <p>
			  <script src="js/jquery-1.11.1.min.js"></script>
			  <script src="js/plugins.js"></script>
	  <script src="js/app.js"></script></p>
	</div>
	</body>

</html>