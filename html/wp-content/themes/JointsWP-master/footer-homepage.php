
			<footer class="footer" role="contentinfo">
			    <div class="row" id="footer-row">
			    	<hr>
			    	<div class="small-12 columns">
				    	<div class="show-for-medium-up">
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
									  		<a href="<?php echo $linkhref; ?>"><?php echo $linktext; ?>&nbsp;</a>
									    </li>
								    <?php 
								    }
								    ?>
								</ul>
					    	</div><!-- end footer left -->
					    	
					    	<div class="medium-6 columns" id="footerRight">
					    		<p>2014 BrainDo Interactive Consulting<p>
					    	</div>
				    	</div>
				    	
				    	<div class="show-for-small-only">
					    	<div class ="small-12 columns" id="footerSmall">
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
				    	</div>
				    </div><!-- end small-12 wrapper -->
			    </div><!-- end footer row-->   	
			</footer> <!-- end .footer -->
		<?php wp_footer(); ?>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/min/app-min.js"></script>
	</body>
</html> <!-- end page -->