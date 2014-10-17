<?php
/*
Template Name: Services
*/
get_header(); ?>

<!-- Title row-->
<div class="row" id="title-row">
  <div class="small-12 columns">
    <div class="small-10 small-centered columns">
      <h1 class="page-title">Digital Know-How</h1>
      <h1 class="page-title-subheader">We offer our Clients a suite of services to help bring their business ot the next level.</h1>
    </div>
    <hr>
  </div>
</div><!--end title div-->  


<!-- Blocks Areas Of Expertise row-->
<div class="row" id="row3">
  <div class="large-12 small-12 columns">

  <?php 
    $blocks = CFS()->get('expertise_block_loop',21);
    $blocklength = sizeof($blocks);
    $i = 0;
  ?>
   <ul class="large-block-grid-<?php echo $blocklength; ?> small-block-grid-1" id="expertiseBlockUL">
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
  </div><!-- end large-12 -->
  <hr class="show-for-medium-up">
</div><!--end row3 div-->

<div class="show-for-medium-up">
  <div class="row" id="expertise-expanded">
    <div class="medium-12 columns">
      <!-- php logic for tab -->
      <?php 
        $blocks = CFS()->get('expertise_block_loop',21);
        $block = $blocks[1]; //NEED TO CHANGE BASED ON TAB
        $no_hover_text = $block['no_hover_text'];
        $expanded_description = $block['expanded_description'];
        $block_list_items = $block['hover_list_items'];
      ?>
      <div class="medium-6 columns">
        <p class="extended-deescription-title"><?php echo $no_hover_text; ?></p>
        <p class="extended-description"><?php echo $expanded_description; ?></p>
      </div><!-- end first 6-->
      <div class="medium-6 columns">
        <ul class="extended-list-items">
          <?php
          foreach($block_list_items as $li){
            $list_item_text = $li['list_item_text'];
            $list_item_href = $li['list_item_link'];

            if(strlen($list_item_href) == 0){
            ?>
              <li><?php echo $list_item_text; ?></li>
      <?php }else{ ?>
              <li><a href="<?php echo $list_item_href; ?>"><?php echo $list_item_text; ?></a></li>
      <?php } 
          }?>
        </ul>
      </div><!-- end second 6-->
    </div><!-- end medium-12-->
  </div><!-- end expertise-expanded row-->
</div><!-- end medium up -->

<?php get_footer('we-get-it-done'); ?>