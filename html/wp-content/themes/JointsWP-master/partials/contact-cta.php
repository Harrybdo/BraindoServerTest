<?php 
  
$contact_cta_text = CFS()->get('contact_cta_text',21);
$contact_cta_link_text = CFS()->get('contact_cta_link_text',21);
$contact_cta_link_href = CFS()->get('contact_cta_link_href',21);
?>


<!-- CONTACT CTA -->
<div class="row">
  	<div class="medium-12 columns show-for-medium-up contact-cta">
    	<span class="contact-cta-text"><?php echo $contact_cta_text; ?></span>
    	<a href="<?php echo $contact_cta_link_href; ?>" class="contact-cta-button"><?php echo $contact_cta_link_text; ?></a>
  	</div>
</div>

<!-- END CONTACT CTA -->