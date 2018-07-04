<!-- Header -->


	<?php

	get_header();?>

<!-- Banner -->
	
<?php get_template_part("banner");?>
	
<!-- Introductie supbage -->	
	
<div class="container-subpage">
	<div class="container-content">
		
		<h1><?php the_title(); ?></h1>
		
	<!-- THE LOOP --><?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
		<p><?php the_content(); ?></p>
	<?php
	endwhile; else: ?>
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
			<a href="mailto:martina@balloonsss.nl"><i class="far fa-envelope"></i>martina@balloonsss.nl</a><br>
			<i class="fas fa-question"></i>FAQ
		</div>
		<div class="contact-gegevens-detail">
			<h2>Adresgegevens</h2>
				Koenestraat 26<br>
				3907 LJ Veenendaal<br><br>
		</div>
	</div>
	
</div>

 


<?php 

get_footer();

?>