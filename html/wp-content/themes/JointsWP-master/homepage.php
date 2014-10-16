<?php
/*
Template Name: homepage
*/
get_header(); ?>

<!-- Title row-->
<div class="row" id="title-row">
  <div class="small-12 columns">
    <div class="small-10 small-centered columns">
      <?php do_action('foundationPress_before_content'); ?>
      <h1 class="page-title">Let's See What Our Brains Can Do.</h1>
      <h1 class="page-title-subheader">Mind Altering, Performance-enhancing Digital Solutions.</h1>
    </div>
    <hr>
  </div>
</div><!--end row2 div-->

<h4 class="expertise-block-title">Areas Of Expertise</h4>
  
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
          $expanded_description = $block['expanded_description'];
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
                      foreach($hover_list_items as $li){
                        $list_item_text = $li['list_item_text'];
                        //$list_item_href = $list_item['list_item_link'];
                      ?>
                        <li><?php echo $list_item_text; ?></li>
                      <?php 
                      } 
                      ?>
                    </ul>
                </div>
              </div>
            </div>
            <div class="show-for-small-only">
              <div class="expertiseBlockSlider">
                Stuff here
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

<!-- Pre-footer contact us -->
<?php
  $curious_text = CFS()->get('curious_text',21);
  $contact_text = CFS()->get('curious_contact_text',21);
?>
<div class="row" id="curious-row">
  <div class="large-12 columns show-for-medium-up">
    <span class="curious-text"><?php echo $curious_text; ?><span><span class="curious-contact-text">Contact</span>
  </div>
</div><!-- end row3 -->

<?php get_footer('homepage'); ?>