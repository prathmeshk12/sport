<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sports Club</title>
	

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/icomoon.css">
	
	<link rel="stylesheet" href="css/bootstrap.css">

	
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">


	<link rel="stylesheet" href="css/style.css">

	<script src="js/modernizr-2.6.2.min.js"></script>
	

	</head>
	<body>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">Call: +91 960 449 9066</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="http://localhost/php/sport/code/admin/admin_login.html"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php
         include("commonpages/header.php")
		?>
	</nav>

				<div class="col-md-12 animate-box" align="center">
					
					<form action="PHP/registration_insert.php" align="center" method="POST">
                      <table width="40%" height="600px" >
						<div class="row form-group">
							<div class="col-md-12">
						    <div class="col-md-12">
								<tr>
								<h1>REGISTRATION!</h1>
								</tr>
								<tr>
								<td>Name:</td>
								<td><input type="text" id="name"  name="name" class="form-control" placeholder="Your Name here"></td>
							</tr>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Email:</td>
								<td><input type="email" id="email" name="email" class="form-control" placeholder="Your Email here"></td>
							</tr>
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Password:</td>
								<td><input type="password" id="pass" name="pass" class="form-control" placeholder="Your Password here"></td>
							</tr>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Contact:</td>
								<td><input type="number" id="Mobile" name="contact" class="form-control" placeholder="Your contact here"></td>
							</tr>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Register Date:</td>
								<td><input type="date" id="date" name="regdate" class="form-control" placeholder="registeration date"></td>
							</tr>
							</div>
						</div>
						

						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Address:</td>
								<td><textarea rows="3" cols="25" name="address">
									
								</textarea></td>
							</tr>
							</div>
						</div>
						
						<div class="form-group">
							<tr>
								<td>&nbsp;</td>
								<td><input type="submit" value="Register" name='submit' class="btn btn-primary"> &nbsp; &nbsp; &nbsp;  
						<input type="submit" value="Cancel"  name='submit' class="btn btn-primary"></td>

							</tr>

						</div>
                    </table>
					</form>		
				</div>
			</div>

			<?php
         include("commonpages/out_footer.php")
		?>

		
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	

	<script src="js/jquery.min.js"></script>
	
	<script src="js/jquery.easing.1.3.js"></script>
	
	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.waypoints.min.js"></script>

	<script src="js/jquery.stellar.min.js"></script>

	<script src="js/owl.carousel.min.js"></script>

	<script src="js/jquery.countTo.js"></script>

	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<script src="js/main.js"></script>

	</body>
</html>

