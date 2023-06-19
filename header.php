<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    

<head>
        <!-- Meta tag -->
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name='copyright' content='codeglim'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
		
		<!-- Title Tag -->
        <title>medical </title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="../../../www.codeglim.com/templates/bizman/images/favicon.html">	
		
        <!-- Google Font & Google Map -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700" rel="stylesheet"> 
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM" type="text/javascript"></script>	
		
		<!-- Hover CSS -->
        <link rel="stylesheet" href="css/hover.css">
		
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		
		<!-- Slick Nav CSS -->
        <link rel="stylesheet" href="css/slicknav.min.css">
		
		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="css/owl.theme.default.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
		
		<!-- Magnific Popup CSS -->
		<link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		
		<!-- Bootstrap Css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- bizman Style CSS -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/default.css">	
        <link rel="stylesheet" href="css/responsive.css">	
		
		<!-- bizman Colors -->
		<!-- Use another color Just remove bottom of the comment tag -->
		<link rel="stylesheet" href="css/skin/green.css">
		<!--<link rel="stylesheet" href="css/skin/blaze.css">-->
		<!--<link rel="stylesheet" href="css/skin/blue.css">-->
		<!--<link rel="stylesheet" href="css/skin/blue2.css">-->
		<!--<link rel="stylesheet" href="css/skin/red.css">-->
		<!--<link rel="stylesheet" href="css/skin/purple.css">-->
		<!--<link rel="stylesheet" href="css/skin/pink.css">-->
		<!--<link rel="stylesheet" href="css/skin/orange.css">-->
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Preloader -->
		<div class="loader">
			
		</div>
		<!-- End Preloader -->
		
		<!-- Start Header -->
		<header id="header">
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-sm-12 col-xs-12">
							<!-- Logo -->
							<div class="logo">
								<a href="index-2.html"><span>M</span>edical</a>
							</div>
							<!--/ End Logo -->
						</div>
						<div class="col-md-10 col-sm-12 col-xs-12">
							<div class="nav-area">
								<!-- Main Menu -->
								<nav class="mainmenu">
									<div class="mobile-nav"></div>
									<div class="collapse navbar-collapse">
                                    <?php
                                    $current_path = $_SERVER['REQUEST_URI'];
                                    //echo $current_path;
                                    ?>
										<ul class="nav navbar-nav">
                                    <?php
                                        if($_SESSION['user']=='admin')
                                        {
							        ?>
											<li class="<?php echo $current_path === '/medical/index.php' ? 'active' : '' ?>"><a href="index.php">Home</a></li>
											<li class="<?php echo $current_path === '/medical/login.php' ? 'active' : '' ?>"><a href="#about-us" >Admin</a></li>
											
											
											<li><a href="logout.php">Logout</a></li>	
                                    <?php
                                        }
                                        elseif($_SESSION['user']=='user')
                                        {
							        ?>
                                            <li class="<?php echo $current_path === '/medical/index1.php' ? 'active' : '' ?>"><a href="index1.php">Home</a></li>
											<li class="<?php echo $current_path === '/medical/viewdoctor.php' ? 'active' : '' ?>"><a href="viewdoctor.php" >view doctors</a></li>
											<li class="<?php echo $current_path === '/medical/prediction.php' ? 'active' : '' ?>"><a href="prediction.php" >Prediction</a></li>
											<li class="<?php echo $current_path === '/medical/prediction.php' ? 'active' : '' ?>"><a href="view_result.php" >View Result</a></li>
											
                                            <li><a href="logout.php">Logout</a></li>	
                                    <?php
							            }
							                elseif($_SESSION['user']=='doctor')
							            {
							        ?>
                                            <li class="<?php echo $current_path === '/medical/index.php' ? 'active' : '' ?>"><a href="index.php">Home</a></li>
											<li class="<?php echo $current_path === '/medical/viewdoctor.php' ? 'active' : '' ?>"><a href="doctor_profile.php" >Doctor</a></li>
											<li class="<?php echo $current_path === '/medical/viewdoctor.php' ? 'active' : '' ?>"><a href="view_result1.php" >Results</a></li>
											<li class="<?php echo $current_path === '/medical/viewdoctor.php' ? 'active' : '' ?>"><a href="chat2.php" >Chat</a></li>
											
											<li><a href="logout.php">Logout</a></li>	
                                            
                                    <?php
							            }
							            else{
							        ?>

                                            <li class="<?php echo $current_path === '/medical/index.php' ? 'active' : '' ?>"><a href="index.php">Home</a></li>
											<li><a href="#about-us" >About</a></li>
											
											<li  class="<?php echo $current_path === '/medical/u_register.php' ? 'active' : '' ?>"><a href="u_register.php">Register</a>
												<ul class="sub-menu">
													<li ><a href="u_register.php"><i class="fa fa-angle-double-right"></i>User</a></li>
													<!--li><a href="d_register.php"><i class="fa fa-angle-double-right"></i>Doctor</a></li-->
												</ul>
											</li>		
											<li class="<?php echo $current_path === '/medical/login.php' ? 'active' : '' ?>"><a href="login.php">Login</a></li>	
                                    <?php
							            }
						        	?>


										</ul>
									</div>
								</nav>
								<!--/ End Main Menu -->
								<!-- Search Form -->
								<ul class="search">
									<li><a href="#header"><i class="fa fa-search"></i></a></li>
								</ul>	
								<div class="search-form">
									<form class="form" action="#">
										<i class="fa fa-remove"></i>
										<input type="search" placeholder="search here"/>
										<button type="submit" value="send"><i class="fa fa-search"></i></button>
									</form>
								</div>
								<!--/ End Search Form -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!--/ End Header -->