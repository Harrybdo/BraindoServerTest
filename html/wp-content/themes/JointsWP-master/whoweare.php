<?php
/*
Template Name: whoweare
*/
get_header(); 
?>

<?php
$page_title = CFS()->get('page_title');
$page_subtitle = CFS()->get('page_subtitle');
$first_paragraph = CFS()->get('first_paragraph');
$paragraph_heading_1 = CFS()->get('paragraph_heading_1');
$paragraph_text_1 = CFS()->get('paragraph_text_1');
$paragraph_heading_2 = CFS()->get('paragraph_heading_2');
$paragraph_text_2 = CFS()->get('paragraph_text_2');
$block_heading = CFS()->get('block_heading');
$dog_block_heading = CFS()->get('dog_block_heading');
$employees = CFS()->get('employee_blocks');
$dogs = CFS()->get('dog_blocks');
$blocks = CFS()->get('expertise_block_loop',21);
$blocklength = sizeof($blocks);
$i = 0;
?>

<!-- Title row-->
<div class="row" id="title-row">
  	<div class="small-12 columns">
    	<div class="small-10 small-centered columns">
			<h1 class="page-title"><?php echo $page_title; ?></h1>
    	</div>
    	
		<hr>
		
  	</div>
</div><!--end title div-->  

<!-- main content -->
<div class="row">
	<div class="small-12 columns">
		<h2><?php echo $page_subtitle; ?></h2>
		<p><?php echo $first_paragraph; ?></p>
		<h3><?php echo $paragraph_heading_1; ?></h3>
		<p><?php echo $paragraph_text_1; ?></p>
		<h3><?php echo $paragraph_heading_2; ?></h3>
		<p><?php echo $paragraph_text_2; ?></p>
	</div>
</div>

<div class="row">
	<div class="small-12 columns">
		<hr>
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

<div class="row">
	<div class="small-12 columns">
		<hr>
	</div>
</div>

<!-- expertise blocks for med-up -->
<div class="row" id="row3">
  	<div class="small-12 columns">
	    <h4 class="expertise-block-title">Areas Of Expertise</h4>
	    <ul class="large-block-grid-<?php echo $blocklength; ?> medium-block-grid-3 small-block-grid-1" id="expertiseBlockUL">
	        <?php 
	        foreach($blocks as $block){
	            $no_hover_text = $block['no_hover_text'];
	            $no_hover_image_url = $block['no_hover_image_url'];
	            $hover_list_items = $block['hover_list_items'];
	        ?>
	            <li>
	              <div class="expertiseBlock" id="expertiseBlock<?php echo $i; ?>">
	                <div class="nohover-state">
	                  <img src="<?php echo $no_hover_image_url; ?>">
	                  <?php echo $no_hover_text; ?>
	                </div>
	                <div class="show-for-medium-up">
	                  <div class="hover-state">
	                      <ul>
	                        <?php
	                        foreach($hover_list_items as $list_item){
	                          $list_item_text = $list_item['list_item_text']
	                        ?>
	                          <li><?php echo $list_item_text ?></li>
	                        <?php } ?>
	                      </ul>
	                  </div>
	                </div>
	              </div>
	            </li>
	
	        <?php 
	        $i++;
	        }
	        ?>
	    </ul>
  	</div><!-- end-12 -->
</div><!--end expertise blocks row-->


<?php get_footer('curious'); ?>