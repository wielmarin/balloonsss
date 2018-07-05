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
		<h4>Portfolio</h4>
			<ul id="bb-custom-grid" class="bb-custom-grid">
	<!-- Verschillend portfolio per page -->
				<?php if ( is_page('verjaardag-ballonnen') ) { ?>
						<li class="block2">
							<div id="bb-bookblock2" class="bb-bookblock">
								<div class="bb-item"><img src="<?php the_field('box_2_beeld_1', 9); ?>"  alt="image02" width=100% height=100% /></div>
								<div class="bb-item"><img src="<?php the_field('box_2_beeld_2', 9); ?>" alt="image02" width=100% height=100% /></div>
								<div class="bb-item"><img src="<?php the_field('box_2_beeld_3', 9); ?>" alt="image03" width=100% height=100% /></div>
								<div class="bb-item"><img src="<?php the_field('box_2_beeld_4', 9); ?>" alt="image04" width=100% height=100% /></div>
							</div>
							<nav>
								<i class="fas fa-caret-square-left fa-lg prev2"></i><i class="fas fa-caret-square-right fa-lg next2"></i>
							</nav>
						</li>
				<?php } elseif ( is_page('ballonnen-bruiloft') ) { ?>
						<li class="block3">
							<div id="bb-bookblock3" class="bb-bookblock">
								<div class="bb-item"><img src="<?php the_field('box_3_beeld_1', 9); ?>" alt="image01" width=100% height=100% /></div>
								<div class="bb-item"><img src="<?php the_field('box_3_beeld_2', 9); ?>" alt="image02" width=100% height=100% /></div>
								<div class="bb-item"><img src="<?php the_field('box_3_beeld_3', 9); ?>" alt="image03" width=100% height=100% /></div>
								<div class="bb-item"><img src="<?php the_field('box_3_beeld_4', 9); ?>" alt="image04" width=100% height=100% /></div>
							</div>
								<nav>
									<i class="fas fa-caret-square-left fa-lg prev3"></i><i class="fas fa-caret-square-right fa-lg next3"></i>
								</nav>
								<h3>Bruiloft</h3>
						</li>
				<?php } elseif ( is_page('ballonnenbaby') ) { ?>
						<li class="block1">
							<div id="bb-bookblock1" class="bb-bookblock">
								<div class="bb-item"><img src="<?php the_field('box_1_beeld_1', 9); ?>" alt="image01" width=100% height=100% /></div>
								<div class="bb-item"><img src="<?php the_field('box_1_beeld_2', 9); ?>" alt="image02" width=100% height=100% /></div>
								<div class="bb-item"><img src="<?php the_field('box_1_beeld_3', 9); ?>" alt="image03" width=100% height=100% /></div>
								<div class="bb-item"><img src="<?php the_field('box_1_beeld_4', 9); ?>" alt="image04" width=100% height=100% /></div>
							</div>
								<nav>
									<i class="fas fa-caret-square-left fa-lg prev1"></i><i class="fas fa-caret-square-right fa-lg next1"></i>
								</nav>
								<h3>Baby</h3>
						</li>
				<?php } elseif ( is_page('ballonnen-seizoensfeesten') || is_page('ballonnen-thema')) { ?>
						<li class="block4">
							<div id="bb-bookblock4" class="bb-bookblock">
								<div class="bb-item"><img src="<?php the_field('box_4_beeld_1', 9); ?>" alt="image01" width=100% height=100% /></div>
								<div class="bb-item"><img src="<?php the_field('box_4_beeld_2', 9); ?>" alt="image02" width=100% height=100% /></div>
								<div class="bb-item"><img src="<?php the_field('box_4_beeld_3', 9); ?>" alt="image03" width=100% height=100% /></div>
								<div class="bb-item"><img src="<?php the_field('box_4_beeld_4', 9); ?>" alt="image04" width=100% height=100% /></div>
							</div>
								<nav>
									<i class="fas fa-caret-square-left fa-lg prev4"></i><i class="fas fa-caret-square-right fa-lg next4"></i>
								</nav>
								<h3>Themafeesten</h3>
						</li>		
				<?php } elseif ( is_page('beurs-ballonnen') ) { ?>
						<li class="block5">
							<div id="bb-bookblock5" class="bb-bookblock">
								<div class="bb-item"><img src="<?php the_field('box_5_beeld_1', 9); ?>" alt="image01" width=100% height=100% /></div>
								<div class="bb-item"><img src="<?php the_field('box_5_beeld_2', 9); ?>" alt="image02" width=100% height=100% /></div>
								<div class="bb-item"><img src="<?php the_field('box_5_beeld_3', 9); ?>" alt="image03" width=100% height=100% /></div>
								<div class="bb-item"><img src="<?php the_field('box_5_beeld_4', 9); ?>" alt="image04" width=100% height=100% /></div>
							</div>
								<nav>
									<i class="fas fa-caret-square-left fa-lg prev5"></i><i class="fas fa-caret-square-right fa-lg next5"></i>
								</nav>
								<h3>Business</h3>
						</li>
				<?php } else { ?>
						<li class="block6">
							<div id="bb-bookblock6" class="bb-bookblock">
								<div class="bb-item"><img src="<?php the_field('box_6_beeld_1', 9); ?>" alt="image01" width=100% height=100% /></div>
								<div class="bb-item"><img src="<?php the_field('box_6_beeld_2', 9); ?>" alt="image02" width=100% height=100% /></div>
								<div class="bb-item"><img src="<?php the_field('box_6_beeld_3', 9); ?>" alt="image03" width=100% height=100% /></div>
								<div class="bb-item"><img src="<?php the_field('box_6_beeld_4', 9); ?>" alt="image04" width=100% height=100% /></div>
							</div>
								<nav>
									<i class="fas fa-caret-square-left fa-lg prev6"></i><i class="fas fa-caret-square-right fa-lg next6"></i>
								</nav>
								<h3>Pilaren en bogen</h3>
						</li>
				<?php }
				?>

			</ul>
		<p><?php the_field('portfolio_sidebar'); ?><a href="http://www.balloonsss.nl/portfolio/">Bekijk mijn portfolio <i class="fas fa-angle-right"></i></a></p>
		
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