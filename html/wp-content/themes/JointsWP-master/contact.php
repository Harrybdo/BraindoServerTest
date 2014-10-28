<?php
/*
Template Name: Contact Us
*/
get_header();
$header = CFS()->get('page_header');
$sub_header = CFS()->get('page_sub_header');
$form_header = CFS()->get('form_header');
$join_the_team_header = CFS()->get('join_the_team_header');
$join_the_team_content = CFS()->get('join_the_team_content');
$address = CFS()->get('address');
$social_buttons = CFS()->get('social_buttons');
$num_buttons = count($social_buttons);
$background_image = CFS()->get('background_image');
$background_video = CFS()->get('background_video');
?>


<!-- PAGE WRAPPER -->
<div class="page-wrapper header-background-page">

  <?php include 'partials/top-nav.php' ?>
  
  <!-- HEADER BACKGROUND -->
  <div class="header-bg">
    <video autoplay loop poster="<?php echo get_template_directory_uri(); ?>/library/images/headers/cs-social-header.jpg" id="headerbgvid">
      <source src="<?php echo get_template_directory_uri(); ?>/library/images/headers/cs-social-video.mp4" type="video/mp4">
    </video>
  </div>
  <!-- END HEADER BACKGROUND -->
  
  <!-- HEADERS ROW -->
  <div class="row">
  	<div class="small-12 columns">
    	<div class="small-12 small-centered columns">
  			<h1 class="page-title"><?php echo $header ?></h1>
        <h2 class="page-title-subheader"><?php echo $sub_header ?></h2>
      </div>
  	</div>
  </div>
  <!-- END OF HEADERS ROW -->
  
  <!-- CONTACT US PAGE CONTENTS -->
  <div class="row contact-us">
  	<div class="small-12 medium-5 medium-offset-1 columns">
  		<span class="form-header"><?php echo $form_header; ?></span>
  		<!-- CONTACT US FORM -->
  		<form data-abide="ajax" id="contactUsForm" action="mailform.php" method="post">
				<div class="row">
					<div class="small-10 small-centered columns left">
						<input type="text" name="name" id="name" placeholder="NAME" required />
						<small class="error">Name is required.</small>
					</div>
				</div>
				<div class="row">
					<div class="small-10 small-centered columns left">
						<input type="email" name="email" id="email" placeholder="EMAIL" required />
						<small class="error">Email Address is required.</small>
					</div>
				</div>
				<div class="row">
					<div class="small-10 small-centered columns left">
						<textarea type="text" name="message" id="message" cols="5" rows="5" placeholder="MESSAGE" required></textarea>
						<small class="error">Message is required.</small>
						<button type="submit" value="Submit" class="contact-cta-button">Submit</button>
					</div>
				</div>
			</form>
			<!-- END CONTACT US FORM -->
			
			<!-- JOIN THE TEAM -->
      <div class="join-the-team">
    		<h3><?php echo $join_the_team_header; ?></h3>
        <p><?php echo $join_the_team_content; ?></p>
      </div>
  		<!-- END JOIN THE TEAM -->
  	</div>
  	
  	
  	<div class="small-12 medium-5 columns address">
  		<span><?php echo $address; ?></span>
  		<div id="googleMap"></div>
  	</div>
  </div>
  
  <div class="show-for-small-only">
  	<div class="row">
  		<ul class="small-block-grid-<?php echo $num_buttons; ?> small-centered" id="contact-social-list">
  		<?php foreach($social_buttons as $social_button){
  			$image = $social_button['button_image'];
  			$href = $social_button['button_href'];
  		?>
  		<li><img src="<?php echo $image; ?>" href="<?php echo $href; ?>"></li>
  		<?php } ?>	
  			
  		</ul>
  	</div>
  </div>

<?php get_footer('we-get-it-done'); ?>