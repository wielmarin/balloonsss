<?php /* Template Name: thema template
* Template Post Type: post, page
*/ ?>

<!-- Header -->


	<?php

	get_header();?>
		
	
<!-- Contactbutton -->
	<?php  $post_thumbnail_id = get_post_thumbnail_id();
        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>

	
<!-- Content -->

<div class="container-thema">

	<div class="flex-thema-content">
		<h1><?php the_title(); ?></h1>
	<!-- THE LOOP --><?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
		<p><?php the_content(); ?></p>
	<?php
	endwhile; else: ?>
	<p></p>
	<?php endif; ?> <!-- END LOOP -->
		<a class="buttonthema" href="/balloonsss/contact/">Neem contact op
		</a>
	<div class="voorbeelden">
		<h3><?php the_field('titel_afbeeldingen'); ?></h3>
		<div class="voorbeeld-producten">
			<img src="<?php the_field('afbeelding_1'); ?>" alt="ballon cijfer" height="125px" width="true">
			<img src="<?php the_field('afbeelding_2'); ?>" height="125px" width="true">
			<img src="<?php the_field('afbeelding_3'); ?>" height="125px" width="true">
		</div>
		<br>
		<a href="/balloonsss/producten/">Bekijk alle producten <i class="fas fa-angle-right"></i></a>
	</div>
	</div>
	

	
<!-- Sidebar -->

	<div class="flex-thema-sidebar">
		<div class="sidebar">
		<h4>Portfolio</h4>
		
		<div class="sidebar-image-box">
		<?php  $post_thumbnail_id = get_post_thumbnail_id();
					$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
					
		<div class="sidebar-image"style="background-image:url(<?php echo $post_thumbnail_url; ?>)">  			
		</div>
	
		</div>	
		<p><?php the_field('portfolio_sidebar'); ?><br><br><a href="">Bekijk portfolio <i class="fas fa-angle-right"></i></a></p>
		</div>
		<div class="sidebar">
			<h4>Reviews</h4>
			<p>Hier kunnen we reviews plaatsen als we deze hebben. De reviews van Facebook worden automatisch ingeladen via Wordpress. Zolang we deze niet hebben, kunnen we ook facebookfeed hier neerzetten.</p>
		</div>
		<div class="sidebar">
		<h4>Waarom Balloonsss?</h4>
			<i class="fas fa-check"></i> Kwalitatief en duurzaam<br>
			<i class="fas fa-check"></i> Professioneel<br>
			<i class="fas fa-check"></i> Passend bij elk themafeest
		</div>


	</div>
</div>


<?php 

get_footer();

?>