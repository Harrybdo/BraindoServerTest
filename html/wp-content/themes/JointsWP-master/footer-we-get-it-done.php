			<div class="row" class="hr-row">
				<div class="small-12 columns">
					<hr>
				</div>
			</div>
			
			<footer class="footer" role="contentinfo">
				<div class="show-for-small-only">
					<div class="row" id="footer-row">
						<div class="small-12 columns">
							<div class="small-8 small-centered columns">
								<span class="pre-footer-text text-center">We Get It. We Get It Done.</span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="small-12 columns">
							<div class="small-12 small-centered columns">
								<?php 
								$navlinks = CFS()->get('bottom_nav_loop_small',21);
								$navlinkslength = sizeof($navlinks);
								?>
				            	<ul class="text-center" class="small-bottom-nav-links">
							      	<?php 
							        foreach($navlinks as $link){
								        $linktext = $link['bottom_nav_link_text'];
								        $linkhref = $link['bottom_nav_link_href'];
							      	?>
								  		<li>
								  			<a href="<?php echo $linkhref; ?>"><?php echo $linktext; ?>&nbsp;</a>
								  			<?php
									  		if($link != $navlinks[$navlinkslength-1]){
									  			echo "|";
								  			}
								  			?>
								  		</li>
								  	<?php 
							        }
							      	?>
						    	</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="show-for-medium-up">
				    <div class="row" id="footer-row">
				    	<div class="medium-12 columns">
					    	    <div class="medium-8 columns end" id="footerLeft">
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
								
									<div class="row">
							    		<div class="medium-8 columns end">
								    		<p>2014 BrainDo Consulting</p>
							    		</div>
							    	</div>
					    		</div>
		
					    	
						    	<div class="medium-4 columns" id="footerRight">
									<span class="pre-footer-text text-center">We Get It. We Get It Done.</span>
								</div>
					    </div><!-- end large-12 wrapper -->
				    </div><!-- end row4 div-->
				</div>	
			</footer> <!-- end .footer -->
		<?php wp_footer(); ?>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/app.js"></script>
	</body>
</html> <!-- end page -->