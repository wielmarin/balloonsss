<!-- Header -->

	<?php

	get_header();?>

	
<!-- Banner -->
	
<?php get_template_part("banner");?>
	
<!-- Introductie supbage -->
	
<div class="container-subpage">
	<div class="container-content">
		
		<h1><?php the_title(); ?></h1>
		
		<?php echo do_shortcode('[contact-form-7 id="1117" title="Offerte aanvragen"]'); ?>
	
	</div>
</div>


<?php 

get_footer();

?>