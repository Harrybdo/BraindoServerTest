<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/bower_components/html5shiv/dist/html5shiv.js"></script><![endif]-->
	<head>
		<meta charset="utf-8">
		<title><?php wp_title(''); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon.ico">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<?php wp_head(); ?>

		<!-- RESPOND.JS -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>		
		<!-- LATO FONT -->
		<link href='//fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<!-- JS FILE -->
		
		<script src="//use.typekit.net/asl7ops.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    
    <?php if (is_page(78)){ ?>    
    
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCzaHSg_cUeVkiumeGf9c2nAAlun3Idn5o&sensor=false"></script>
    
    <?php } ?>
    
	</head>

	<body <?php body_class(); ?>>
  	<script>
      // GTM Base Tag
      function _loadTagManager(dataLayerVar, id) {
        window[dataLayerVar] = window[dataLayerVar] || [];
        window[dataLayerVar].push({
          "gtm.start": new Date().getTime(),
          event: "gtm.js"
        });
        var gtmScript = document.createElement("script");
        gtmScript.async = true;
        gtmScript.src = "//www.googletagmanager.com/gtm.js?id=" + id + "&l=" + dataLayerVar;
        document.getElementsByTagName("head")[0].appendChild(gtmScript);
      }
      if (!window.coreDataLayer) _loadTagManager("coreDataLayer", "GTM-MWCND8");
    </script>