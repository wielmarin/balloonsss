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
		<div class="portfolio-image"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/beelden2/beurs.jpg" height="260px" width="true">
			<!-- IMAGE SRC VERVANGEN DOOR: <-VERWIJDEREN-?php the_field('over_mij_foto'); ?> -->
		</div>
		<div class="product-tekst">
			<h3>Ballonpilaar</h3>
			<p>Vanaf €32,50 excl. btw</p>
		</div>
	</div>

	<div class="product">
		<div class="portfolio-image"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/beelden2/babyopkomst.jpg" height="260px" width="true">
			<!-- IMAGE SRC VERVANGEN DOOR: <-VERWIJDEREN-?php the_field('over_mij_foto'); ?> -->
		</div>
		<div class="product-tekst">
			<h3>Ballonboog</h3>
			<p>Vanaf €79,50 excl. btw</p>
		</div>
	</div>
	
	<div class="product">
		<div class="portfolio-image"><img src="/balloonsss/wp-content/uploads/2018/06/event-e1528720496913.jpg" height="260px" width="true">
			<!-- IMAGE SRC VERVANGEN DOOR: <-VERWIJDEREN-?php the_field('over_mij_foto'); ?> -->
		</div>
		<div class="product-tekst">
			<h3>Heliumballonnen</h3>
			<p>Vanaf €1,00 excl. btw</p>
		</div>
	</div>
	
	<div class="product">
		<div class="portfolio-image"><img src="/balloonsss/wp-content/uploads/2018/06/gender-reveal-e1528722220429.jpg" height="260px" width="true">
			<!-- IMAGE SRC VERVANGEN DOOR: <-VERWIJDEREN-?php the_field('over_mij_foto'); ?> -->
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
<a class="buttoncta" href="/balloonsss/contact/">Neem contact met mij op<i class="fas fa-angle-right"></i></a>
</div>




 


<?php 

get_footer();

?>