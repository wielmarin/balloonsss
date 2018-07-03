<?php
/*
Template Name: Search Page
*/
?>


	<?php

	get_header();?>
	
<div class="container-thema">

	<div class="flex-thema-content">

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
	</div>
	
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
			<h3>Verjaardag</h3>
		</li>
	</ul>
	<p><?php the_field('portfolio_sidebar'); ?><a href="http://www.balloonsss.nl/portfolio/">Bekijk mijn portfolio <i class="fas fa-angle-right"></i></a></p>
	</div>
	<div class="sidebar">
			<h4>Volg Balloonsss op Facebook</h4>
			<?php echo do_shortcode("[custom-facebook-feed]"); ?>
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