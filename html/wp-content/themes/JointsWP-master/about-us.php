<?php
/*
Template Name: About Us
*/
get_header(); 
?>

<?php
$header = CFS()->get('page_header');
$sub_header = CFS()->get('page_sub_header');
$first_paragraph = CFS()->get('first_paragraph');
$paragraph_heading_1 = CFS()->get('paragraph_heading_1');
$paragraph_text_1 = CFS()->get('paragraph_text_1');
$paragraph_heading_2 = CFS()->get('paragraph_heading_2');
$paragraph_text_2 = CFS()->get('paragraph_text_2');
$block_heading = CFS()->get('block_heading');
$dog_block_heading = CFS()->get('dog_block_heading');
$employees = CFS()->get('employee_blocks');
$dogs = CFS()->get('dog_blocks');
?>

<!-- Title row-->
<div class="row" id="title-row">
  	<div class="small-12 columns">
    	<div class="small-10 small-centered columns">
		  	<h1 class="page-title"><?php echo $header; ?></h1>
      </div>
		</div>
</div><!--end title div-->  

<!-- main content -->
<div class="row">
	<div class="small-12 columns">
		<h2><?php echo $sub_header; ?></h2>
		<p><?php echo $first_paragraph; ?></p>
		<h3><?php echo $paragraph_heading_1; ?></h3>
		<p><?php echo $paragraph_text_1; ?></p>
		<h3><?php echo $paragraph_heading_2; ?></h3>
		<p><?php echo $paragraph_text_2; ?></p>
	</div>
</div>

<!-- BRAIN DUDES -->
<div class="row">
	<div class="small-12 columns">
		<h4><?php echo $block_heading; ?></h4>
		<ul class="small-block-grid-2 large-block-grid-5 medium-block-grid-3">
			<?php foreach($employees as $employee){
				$name = $employee['employee_name'];
				$title = $employee['employee_title'];
				$description = $employee['employee_description'];
				$imageURL = $employee['employee_image_url'];
			?>
			
				<li class="employee-block">
					<div class="nohover-state">
						<img src="http://www.placehold.it/175x175">
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
</div><!-- end BRAINDUDES row -->

<!-- BRAINDOGS row -->
<div class="row">
	<div class="small-12 columns">
		<h4><?php echo $dog_block_heading; ?></h4>
		<ul class="small-block-grid-2 large-block-grid-5 medium-block-grid-3">
			<?php 
			foreach($dogs as $dog){
				$name = $dog['dog_name'];
				$title = $dog['dog_title'];
				$imageURL = $dog['dog_image_url'];
			?>
			
				<li class="employee-block">
					<div class="nohover-state">
						<img src="http://www.placehold.it/175x175">
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