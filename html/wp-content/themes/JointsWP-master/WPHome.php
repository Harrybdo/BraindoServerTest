<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<!-- Main Header row-->
<div class="row" id="row2">
  <div class="large-12 columns">
    <?php do_action('foundationPress_before_content'); ?>
    <h1 class="page-title"><?php the_field('cf_headline'); ?></h1>
    <h4 class="page-title-subheader">Mind Altering, Performance-enhancing Digital Solutions.</h4>
    <hr>
  </div>
</div><!--end row2 div-->

<h4 class="expertise-block-title">Areas Of Expertise</h4>
  
<!-- Blocks Areas Of Expertise row-->
<div class="row" id="row3">
  <div class="large-12 small-12 columns">
   <ul class="large-block-grid-5 small-block-grid-1">
      <li>
        <div class="expertiseBlock red">Strategy</div>
          <div class="expertiseBlockSlider">
                Strategy Stuff Here
          </div>
      </li>
      <li>
        <div class="expertiseBlock yellow">Analytics</div>
        <div class="expertiseBlockSlider">
            Analytics Stuff Here
        </div>
      </li>
      <li>
        <div class="expertiseBlock teal">Development</div>
        <div class="expertiseBlockSlider">
            Web Development Stuff Here
        </div>
      </li>
      <li>
        <div class="expertiseBlock green">Search/Media</div>
        <div class="expertiseBlockSlider">
            Search & Media Stuff Here
        </div>
      </li>
      <li>
        <div class="expertiseBlock cyan">Creative</div>
        <div class="expertiseBlockSlider">
            Creative Stuff Here
        </div>
      </li>
    </ul>

    <div id="blockModals" class="reveal-modal" data-reveal>
        <p style="font-color:white;">Block MODAL STUFFZ IN HERE</p>
        <div class="row" id="modal1">
          <div class="small-12 columns">
          <p>Services box can go here</p>
          </div><!-- end small 12 -->
        </div>
        <hr>
        <div class="row" id="modal2">
          <p>Social Links here?</p>
        </div>
        <a class="close-reveal-modal">&#215;</a>
      </div><!-- INSIDE MODAL -->
  </div><!-- end large-12 -->
  <hr>
  <!--<?php get_sidebar(); ?>-->
</div><!--end row3 div-->
<?php get_footer(); ?>