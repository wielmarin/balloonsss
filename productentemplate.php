<?php /* Template Name: thema template
* Template Post Type: post, page
*/ ?>

<!-- Header -->


	<?php

	get_header();?>
		
	
<!-- Contactbutton -->
	<?php  $post_thumbnail_id = get_post_thumbnail_id();
        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
			
			
<div class="flex-banner-subpage">
	
	<div class="flex-banner-subpage-image" style="background-image:<?php echo $post_thumbnail_url; ?>">     
	</div>

	
	<div class="contact-onscroll-open"> 
		<div class="contact-onscroll-open-tekst1">
			<p>Contact</p>
		</div>
		<div class="contact-onscroll-open-tekst2">
			<p>Meer weten?</p><p id="closecontact">X</p><br><p><i class="fas fa-phone"></i><i class="fab fa-whatsapp fa-lg"></i><a href="callto:0683916328" target="_blank">06 83 91 63 28</a><br>
			<p><i class="far fa-envelope"></i><a href="martina@balloonsss.nl" target="_blank">martina@balloonsss.nl</a></p>
		</div>
	</div>
	
</div>	

<div class="flexbox-thema">
	<div class="flex-thema-content">
	</div>
	<div class="flex-thema-sidebar">
	</div>
</div>


<?php 

get_footer();

?>