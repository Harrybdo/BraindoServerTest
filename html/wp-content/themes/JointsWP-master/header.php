<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">
				<div id="container">

					 <!-- Logo+Nav Row-->
				    <div class="row" id="row1">
				      <div class = "small-4 large-4 columns">
				        <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/BrainDo_logo_full.png" alt="logo" id="topLogo"></a>
				      </div><!-- end small-4 -->

				      <div class="small-8 large-8 columns">
				        <div class="show-for-medium-up">
				          <nav class="top-bar" data-topbar role="navigation">
				            <!--Title Area-->
				            <ul class="title-area">
				            </ul><!-- end leftNav -->
				            <!-- Right Nav Section -->
				            <ul class="right text-centered">
				              <li><a href="#">Services</a></li>
				              <li><a href="#">Work</a></li>
				              <li><a href="#">About Us</a></li>
				              <li><a href="#">Blog</a></li>
				              <li><a href="#">Contact Us</a></li>
				            </ul>
				          </nav><!-- end topNav -->
				        </div><!-- MEDIUM-UP NAV -->

				        <div class="show-for-small-only">
				          <nav class="top-bar" data-topbar role="navigation">             
				            <ul class="right">
				              <li><a href="#" data-reveal-id="navModal" id="enableModal">Menu</a></li>
				            </ul>
				          </nav>
				        
				          <div id="navModal" class="reveal-modal full-screen" data-reveal>
				            <p style="font-color:white;">MODAL STUFFZ IN HERE</p>
				            <div class="row" id="modal">
				              <div class="small-12 columns">
				              <p>Services box can go here</p>
				              </div><!-- end small 12 -->
				            </div>
				            <hr>
				            <div class="row" id="modal2">
				              <p>Social Links here?</p>
				            </div>
				            <a class="close-reveal-modal">&#215;</a>
				          </div><!-- INSIDE MODAL -->

				        </div><!-- SMALL ONLY NAV -->   
				      </div><!-- end small-8 -->
				    </div><!-- end row1 div -->