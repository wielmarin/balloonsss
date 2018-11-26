<?php /* Template Name: nieuws template
* Template Post Type: post, page
*/ ?>

<!-- Header -->


	<?php

	get_header();?>
		

	<?php get_template_part("banner");?>
	
<!-- Contactbutton -->
	<?php  $post_thumbnail_id = get_post_thumbnail_id();
        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>

	
<!-- Content -->

<div class="container-thema">

	<div class="flex-thema-content">
		
		<h1><?php the_title(); ?></h1>
		<div class="nieuws-date"><p><?php the_time('j F Y'); ?></p></div>
		<!-- THE LOOP --><?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>
		<p><?php the_content(); ?></p>
		<?php
		endwhile; else: ?>
		<p></p>
		<?php endif; ?> <!-- END LOOP -->
		
		<div class="social">
			<h3>Deel deze content</h3>
			<?php echo do_shortcode('[TheChamp-Sharing]'); ?>
		</div>
		
	</div>
	

	
<!-- Sidebar -->

	<div class="flex-thema-sidebar">
	<div class="sidebar-contact">
		<div class="sidebar-titel"><h4>Contact</h4></div>
			Wil je meer informatie over Balloonsss of advies?
			<a class="buttonthema" href="/balloonsss/contact/">Neem contact op
			</a>
	</div>
	<div class="sidebar">
		
		<div class="sidebar-image" style="background-image: url(<?php the_field('afbeelding_thema'); ?>)"></div>
		<a href="https://www.balloonsss.nl/producten/">Bekijk producten <i class="fas fa-angle-right"></i></a></p>
		
	</div>
	<div class="sidebar">
			<div class="sidebar-titel"><h4>Volg Balloonsss op Facebook</h4></div>
			<?php echo do_shortcode("[custom-facebook-feed]"); ?>
	</div>
	<div class="sidebar">
		<div class="sidebar-titel"><h4>Waarom Balloonsss?</h4></div>
			<i class="fas fa-check"></i> Kwalitatief en duurzaam<br>
			<i class="fas fa-check"></i> Professioneel<br>
			<i class="fas fa-check"></i> Passend bij elk themafeest
	</div>


	</div>
</div>


<?php 

get_footer();

?>