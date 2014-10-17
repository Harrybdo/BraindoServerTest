<?php
/*
Template Name: Specific Service
*/
get_header(); 
?>

<?php
$page_title = CFS()->get('page_title');
$page_subtitle = CFS()->get('page_subtitle');
$page_description = CFS()->get('page_description');
$page_image_url = CFS()->get('main_image_url');
$page_service_list = CFS()->get('services_list');
?>

<!-- Title row-->
<div class="row" id="title-row">
  <div class="small-12 columns">
    <div class="small-10 small-centered columns">
      <h1 class="page-title"><?echo $page_title; ?></h1>
    </div>
    <hr>
  </div>
</div><!--end title div-->  

<!-- main content -->
<div class="row">
  <div class="small-12 columns">
    <!-- subheader and description of service + Services list LEFT COLUMN-->
    <div class="small-12 medium-7 columns">
      <!-- subheader + description -->
      <div class="row">
        <div class="small-12 columns">
          <h4 class="page-subtitle"><?php echo $page_subtitle; ?></h4>
          <p class="service-description"><?php echo $page_description; ?></p>
        </div>
      </div><!-- end subheader+description -->


      <!-- image in middle for small -->
      <div class="row hide-for-medium-up">
        <div class="small-12 columns">
          <img src="http://placehold.it/600x200">
        </div>
      </div><!-- image for small -->


      <!-- services list -->
      <div class="row">
        <div class="small-12 columns">
          <h4><?php echo $page_title;?> Services</h4>
          <ul>
            <?php foreach($page_service_list as $li){?>
              <li><?php echo $li; ?></li>
            <?php }?>
          </ul>
        </div>
      </div><!-- end service list -->
    </div><!-- left column-->

    <!-- image -->
    <div class="small-12 medium-5 columns hide-for-small">
      <img src="http://placehold.it/500x600">    
    </div><!-- right column -->
  </div>
</div><!-- end main content rows -->

<div class="row" class="hr-row">
  <hr>
</div>

<!-- curious above blocks for medium up -->
<div class="row hide-for-small">
  <div class="medium-12 columns">
    <?php
      $curious_text = CFS()->get('curious_text',21);
      $contact_text = CFS()->get('curious_contact_text',21);
    ?>
    <div class="row" id="curious-row">
      <div class="large-12 columns show-for-medium-up">
        <span class="curious-text"><?php echo $curious_text; ?></span><span class="curious-contact-text"><?php echo $contact_text; ?></span>
      </div>
    </div>
  </div>
</div><!-- end curius before blocks-->

<div class="row" class="hr-row">
  <hr class="show-for-medium-up">
</div>

<!-- Blocks Areas Of Expertise row-->
<div class="row" id="row3">
  <div class="large-12 small-12 columns">
    <h4 class="expertise-block-title">Areas Of Expertise</h4>
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
</div><!--end row3 div-->


<?php get_footer('curious'); ?>