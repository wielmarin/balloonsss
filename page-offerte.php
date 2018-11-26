<!-- Header -->

	<?php

	get_header();?>

	
<!-- Banner -->
	
<?php get_template_part("banner");?>
	
<!-- Introductie supbage -->
	
<div class="container-subpage">
	<div class="container-offerte">
		
		<h1><?php the_title(); ?> aanvragen ballonnen</h1>
		<!-- THE LOOP --><?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>
			<p><?php the_content(); ?></p>
		<?php
		endwhile; else: ?>
		<?php endif; ?> <!-- END LOOP -->
		
		<?php echo do_shortcode('[contact-form-7 id="1117" title="Offerte aanvragen"]'); ?>
	
	</div>
</div>


<?php 

get_footer();

?>