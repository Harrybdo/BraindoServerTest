<?php
/*
Template Name: Case Study
*/
get_header(); 

$page_header = CFS()->get('page_header');
$page_sub_header = CFS()->get('page_sub_header');

$paragraphs = CFS()->get('left_column_paragraph_loop');
$infographic_url = CFS()->get('infographic_url');


foreach($paragraphs as $paragraph){
	$paragraph_header = $paragraph['paragraph_header'];
	$paragraph_text = $paragraph['paragraph_text'];	
}
?>


<!-- Title row-->
<div class="row" id="title-row">
  	<div class="small-12 columns">
    	<div class="small-10 small-centered columns">
			<h1 class="page-title"><?php echo $page_header; ?></h1>
			<h2><?php echo $page_sub_header; ?></h2> 
    	</div>
		
		<hr>
  
  	</div>
</div><!--end title div-->  

<!-- main content -->
<div class="row">
  	<div class="small-12 columns">
    	<!-- LEFT COLUMN-->
    	<div class="small-12 medium-7 columns">
			<!-- subheader + description -->
			<div class="row">
				<div class="small-12 columns">
					<?php 
					foreach($paragraphs as $paragraph){
						$paragraph_header = $paragraph['paragraph_header'];
						$paragraph_text = $paragraph['paragraph_text'];	
					}?>
					<h4 class="page-subtitle"><?php echo $paragraph_header; ?></h4>
					<p class="service-description"><?php echo $paragraph_text; ?></p>
					
					<?php } ?>
        		</div>
      		</div><!-- end subheader+description -->


	        <!-- image in middle for small -->
	        <div class="row hide-for-medium-up">
	          <div class="small-12 columns">
	            <img src="http://placehold.it/600x200">
	          </div>
	        </div><!-- image for small -->
	        
	    </div><!-- enedleft column-->

	    <!-- RIGHT COLUMN -->
	    <div class="small-12 medium-5 columns hide-for-small">
	        <img src="http://placehold.it/500x600">    
	    </div><!-- end right column -->  
	</div>
</div><!-- end content -->

<div class="row" class="hr-row">
  	<hr>
</div>

<!-- curious above blocks for medium up -->
<div class="row hide-for-small">

</div><!-- end curius before blocks-->

<div class="row" class="hr-row">
  	<hr class="show-for-medium-up">
</div>

<!-- Blocks Areas Of Expertise row-->
<div class="row" id="row3">

</div><!--end row3 div-->


<?php get_footer('curious'); ?>