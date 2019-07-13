
<?php
 include 'config/config.php'; 
 include 'lib/Database.php';
 include 'lib/Session.php';
 Session::init();
 include 'helpers/Formate.php';
 
 $db = new Database();
 $fm = new Formate();
 
?>

<!DOCTYPE html>
<html lang="en-US">



<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="xmlrpc.html">
	<title>Deshi Travels Management System</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="xmlrpc.html">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/font-linearicons.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/booking.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/swipebox.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="style.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/css/travel-setting.css" type="text/css" media="all">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>
<body class="single-product travel_tour-page travel_tour archive">
<div class="wrapper-container">
	<header id="masthead" class="site-header sticky_header affix-top">
		<div class="header_top_bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<aside id="text-15" class="widget_text">
							<div class="textwidget">
								<ul class="top_bar_info clearfix">
									<li><i class="fa fa-clock-o"></i> Mon - Sat 10.00 am - 06.00 pm. Sunday CLOSED</li>
								</ul>
							</div>
						</aside>
					</div>
					<div class="col-sm-8 topbar-right">
						<aside id="text-7" class="widget widget_text">
							<div class="textwidget">
								<ul class="top_bar_info clearfix">
									<li><i class="fa fa-phone"></i> 0123456789</li>
									<li class="hidden-info">
										<i class="fa fa-map-marker"></i> 1230, Dhaka, Bangladesh
									</li>
								</ul>
							</div>
						</aside>
						<?php
                            if (isset($_GET['action']) && $_GET['action'] == "usrlogout") {
                                Session::usrdestroy();
                            }
                        ?>
						<aside id="travel_login_register_from-2" class="widget widget_login_form">
							<?php 
								if (Session::get("cuslogin") == true) {
									?>
									<span class="show_from login"><i class="fa fa-user"></i><a href="userprofile.php">Profile</a></span>
									<span class="register_btn"><a href="?action=usrlogout">Log Out</a></span>
								<?php }else {
									
							 ?>
							<span class="show_from login"><i class="fa fa-user"></i><a href="login.php">Login</a></span>

							<span class="register_btn"><a href="sign-up.php">Register</a></span>
							<?php } ?>
							
							
						</aside>
					</div>
				</div>
			</div>
		</div>
		<div class="navigation-menu">
			<div class="container">
				<div class="menu-mobile-effect navbar-toggle button-collapse" data-activates="mobile-demo">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</div>
				<div class="width-logo sm-logo">
					<a href="#" title="Travel" rel="home">
						<img src="images/logo_sticky.png" alt="Logo" width="474" height="130" class="logo_transparent_static">
						<img src="images/logo_sticky.png" alt="Sticky logo" width="474" height="130" class="logo_sticky">
					</a>
				</div>
				<nav class="width-navigation">
					<ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">
						
						<li class="current-menu-ancestor current-menu-parent">
							<a href="index.php">Home</a>
							
						</li>
						<li><a href="package.php">Packages</a></li>

						<li><a href="daily-package.php">Daily Tour</a></li>
						<li><a href="custom-tour.php">Custom Tour</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="travel-guide.php">Travel Guide</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contact.php">Contuct Us</a></li>
						<li class="menu-right">
							<ul>
								<li id="travel_social_widget-2" class="widget travel_search">
									<div class="search-toggler-unit">
										<div class="search-toggler">
											<i class="fa fa-search"></i>
										</div>
									</div>
									<div class="search-menu search-overlay search-hidden">
										<div class="closeicon"></div>
										<form method="get" class="search-form" action="search.php">
											<input type="search" class="search-field" placeholder="Search ..." value="" name="search" title="Search for:">
											<input type="submit" class="search-submit font-awesome" value="&#xf002;" name="submit">
										</form>
										<div class="background-overlay"></div>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>