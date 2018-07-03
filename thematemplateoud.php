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
	</div>
	

	
<!-- Sidebar -->

	<div class="flex-thema-sidebar">
	<div class="sidebar">
	<h4>Portfolio</h4>
	<ul id="bb-custom-grid" class="bb-custom-grid">
		<li class="block2">
			<div id="bb-bookblock2" class="bb-bookblock">
				<div class="bb-item"><img src="/wp-content/uploads/2018/06/Tros-ballonnen-verjaardag-3.jpg" alt="image01" width=100% height=100% /></div>
				<div class="bb-item"><img src="/wp-content/uploads/2018/06/Folie-ballonnen-letters-e1529489473356.jpg" alt="image02" width=100% height=100% /></div>
				<div class="bb-item"><img src="/wp-content/uploads/2018/06/Verjaardag1-e1529073145205.jpg" alt="image03" width=100% height=100% /></div>
				<div class="bb-item"><img src="/wp-content/uploads/2018/06/Tros-ballonnen-verjaardag-1-e1529489535768.jpg" alt="image04" width=100% height=100% /></div>
			</div>
			<nav>
				<i class="fas fa-caret-square-left fa-lg prev2"></i><i class="fas fa-caret-square-right fa-lg next2"></i>
			</nav>
			<h3>Portfolio</h3>
		</li>
	</ul>
	<p><?php the_field('portfolio_sidebar'); ?><br><br><a href="">Bekijk portfolio <i class="fas fa-angle-right"></i></a></p>
	</div>
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