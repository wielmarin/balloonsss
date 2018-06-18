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
		</div>
	
	<div class="flex-thema-sidebar">
		<div class="sidebar">
		<h4>Portfolio</h4>
		<img src="/balloonsss/wp-content/uploads/2018/06/215c59a59abd8c45973d4e12e7cd139b-e1529002100948.jpg" alt="Testimonial" width=100%; height=170px />
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo. <a href="">Bekijk portfolio ></a></p>
		</div>
		<div class="sidebar">
			<i class="fas fa-check"></i> Kwalitatief en duurzaam<br>
			<i class="fas fa-check"></i> Professioneel<br>
			<i class="fas fa-check"></i> Passend bij elk themafeest
		</div>
		<div class="sidebar">
			<h4>Producten</h4>
			<img src="/balloonsss/wp-content/uploads/2018/06/215c59a59abd8c45973d4e12e7cd139b-e1529002100948.jpg" alt="Testimonial" width=100%; height=170px />
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo. <a href="">Bekijk de producten ></a></p>
		</div>

	</div>
</div>


<?php 

get_footer();

?>