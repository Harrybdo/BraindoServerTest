			<!-- FOOTER -->
			<footer class="footer" role="contentinfo">
  			<!-- MEDIUM AND UP FOOTER -->
				<div class="show-for-medium-up">
				  <div class="row" id="footer-row">
				    <div class="small-12 columns">
  				    <!-- FOOTER LEFT -->
				    	<div class="medium-8 columns" id="footerLeft">
  				      <div class="row">
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
                <div class="medium-6 columns">
    					 	 	<p>&copy; 2014 BrainDo Interactive Consulting</p>
    					 	</div>
    				  </div>
					    <!-- END FOOTER LEFT -->
					    <!-- FOOTER RIGHT -->
					    <div class="medium-4 columns" id="footerRight">
								<span class="pre-footer-text text-center">We Get It. We Get It Done.</span>
							</div>
							<!-- END FOOTER RIGHT -->
					  </div>
				  </div>	
		    </div>
		    <!-- END MEDIUM AND UP FOOTER -->

				<!-- SMALL FOOTER -->
				<div class="show-for-small-only">
				  <?php
				  $curious_text = CFS()->get('curious_text',21);
          $contact_text = CFS()->get('curious_contact_text',21);
				  ?>
				  <div class="row" id="curious-row">
				    <div class="small-12 clearfix">
				     	<p class="curious-text"><?php echo $curious_text; ?></p>
				     	<span class="curious-contact-text"><?php echo $contact_text; ?></span>
				    </div>
				  </div>
				</div>
				<!-- END SMALL FOOTER -->
			</footer>
			<!-- END FOOTER -->
		</div>
		<!-- END PAGE WRAPPER -->
		<?php wp_footer(); ?>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/app.js"></script>
	</body>
</html>