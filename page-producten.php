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
	
	</div>
</div>

<div class="container-producten">

	<div class="product">
		<a href="http://www.balloonsss.nl/contact/"><div class="portfolio-image"><img src="<?php the_field('product_1'); ?>" height="260px" width="true"></a>
		</div>
		<div class="product-tekst">
			<h3>Ballonpilaar</h3>
			<p>Vanaf €32,50 excl. btw</p>
		</div>
	</div>

	<div class="product">
		<a href="http://www.balloonsss.nl/contact/"><div class="portfolio-image"><img src="<?php the_field('product_2'); ?>" height="260px" width="true"></a>
		</div>
		<div class="product-tekst">
			<h3>Ballonboog</h3>
			<p>Vanaf €79,50 excl. btw</p>
		</div>
	</div>
	
	<div class="product">
		<a href="http://www.balloonsss.nl/contact/"><div class="portfolio-image"><img src="<?php the_field('product_3'); ?>" height="260px" width="true"></a>
		</div>
		<div class="product-tekst">
			<h3>Heliumballonnen</h3>
			<p>Vanaf €1,00 excl. btw</p>
		</div>
	</div>
	
	<div class="product">
		<a href="http://www.balloonsss.nl/contact/"><div class="portfolio-image"><img src="<?php the_field('product_4'); ?>" height="260px" width="true"></a>
		</div>
		<div class="product-tekst">
			<h3>Folieballonnen</h3>
			<p>Vanaf €6,50 excl. btw</p>
		</div>
	</div>

</div>



<div class="voordelen">	
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Professioneel</p></div>
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Passend bij elk themafeest</p></div>
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Kwalitatief en duurzaam</p></div>
</div>

<div class="cta">
	<h3>Wil je meer weten over Balloonsss of een offerte aanvragen?</h3>
<a class="buttoncta" href="/contact/">Neem contact met mij op<i class="fas fa-angle-right"></i></a>
</div>




 


<?php 

get_footer();

?>