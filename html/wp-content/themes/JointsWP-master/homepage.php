<?php
/*
Template Name: Homepage
*/
get_header();
$header = CFS()->get('page_header');
$sub_header = CFS()->get('page_sub_header');
$background_image = CFS()->get('background_image');

?>

<!-- FULL SCREEN BACKGROUND -->
<div class="background">
  <img src="<?php echo get_template_directory_uri(); ?>/library/images/<?php echo $background_image ?>" alt="Background Image">
</div>
<!-- END OF FULL SCREEN BACKGROUND -->

<div class="page-wrapper">
  
  <?php include 'partials/top-nav.php' ?>
  
  <!-- HEADERS ROW -->
  <div class="row">
  	<div class="small-12 columns">
    	<div class="small-10 small-centered columns">
  			<h1 class="page-title"><?php echo $header ?></h1>
  			<h2 class="page-title-subheader"><?php echo $sub_header ?></h2>
      </div>
  	</div>
  </div>
  <!-- END OF HEADERS ROW -->

<?php 
  
include 'partials/areas-of-expertise.php'; 
include 'partials/contact-cta.php';
  
?>  

</div>

<?php get_footer('homepage'); ?>