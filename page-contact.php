<!-- Header -->


	<?php

	get_header();?>

<!-- Contactbutton -->
	
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
	<div class="container-content">
		
		<h1><?php the_title(); ?></h1>
		
	<!-- THE LOOP --><?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
		<p><?php the_content(); ?></p>
	<?php
	endwhile; else: ?>
	<p>In mijn portfolio geef ik een impressie van wat er allemaal mogelijk is voor jouw gelegenheid.</p>
	<?php endif; ?> <!-- END LOOP -->
	
	</div>
</div>

<div class="flexbox-contact">
	<div class="contactform">
		<h2>Contactformulier</h2>
		<?php echo do_shortcode('[contact-form-7 id="163" title="Contact form 1"]'); ?>
	</div>
	
	<div class="contact-gegevens">
		<div class="contact-gegevens-detail">
			<h2>Contactgegevens</h2>
			<p>Martina Hidding</p>
			<a href="callto:0683916328" target="_blank"><i class="fas fa-phone"></i>06 83 91 63 28</a><br>
			<i class="fab fa-whatsapp fa-lg"></i>06 83 91 63 28<br>
			<a href="martina.hidding.mh@gmail.com"><i class="far fa-envelope"></i>info@mailadres.nl</a><br>
			<i class="fas fa-question"></i>FAQ
		</div>
		<div class="contact-gegevens-detail">
			<h2>Adresgegevens</h2>
				Koenestraat 26<br>
				3907 LJ Veenendaal<br><br>
			<p>Ik woon in Veenendaal, maar ik bezorg ballonnen in heel Nederland. Geen afstand is mij te ver.</p>
		</div>
	</div>
	
</div>

 


<?php 

get_footer();

?>