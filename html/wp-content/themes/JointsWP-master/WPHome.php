<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<!-- Main Header row-->
<div class="row" id="row2">
  <div class="large-12 columns">
    <?php do_action('foundationPress_before_content'); ?>
    <h1>Moving Beyond Buzzwords!</h1>
    <h5 class="subheader">Marketing Jargon Won't Grow Your Business</h5>
    <hr>
  </div>
</div><!--end row2 div-->

<p class="text-center">Areas Of Expertise</p>
  
<!-- Blocks Areas Of Expertise row-->
<div class="row" id="row3">
  <div class="large-12 small-12 columns">
   <ul class="large-block-grid-5 small-block-grid-1">
      <li>
        <div class="expertiseBlock">Strategy</div>
          <div class="expertiseBlockSlider">
                Strategy Stuff Here
          </div>
      </li>
      <li>
        <div class="expertiseBlock">Analytics</div>
        <div class="expertiseBlockSlider">
            Analytics Stuff Here
        </div>
      </li>
      <li>
        <div class="expertiseBlock">Search & Media</div>
        <div class="expertiseBlockSlider">
            Search & Media Stuff Here
        </div>
      </li>
      <li>
        <div class="expertiseBlock">Creative</div>
        <div class="expertiseBlockSlider">
            Creative Stuff Here
        </div>
      </li>
      <li>
        <div class="expertiseBlock">Web Development</div>
        <div class="expertiseBlockSlider">
            Web Development Stuff Here
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