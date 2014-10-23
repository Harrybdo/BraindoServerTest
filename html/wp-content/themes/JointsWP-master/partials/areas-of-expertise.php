<?php

$expertise_header = CFS()->get('expertise_header',21); 
$blocks = CFS()->get('expertise_block_loop',21);
$blocklength = count($blocks);
$i = 0;

?>

<!-- AREAS OF EXPERTISE -->
<div class="row">
	<div class="small-12 columns areas-of-expertise">
		<h3 class="expertise-block-title"><?php echo $expertise_header; ?></h3>
 		<ul class="large-block-grid-<?php echo $blocklength; ?> medium-block-grid-3 small-block-grid-1">
      <?php
        foreach($blocks as $block){
          $no_hover_text = $block['no_hover_text'];
  	      $no_hover_image_url = $block['no_hover_image_url'];
  	      $expanded_description = $block['expanded_description'];
  	      $hover_list_items = $block['hover_list_items'];
  	      $href = $block['href'];
  	  ?>
      <li>
      	<a href="<?php echo $href;?>">
		      <div class="expertiseBlock" id="expertiseBlock<?php echo $i; ?>">
		        <div class="nohover-state">
		          <img src="<?php echo $no_hover_image_url; ?>">
              <span class="nohover-text"><?php echo $no_hover_text; ?></span>
		        </div>
		        <div class="show-for-medium-up hover-state">
	            <ul>
                <?php
                  foreach($hover_list_items as $li){
		                $list_item_text = $li['list_item_text'];
		                //$list_item_href = $list_item['list_item_link'];
		            ?>
                  <li><?php echo $list_item_text; ?></li>
		            <?php } ?>
	            </ul>
		        </div>
		      </div>
        </a>
      </li>
     <?php $i++; } ?>
  	</ul>
  </div>
</div>
<!-- END AREAS OF EXPERTISE -->