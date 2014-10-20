<<<<<<< HEAD
<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/bower_components/html5shiv/dist/html5shiv.js"></script><![endif]-->
<?php	
$navlinks = CFS()->get('top_nav_loop',21);
$navlinkslength = count($navlinks);
$social_buttons = CFS()->get('social_buttons',21);
$num_buttons = count($social_buttons);
?>
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

		<!-- RESPOND.JS -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>		
		<!-- LATO FONT -->
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	</head>

	<body <?php body_class(); ?>>
		<!-- Logo+Nav Row-->
	    <div class="row" id="row1">
	      	<div class="small-12 columns">
	        	<div class="show-for-medium-up">
	          		<nav class="top-bar" data-topbar role="navigation">
		          		<ul class="title-area">
		          			<img src="<?php echo get_template_directory_uri(); ?>/library/images/ColoredLogo.png">
		          		</ul>
		            	<ul class="right text-center">
					      	<?php 
					        foreach($navlinks as $link){
						        $linktext = $link['nav_link_text'];
						        $linkhref = $link['nav_link_href'];
					      	?>
						  		<li>
						  			<a href="<?php echo $linkhref; ?>"><?php echo $linktext; ?>&nbsp;</a>
						  		</li>
						  	<?php }?>
					    </ul>
	            	</nav><!-- end topNav -->
	        	</div><!-- MEDIUM-UP NAV -->

		        <div class="show-for-small-only">
		          	<nav class="top-bar" data-topbar role="navigation">
		          		<ul class="title-area">
		          			<img src="<?php echo get_template_directory_uri(); ?>/library/images/ColoredLogo.png">
		            	</ul><!-- end Title Area -->             
						<ul class="right">
							<a data-reveal-id="navModal">Menu</a>
		            	</ul>
		          	</nav>
		        
			        <div id="navModal" class="reveal-modal full-screen" data-reveal>
			          	<div class="row">
			          		<div class="small-12 columns">
			          			<img src="<?php echo get_template_directory_uri(); ?>/library/images/ColoredLogo.png" id="navModalLogo">
			          		</div>
			          	</div>
			          	<div class="row">
				          	<div class="small=12 columns">
					        	<hr>
				          	</div>
			          	</div>
			          	
			            <div class="row" id="modal1">
			                <div class="small-12 columns">
			              	 <?php 
							   
							  ?>
				            	<ul class="navModalList">
							        <?php 
							        foreach($navlinks as $link){
								        $linktext = $link['nav_link_text'];
								        $linkhref = $link['nav_link_href'];
							        ?>
								  		<li>
								  			<a href="<?php echo $linkhref; ?>"><?php echo $linktext; ?>&nbsp;</a>
								  		</li>
							        <?php 
							        }
							        ?>
							    </ul>
			                </div><!-- end small 12 -->
			            </div>
			            <div class="row">
				          	<div class="small=12 columns">
					        	<hr>
				          	</div>
			          	</div>
			          	
			            <div class="row" id="modal2">
			                <div class="row">
				          		<div class="small=12 columns">
					        		<ul class="small-block-grid-<?php echo $num_buttons; ?> small-centered" class="contact-social-list">
										<?php foreach($social_buttons as $social_button){
											$image = $social_button['social_image'];
											$href = $social_button['social_href'];
										?>
										<li><img src="<?php echo $image; ?>" href="<?php echo $href; ?>"></li>
										<?php } ?>	
									</ul>
				          		</div>
			          		</div>
			            </div>
			            <a class="close-reveal-modal">&#215;</a>
			        </div><!-- INSIDE MODAL --> 
		        </div><!-- SMALL ONLY NAV -->  
	      	</div><!-- end small/large 12 -->
	    </div><!-- end row1 div -->
=======
<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(): ?>/bower_components/html5shiv/dist/html5shiv.js"></script><![endif]-->

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
		<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

	<div class="off-canvas-wrap" data-offcanvas>
		<div class="inner-wrap">
			<div id="container">

				<header class="header" role="banner">

					<div id="inner-header" class="row">
						<div class="large-12 columns">
							<h1>
								<a href="<?php echo home_url(); ?>" rel="nofollow">
									<?php bloginfo('name'); ?>
								</a>
								<small>
									<?php  bloginfo('description'); ?>
								</small>
							</h1>
						</div>

						 <?php get_template_part( 'partials/nav', 'offcanvas' ); ?>

						 <?php // get_template_part( 'partials/nav', 'topbar' ); ?>

						 <?php // get_template_part( 'partials/nav', 'offcanvas-sidebar' ); ?>

						<!-- You only need to use one of the above navigations.
							 Offcanvas-sidebar adds a sidebar to a "right" offcanavas menus. -->

					</div> <!-- end #inner-header -->

				</header> <!-- end header -->
>>>>>>> aba7fc81efa26367aeb5d396370cf47d98baa6e4
