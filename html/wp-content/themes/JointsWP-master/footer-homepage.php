      <!-- FOOTER -->
			<footer class="footer" role="contentinfo">
		    <div class="row" id="footer-row">
			    <!-- MEDIUM AND UP FOOTER -->
		    	<div class="small-12 columns show-for-medium-up">
			    	<!-- FOOTER LEFT -->
            <div class="medium-6 columns" id="footerLeft">
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
								 		<a href="<?php echo $linkhref; ?>"><?php echo $linktext; ?></a>
								  </li>
							  <?php } ?>
							</ul>
				    </div>
				    <!-- END FOOTER LEFT -->
            <!-- FOOTER RIGHT -->
				    <div class="medium-6 columns" id="footerRight">
				    	<p>&copy; 2014 BrainDo Interactive Consulting<p>
				    </div>
				    <!-- END FOOTER RIGHT -->
			    </div>
			    <!-- END MEDIUM AND UP FOOTER -->	
			    <!-- SMALL FOOTER -->
			    <div class="show-for-small-only">
            <div class ="small-10 small-centered columns" id="footerSmall">
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
									<a href="<?php echo $linkhref; ?>"><?php echo $linktext; ?></a>
								</li>
							  <?php } ?>
						    </ul>
				    	</div>
			    	</div>
			    	<!-- END SMALL FOOTER -->
			    </div>
		    </div>   	
			</footer> 
			<!-- END FOOTER -->
		</div>
		<!-- END PAGE WRAPPER -->
		<?php wp_footer(); ?>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/app.js"></script>
	</body>
</html>