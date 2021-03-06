<!-- Header -->

	<?php

	get_header();?>
		
	
<!-- Banner -->
	
<?php get_template_part("banner");?>
	
<!-- Introductie supbage -->
	
<div class="container-subpage">
	<div class="container-content">
		
		<h1>Producten en tarieven</h1>
		
	<!-- THE LOOP --><?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
		<p><?php the_content(); ?></p>
	<?php
	endwhile; else: ?>
	<p></p>
	<?php endif; ?> <!-- END LOOP -->
	
		
		<a class="button" href="/balloonsss/contact/">Offerte aanvragen
		</a>
	
	</div>
</div>

<div class="container-producten">

	<div class="product">
		<a href="<?php the_field('link_achter_foto1'); ?>"><div class="portfolio-image"><img src="<?php the_field('product_1'); ?>" height="260px" width="true"></a>
		</div>
		<div class="product-tekst">
			<h3><?php the_field('product_1_titel'); ?></h3>
			<p><?php the_field('product_1_prijs'); ?></p>
		</div>
	</div>

	<div class="product">
		<a href="<?php the_field('link_achter_foto2'); ?>"><div class="portfolio-image"><img src="<?php the_field('product_2'); ?>" height="260px" width="true"></a>
		</div>
		<div class="product-tekst">
			<h3><?php the_field('product_2_titel'); ?></h3>
			<p><?php the_field('product_2_prijs'); ?></p>
		</div>
	</div>
	
	<div class="product">
		<a href="<?php the_field('link_achter_foto3'); ?>"><div class="portfolio-image"><img src="<?php the_field('product_3'); ?>" height="260px" width="true"></a>
		</div>
		<div class="product-tekst">
			<h3><?php the_field('product_3_titel'); ?></h3>
			<p><?php the_field('product_3_prijs'); ?></p>
		</div>
	</div>
	
	<div class="product">
		<a href="<?php the_field('link_achter_foto4'); ?>"><div class="portfolio-image"><img src="<?php the_field('product_4'); ?>" height="260px" width="true"></a>
		</div>
		<div class="product-tekst">
			<h3><?php the_field('product_4_titel'); ?></h3>
			<p><?php the_field('product_4_prijs'); ?></p>
		</div>
	</div>

</div>



<div class="voordelen">	
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Professioneel</p></div>
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Passend bij elk themafeest</p></div>
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Kwalitatief en duurzaam</p></div>
</div>

<div class="cta-producten">
	<h2>Advies en prijsindicatie ontvangen?</h2>
	<div class="cta-producten-p"><p>Vul je gegevens in en ik neem zo snel mogelijk contact met jou op.</p></div>
	<?php echo do_shortcode('[contact-form-7 id="163" title="Contact form 1"]'); ?>
</div>

<div class="voordelen-mobile">
	<h3>Waarom Balloonsss?</h3>
		<i class="fas fa-check"></i> Kwalitatief en duurzaam<br>
		<i class="fas fa-check"></i> Professioneel<br>
		<i class="fas fa-check"></i> Passend bij elk themafeest
</div>

 


<?php 

get_footer();

?>