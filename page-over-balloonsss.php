<!-- Header -->

	<?php

	get_header();?>
	
<!-- Banner -->
	
<?php get_template_part("banner");?>
	
<!-- Introductie supbage -->
	
<div class="container-subpage">
	<div class="container-content">
		
		<h1><?php the_title(); ?></h1>
		
	<!-- THE LOOP --><?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
		<p><?php the_content(); ?></p>
	<?php
	endwhile; else: ?>
	<?php endif; ?> <!-- END LOOP -->
	
	</div>
</div>

<div class="flexbox-overmij">
	<div class="over-mij">
		<div class="over-mij-tekst"><h2><i class="fas fa-quote-left"></i><?php the_field('titel_over_martina'); ?></h2>
		<?php the_field('omschrijving_over_martina'); ?></div>
	</div>
	<div class="box-over-mij-image">
		<div class="over-mij-image"><img src="/wp-content/uploads/2018/06/Martina-Hidding-e1529321947949.jpg" height="320px" width="true">
		<!-- IMAGE SRC VERVANGEN DOOR: <-VERWIJDEREN-?php the_field('over_mij_foto'); ?> -->
		</div>
	</div>
</div>

<div class="voordelen">		
			<div class="sp"><img src="/wp-content/uploads/2018/08/Balloonsss_fav.jpg" height="70" width="70"><p>Professioneel</p></div>
			<div class="sp"><img src="/wp-content/uploads/2018/08/Balloonsss_fav.jpg" height="70" width="70"><p>Passend bij elk themafeest</p></div>
			<div class="sp"><img src="/wp-content/uploads/2018/08/Balloonsss_fav.jpg" height="70" width="70"><p>Kwalitatief en duurzaam</p></div>
</div>

<div class="voordelen-mobile">
	<h3>Waarom Balloonsss?</h3>
		<i class="fas fa-check"></i> Kwalitatief en duurzaam<br>
		<i class="fas fa-check"></i> Professioneel<br>
		<i class="fas fa-check"></i> Passend bij elk themafeest
</div>

<div class="cta">
	<h3>Wil je meer weten over Balloonsss of een offerte aanvragen?</h3>
<a class="buttoncta" href="/balloonsss/contact/">Neem contact met mij op<i class="fas fa-angle-right"></i></a>
</div>


<?php 

get_footer();

?>