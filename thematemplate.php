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
		<h3>Voorbeelden producten verjaardag:</h3>
		<div class="voorbeeld-producten">
			<img src="/balloonsss/wp-content/uploads/2018/06/Tros-ballonnen-verjaardag-1.jpg" height="125px" width="true">
			<img src="/balloonsss/wp-content/uploads/2018/06/Verjaardag2-e1529067261889.jpg" height="125px" width="true">
			<img src="/balloonsss/wp-content/uploads/2018/06/Ballon-cijfer-2.jpg" height="125px" width="true">
		</div>
		<br>
		<a href="/balloonsss/producten/">Bekijk alle producten <i class="fas fa-angle-right"></i></a>
	</div>
	</div>
	

	
<!-- Sidebar -->

	<div class="flex-thema-sidebar">
		<div class="sidebar">
		<h4>Portfolio</h4>
		<img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/beelden2/beeldverjaardag.jpg" alt="Testimonial" width=100% height=170px />
		<p>luptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.<br><br><a href="">Bekijk portfolio <i class="fas fa-angle-right"></i></a></p>
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