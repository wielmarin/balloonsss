<?php
/*
Template Name: Search Page
*/
?>


	<?php

	get_header();?>

<h2>Zoekresultaten voor uw zoekopdracht: <?php the_search_query(); ?></h2>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>	
		<div id="resultstitle">
			<?php the_title(); ?>
		</div>
		<div id="searchresults">
			<?php echo get_the_excerpt(); ?>
		</div>	
	<?php
	endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>

<?php 

get_footer();

?>