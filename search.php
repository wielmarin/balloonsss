<!-- Header -->


	<?php

	get_header();?>
	
<div class="container-search">

	<h2 class="titel-search">Zoekresultaten voor uw zoekopdracht: <?php the_search_query(); ?></h2>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>
		
				<div id='searchresults'>
				<?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Lees meer<i class="fas fa-angle-right"></i></a>
				</div>
				
		<?php
		endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	
</div>

<?php 

get_footer();

?>