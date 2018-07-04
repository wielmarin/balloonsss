<!-- Header -->

	<?php

	get_header();?>

	
<!-- Banner -->
	
<?php get_template_part("banner");?>
	
<!-- Introductie supbage -->
	
<div class="container-subpage">
	<div class="container-content">
		
		<h1>Portfolio</h1>
		
	<!-- THE LOOP --><?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
		<p><?php the_content(); ?></p>
	<?php
	endwhile; else: ?>
	<p>In mijn portfolio geef ik een impressie van wat er allemaal mogelijk is voor jouw gelegenheid.</p>
	<?php endif; ?> <!-- END LOOP -->
	
	</div>
</div>

<ul id="bb-custom-grid" class="bb-custom-grid">
<li class="block1">
	<div id="bb-bookblock1" class="bb-bookblock">
		<div class="bb-item"><img src="<?php the_field('box_1_beeld_1'); ?>" alt="image01" width=100% height=100% /></div>
		<div class="bb-item"><img src="<?php the_field('box_1_beeld_2'); ?>" alt="image02" width=100% height=100% /></div>
		<div class="bb-item"><img src="<?php the_field('box_1_beeld_3'); ?>" alt="image03" width=100% height=100% /></div>
		<div class="bb-item"><img src="<?php the_field('box_1_beeld_4'); ?>" alt="image04" width=100% height=100% /></div>
	</div>
		<nav>
			<i class="fas fa-caret-square-left fa-lg prev1"></i><i class="fas fa-caret-square-right fa-lg next1"></i>
		</nav>
		<h3><?php the_field('portfolio_box_1_titel'); ?></h3>
</li>
<li class="block2">
	<div id="bb-bookblock2" class="bb-bookblock">
		<div class="bb-item"><img src="<?php the_field('box_2_beeld_1'); ?>" alt="image01" width=100% height=100% /></div>
		<div class="bb-item"><img src="<?php the_field('box_2_beeld_2'); ?>" alt="image02" width=100% height=100% /></div>
		<div class="bb-item"><img src="<?php the_field('box_2_beeld_3'); ?>" alt="image03" width=100% height=100% /></div>
		<div class="bb-item"><img src="<?php the_field('box_2_beeld_4'); ?>" alt="image04" width=100% height=100% /></div>
	</div>
		<nav>
			<i class="fas fa-caret-square-left fa-lg prev2"></i><i class="fas fa-caret-square-right fa-lg next2"></i>
		</nav>
		<h3><?php the_field('portfolio_box_2_titel'); ?></h3>
</li>
<li class="block3">
	<div id="bb-bookblock3" class="bb-bookblock">
		<div class="bb-item"><img src="<?php the_field('box_3_beeld_1'); ?>" alt="image01" width=100% height=100% /></div>
		<div class="bb-item"><img src="<?php the_field('box_3_beeld_2'); ?>" alt="image02" width=100% height=100% /></div>
		<div class="bb-item"><img src="<?php the_field('box_3_beeld_3'); ?>" alt="image03" width=100% height=100% /></div>
		<div class="bb-item"><img src="<?php the_field('box_3_beeld_4'); ?>" alt="image04" width=100% height=100% /></div>
	</div>
		<nav>
			<i class="fas fa-caret-square-left fa-lg prev3"></i><i class="fas fa-caret-square-right fa-lg next3"></i>
		</nav>
		<h3><?php the_field('portfolio_box_3_titel'); ?></h3>
</li>
<li class="block4">
	<div id="bb-bookblock4" class="bb-bookblock">
		<div class="bb-item"><img src="<?php the_field('box_4_beeld_1'); ?>" alt="image01" width=100% height=100% /></div>
		<div class="bb-item"><img src="<?php the_field('box_4_beeld_2'); ?>" alt="image02" width=100% height=100% /></div>
		<div class="bb-item"><img src="<?php the_field('box_4_beeld_3'); ?>" alt="image03" width=100% height=100% /></div>
		<div class="bb-item"><img src="<?php the_field('box_4_beeld_4'); ?>" alt="image04" width=100% height=100% /></div>
	</div>
		<nav>
			<i class="fas fa-caret-square-left fa-lg prev4"></i><i class="fas fa-caret-square-right fa-lg next4"></i>
		</nav>
		<h3><?php the_field('portfolio_box_4_titel'); ?></h3>
</li>
<li class="block5">
	<div id="bb-bookblock5" class="bb-bookblock">
		<div class="bb-item"><img src="<?php the_field('box_5_beeld_1'); ?>" alt="image01" width=100% height=100% /></div>
		<div class="bb-item"><img src="<?php the_field('box_5_beeld_2'); ?>" alt="image02" width=100% height=100% /></div>
		<div class="bb-item"><img src="<?php the_field('box_5_beeld_3'); ?>" alt="image03" width=100% height=100% /></div>
		<div class="bb-item"><img src="<?php the_field('box_5_beeld_4'); ?>" alt="image04" width=100% height=100% /></div>
	</div>
		<nav>
			<i class="fas fa-caret-square-left fa-lg prev5"></i><i class="fas fa-caret-square-right fa-lg next5"></i>
		</nav>
		<h3><?php the_field('portfolio_box_5_titel'); ?></h3>
</li>

<li class="block6">
	<div id="bb-bookblock6" class="bb-bookblock">
		<div class="bb-item"><img src="<?php the_field('box_6_beeld_1'); ?>" alt="image01" width=100% height=100% /></div>
		<div class="bb-item"><img src="<?php the_field('box_6_beeld_2'); ?>" alt="image02" width=100% height=100% /></div>
		<div class="bb-item"><img src="<?php the_field('box_6_beeld_3'); ?>" alt="image03" width=100% height=100% /></div>
		<div class="bb-item"><img src="<?php the_field('box_6_beeld_4'); ?>" alt="image04" width=100% height=100% /></div>
	</div>
		<nav>
			<i class="fas fa-caret-square-left fa-lg prev6"></i><i class="fas fa-caret-square-right fa-lg next6"></i>
		</nav>
		<h3><?php the_field('portfolio_box_6_titel'); ?></h3>
</li>

</ul>


<div class="voordelen">		
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Professioneel</p></div>
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Passend bij elk themafeest</p></div>
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Kwalitatief en duurzaam</p></div>
</div>

<div class="cta">
	<h3>Wil je meer weten over Balloonsss of een offerte aanvragen?</h3>
<a class="buttoncta" href="/balloonsss/contact/">Neem contact met mij op<i class="fas fa-angle-right"></i></a>
</div>




 


<?php 

get_footer();

?>