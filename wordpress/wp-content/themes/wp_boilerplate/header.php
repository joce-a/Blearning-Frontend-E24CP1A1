<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

	<title>Singolo</title>

	<!-- Meta -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />
	<meta name="robots" content="index, follow" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="copyright" content="" />

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="" />

	<!-- CSS
	<link href="main.css" rel="stylesheet" type="text/css" />
	<link href="css/nivo-slider.css" rel="stylesheet" type="text/css" />
	<link href="css/nivotheme.css" rel="stylesheet" type="text/css" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />-->


	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css' />

	<!-- JS
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript" src="js/jquery.quicksand.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	[if lte IE 7]><script src="lte-ie7.js"></script><![endif]-->

	<!--[if IE 9]>
		<link rel="stylesheet" type="text/css" href="css/ie9.css">
	<![endif]-->
		<?php get_template_part('_includes/iOS', 'icons') ?>
		<?php wp_head() ?>
</head>

<body>
	<!-- Header
		============================= -->
	<div id="header">
        <div class="inner">
        
            <!-- Logo -->
            <h1 class="logo left"><a href="home.html">Singolo</a></h1><!-- .logo-->
            
            <!-- Nav Menu -->
            <ul class="nav-menu right">
                <li class="current"><a href="#home">home</a></li>
                <li><a href="#services">services</a></li>
                <li><a href="#portfolio">portfolio</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#contact">contact</a></li>
            </ul><!-- .nav-menu-->
        
        </div><!-- .inner -->
	</div><!-- #header -->
	<!-- End Header -->

<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header-menu' ) ); ?>
<?php } ?>