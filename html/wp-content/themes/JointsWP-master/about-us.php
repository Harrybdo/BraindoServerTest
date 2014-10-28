<?php
/*
Template Name: About Us
*/
get_header(); 
?>

<?php
$header_image = CFS()->get('background_image');  
$header_video = CFS()->get('background_video');

$header = CFS()->get('page_header');
$sub_header = CFS()->get('page_sub_header');
$first_paragraph = CFS()->get('first_paragraph');
$paragraph_header_1 = CFS()->get('paragraph_header_1');
$paragraph_text_1 = CFS()->get('paragraph_text_1');
$paragraph_header_2 = CFS()->get('paragraph_header_2');
$paragraph_text_2 = CFS()->get('paragraph_text_2');
$block_header = CFS()->get('block_header');
$dog_block_header = CFS()->get('dog_block_header');
$employee_block_header = CFS()->get('employee_block_header');
$employees = CFS()->get('employee_blocks');
$dogs = CFS()->get('dog_blocks');
?>

<!-- PAGE WRAPPER -->
<div class="page-wrapper header-background-page">

  <?php include 'partials/top-nav.php' ?>
  
  <!-- HEADER BACKGROUND -->
  <div class="header-bg">
    <video autoplay muted loop poster="<?php echo get_template_directory_uri(); ?>/library/images/headers/<?php echo $header_image; ?>" id="headerbgvid">
      <source src="<?php echo get_template_directory_uri(); ?>/library/images/headers/<?php echo $header_video; ?>" type="video/mp4">
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

<!-- main content -->
<div class="row">
	<div class="small-12 medium-10 medium-centered columns us-description">
		<p><?php echo $first_paragraph; ?></p>
		<h3><?php echo $paragraph_header_1; ?></h3>
		<p><?php echo $paragraph_text_1; ?></p>
		<h3><?php echo $paragraph_header_2; ?></h3>
		<p><?php echo $paragraph_text_2; ?></p>
	</div>
</div>

<!-- BRAIN DUDES TITLE-->
<div class="row">
	<div class="small-12 columns">
		<h3 class="expertise-block-title"><?php echo $block_header; ?></h3>
	</div>
</div>

<!-- BRAIN DUDES M-UP -->
<div class="show-for-medium-up">
		<?php 
	$employees_loaded = 0; 
	$total_employees = count($employees);
		
	for($employees_loaded = 0; $employees_loaded < $total_employees; $employees_loaded++){
		$name = $employees[$employees_loaded]['employee_name'];
		$title = $employees[$employees_loaded]['employee_title'];
		$description = $employees[$employees_loaded]['employee_description'];
		$hoverImageURL = $employees[$employees_loaded]['employee_hover_image_url'];
		$imageURL = $employees[$employees_loaded]['employee_image_url'];
		$selectedImageURL = $employees[$employees_loaded]['employee_selected_image_url'];

		if($employees_loaded%5 == 0){
		  $blocks_added = 0;
      $selectedImages = array();
		?>	
		<div class="row">
			<ul class="medium-block-grid-5">
<?php } ?>	
				<li class="employee-block" id="employee-block-<?php echo $employees_loaded; ?>">
					<div class="nohover-state">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/biopics/humans/<?php echo $imageURL; ?>">
					</div>
					<div class="show-for-medium-up">
						<div class="hover-state">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/biopics/humans/<?php echo $hoverImageURL; ?>">
							<span class="employee-block-text"><?php echo $name ?></span>
							<span class="employee-block-text"><?php echo $title ?></span>		
						</div>
					</div>
				</li>
	<?php
    $selectedImages[$blocks_added] = $selectedImageURL;
		$blocks_added++;
		if(($employees_loaded+1)%5 == 0){
	?>
			</ul>
		</div>
		
			<?php for($j = $blocks_added, $selected = 0; $j > 0; $j--, $selected++){
			?>
			<div class="row employee-slider" id="employee-slider-<?php echo (($employees_loaded+1)-$j); ?>">
				<div class="medium-12 columns">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/biopics/humans/<?php echo $selectedImages[$selected]; ?>">
				</div>
			</div>
	
		<?php 
			}
		}
	}
	if(($employees_loaded+1)%5 !== 0){
	?>
			</ul>
		</div>
		<?php for($k = $blocks_added, $selected = 0; $k > 0; $k--, $selected++){
		?>
			<div class="row employee-slider" id="employee-slider-<?php echo (($employees_loaded)-$k); ?>">
				<div class="medium-12 columns">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/biopics/humans/<?php echo $selectedImages[$selected]; ?>">
				</div>
			</div>
		<?php
			}
		}
		?>
</div><!-- end BRAIN DUDES M-UP -->

<!-- BRAIN DUDES SMALL -->
<div class="show-for-small-only">
	<?php 
	$employees_loaded = 0; 
	$total_employees = count($employees);
		
	for($employees_loaded = 0; $employees_loaded < $total_employees;){
		$name = $employees[$employees_loaded]['employee_name'];
		$title = $employees[$employees_loaded]['employee_title'];
		$description = $employees[$employees_loaded]['employee_description'];
		$imageURL = $employees[$employees_loaded]['employee_image_url'];
		
		
		if($employees_loaded%2 == 0){
		$blocks_added = 0;
		?>	
		<div class="row">
			<ul class="small-block-grid-2">
	<?php } ?>	
				<li class="employee-block" id="employee-block-<?php echo $employees_loaded; ?>">
					<div class="nohover-state">
						<img src="http://www.placehold.it/400x400">
						<span class="employee-block-text"><?php echo $name ?></span>
					</div>
				</li>
	<?php 
		$blocks_added++;
		$employees_loaded++;
		if(($employees_loaded)%2 == 0){
	?>
			</ul>
		</div>
		
			<?php for($j = $blocks_added; $j > 0; $j--){
			?>
			<div class="row employee-slider" id="employee-slider-<?php echo (($employees_loaded)-$j); ?>">
				<div class="small-12 columns">
					<img src="http://www.placehold.it/400x150">
				</div>
			</div>
	
		<?php 
			}
		}
	}
	if(($employees_loaded)%2 !== 0){
	?>
			</ul>
		<?php for($k = $blocks_added; $k > 0; $k--){
		?>
			<div class="row employee-slider" id="employee-slider-<?php echo (($employees_loaded)-$k); ?>">
				<div class="small-12 columns">
					<img src="http://www.placehold.it/400x150">
				</div>
			</div>
	<?php
		}
	}
	?>
</div><!-- end BRAIN DUDES SMALL -->



<!-- BRAINDOGS row -->
<div class="row">
	<div class="small-12 columns">
		<h4><?php echo $dog_block_header; ?></h4>
		<ul class="small-block-grid-2 medium-block-grid-5">
			<?php 
			foreach($dogs as $dog){
				$name = $dog['dog_name'];
				$title = $dog['dog_title'];
				$imageURL = $dog['dog_image_url'];
			?>
			
				<li class="employee-block">
					<div class="nohover-state">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/biopics/dogs/<?php echo $imageURL; ?>">
						<span class="employee-block-text"><?php echo $name ?></span>
					</div>
					<div class="show-for-medium-up">
						<div class="hover-state">
							<p class="employee-block-text"><?php echo $name?></p>
							<p class="employee-block-text"><?php echo $title?></p>
						</div>
					</div>
				</li>
				
			<?php 
			} 
			?>
		</ul>
	</div>
</div><!-- end BRAINDOGS row -->


<?php 
include 'partials/areas-of-expertise.php'; 
?>


<?php get_footer('curious'); ?>