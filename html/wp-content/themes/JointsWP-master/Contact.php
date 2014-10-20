<?php
/*
Template Name: contact
*/
get_header();
$page_title = CFS()->get('page_title');
$page_subtitle = CFS()->get('page_subtitle');
$form_heading = CFS()->get('form_heading');
$small_paragraph_header = CFS()->get('small_paragraph_header');
$small_paragraph_text = CFS()->get('small_paragraph_text');
$address = CFS()->get('address');
$social_buttons = CFS()->get('social_buttons');
$num_buttons = count($social_buttons);
?>


<div class="row" id="title-row">
  <div class="small-12 columns">
    <div class="small-10 small-centered columns">
      <h1 class="page-title"><?php echo $page_title; ?></h1>
    </div>
    <hr>
  </div>
</div><!--end title div--> 

<div class="row">
	<div class="small-12 columns">
		<h3><?php echo $page_subtitle; ?></h3>
	</div>
</div>

<div class="row">
	<div class="small-12 medium-6 columns">
		<h3><?php echo $form_heading; ?></h3>
		<form data-abide="ajax" id="contactUsForm" action="mailform.php" method="post" novalidate="novalidate">
			<div class="row">
				<div class="small-10 small-centered columns">
					<input type="text" name="name" id="name" placeholder="NAME" required="">
					<small class="error">Name is required.</small>
				</div>
			</div>
			<div class="row">
				<div class="small-10 small-centered columns">
					<input type="email" name="email" id="email" placeholder="EMAIL" required="">
					<small class="error">Email Address is required.</small>
				</div>
			</div>
			<div class="row">
				<div class="small-10 small-centered columns error">
					<textarea type="text" name="message" id="message" cols="5" rows="5" placeholder="MESSAGE" required="" data-invalid="" aria-invalid="true"></textarea>
					<small class="error">Message is required.</small>
					<button type="submit" value="Submit" class="submit">Submit</button>
				</div>
			</div>
		</form>
		<br>
		<h2><?php echo $small_paragraph_header; ?></h2>
		<p><?php echo $small_paragraph_text; ?></p>
	</div>
	
	<div class="show-for-small-only">
		<div class="row">
			<div class="small-12 columns">
				<hr>
			</div>
		</div>
	</div>
	
	<div class="small-12 medium-6 columns">
		<h3><?php echo $address; ?></h3>
		<img src="http://www.placehold.it/400x400">
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