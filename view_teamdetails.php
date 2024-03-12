<?php
session_start();
$id = $_SESSION['id'];
?>

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
	
     
     <style type="text/css">
     	
   .animate{
   	animation: animate 14s ease-in-out infinite;
   }
   @keyframes animate{
        0%,100%{
            background-image:url(images1/bg11.png);
        }
       25%{
   	       background-image:url(images1/bg12.jpg);
        }
      50%{
      	 background-image:url(images1/bg13.jpg);
       }
       75%{
       	background-image:url(images1/bg14.jpg);
       }

              }

       #font{

  	
    animation:fontText 1.5s infinite;
}

@keyframes fontText{
    0%,100%%{   color: red;    }
    25%{    color: transparent; }
    50%{    color: green; }
    75%{    color:red;  }
   
}       
     </style>


	</head>
	<body>
		
	
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">Call: +91 </p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="http://localhost/php/sport/code/admin/admin_login.html"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
	<?php include('./commonpages/loginheader.php');?>
	</nav>

	<div id="fh5co-services" class="fh5co-bg-section" style="height: 40px; padding: 4em;">
		<H1 align="center"><font color="black"><span id="font"><u>TEAM DETAILS</u></span></font></H1>
		
		</div>
     
      <div id="fh5co-blog" class="fh5co-bg-section" style="padding: 4em;">
		<div class="container">
			
			<div class="row row-bottom-padded-md">
 <?php
 
           require_once('./PHP/connection_db.php');
              $sql="SELECT team_id, team_name, team_captain, total_player, participate_player, extra_player FROM team_detail WHERE user_id='$id'";
               $query=mysqli_query($con,$sql);
              while($row=mysqli_fetch_array($query)){
              	
             ?>
                 
				<div class="col-lg-11 col-md-12">
					<div class="fh5co-blog animate-box">
						  
						<h1></h1>
						<h1></h1>
						<div class="blog-text" style="margin-top:-2em;">
							
							<h1 align="center"><a href=""><?=$row['team_name']?></a></h1>
				
							<span class="posted_on">Welcome To Sports Club</span>
							<hr>
							<center>
							<table width="90%" style="margin-left: -25px;">
						
					<tr>
                        <td><h4 align="left">Team Captian</h4></td>
                        <td><h4 align="left">Total Players</h4></td>
                        <td><h4 align="left">Participate Players</h4></td>
                        <td><h4 align="left">Extra Players</h4></td>
                        
                    </tr>
                    <tr>
                       <td><span><?=$row['team_captian']?></span></td>
                       <td><span><?=$row['total_player']?></span></td>
                       <td><span><?=$row['participate_player']?></span></td>
                       <td><span><?=$row['extra_player']?></span></td>
                    </tr>
                    
					</table>
				</center>
							<hr>
					
						</div> 
						
					</div>
				</div>
				
				<?php
                    }
			      ?>

			</div>
		</div>
	</div>

	</div>
	

	<?php
         include("commonpages/footer.php")
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

	<script src="js/main.js"></script>

	

	</body>
</html>

