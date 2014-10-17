					<hr>
					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row clearfix">
							<div class="row">
								
							</div>

						    <div class="row" id="footer-row">
						    	<div class="small-12 columns">
						    	    <div class="small-12 medium-8 columns show-for-medium-up" id="footerLeft">
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
							    	<div class="small-12 medium-4 columns" id="footerRight">
										<span class="pre-footer-text text-center">We Get It. We Get It Done.</span>
									</div>
							    </div><!-- end large-12 wrapper -->
						  </div><!-- end row4 div-->	
						</div> <!-- end #inner-footer -->			
					</footer> <!-- end .footer -->

				</div> <!-- end #container -->
			</div> <!-- end .inner-wrap -->
		<?php wp_footer(); ?>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/min/app-min.js"></script>
	</body>
</html> <!-- end page -->