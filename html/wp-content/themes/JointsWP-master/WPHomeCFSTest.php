<?php
/*
Template Name: WPHomeCFSTest
*/
get_header(); ?>

<!-- Title row-->
<div class="row" id="title-row">
  <div class="small-12 columns">
    <div class="small-10e small-centered columns">
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
          $hover_list_items = $block['hover_list_item'];
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
                      $list_items = explode("|",$hover_list_items);
                      foreach($list_items as $list_item){
                      ?>
                        <li><?php echo $list_item ?></li>
                      <?php } ?>
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
  $prefootertext = CFS()->get('prefooter_text',21);
  $prefooterimageurl = CFS()->get('prefooter_imageurl',21);
?>
<div class="row" id="prefooter-row">
  <div class="large-12 columns show-for-medium-up">
    <span class="prefooter-text"><?php echo $prefootertext; ?><span><img src="<php echo $prefooterimageurl; ?>">
  </div>
</div><!-- end row3 -->

<?php get_footer('homepage'); ?>