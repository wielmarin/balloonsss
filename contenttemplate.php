<?php /* Template Name: template algemeen content
* Template Post Type: post, page
*/ ?>

<!-- Header -->

	<?php

	get_header();?>
	
<div class="flex-banner-subpage">
	
	<div class="flex-banner-subpage-image">     
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
	
<div class="container-subpage">
	<div class="container-algemeen">
	<h1><?php the_title(); ?></h1>	
	<!-- THE LOOP --><?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
		<p><?php the_content(); ?></p>
	<?php
	endwhile; else: ?>
	<p></p><?php endif; ?> <!-- END LOOP -->
	
	</div>
</div>

<div class="cta">
	<h3>Wil je meer weten over Balloonsss of een offerte aanvragen?</h3>
<a class="buttoncta" href="http://www.balloonsss.nl/contact/">Neem contact met mij op<i class="fas fa-angle-right"></i></a>
</div>


<?php 

get_footer();

?>