
					
					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row clearfix">

						    <div class="row" id="footer-row">
						    	<div class="small-12 columns">
						    	    <div class="large-8 small-12 columns show-for-medium-up" id="footerLeft">
							        	<?php 
    										  $navlinks = CFS()->get('bottom_nav_loop_mup',21);
    										  $navlinkslength = sizeof($navlinks);
    										?>
                          <ul>
										      <?php 
										        foreach($navlinks as $link){
											        $linktext = $link['bottom_nav_link_text'];
											        $linkhref = $link['bottom_nav_link_href'];
										      ?>
											  		<li>
											  			<a href="<?php echo $linkhref; ?>"><?php echo $linktext; ?>&nbsp;</a>
											  		</li>
										      <?php 
										        }
										      ?>
										    </ul>
							    	</div>
							    	<div class="large-4 small-12 columns show-for-medium-up" id="footerRight">
							    		<p>&copy; 2014 BrainDo Interactive Consulting<p>
							    	</div>
							    	<div class ="small-12 columns show-for-small-only" id="footerSmall">
							    		<?php 
  										  $navlinks = CFS()->get('bottom_nav_loop_small',21);
  										  $navlinkslength = sizeof($navlinks);
  										?>
						            <ul class="text-center">
									      <?php 
									        foreach($navlinks as $link){
										        $linktext = $link['bottom_nav_link_text'];
										        $linkhref = $link['bottom_nav_link_href'];
									      ?>
										  		<li>
										  			<a href="<?php echo $linkhref; ?>"><?php echo $linktext; ?>&nbsp;</a>
										  		</li>
                        <?php 
									        }
									      ?>
									    </ul>
							    	</div><!-- end small-12 -->
							    </div><!-- end large-12 wrapper -->
						  </div><!-- end row4 div-->	
						</div> <!-- end #inner-footer -->			
					</footer> <!-- end .footer -->
				</div> <!-- end #container -->
			</div> <!-- end .inner-wrap -->
		</div>
		<?php wp_footer(); ?>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/app.js"></script>
	</body>
</html> <!-- end page -->