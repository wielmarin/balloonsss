<!-- Header -->


	<?php

	get_header();?>
	
<!-- Banner -->
	
<?php get_template_part("banner");?>
	
<!-- Introductie supbage -->

<div class="container-subpage">
	<div class="container-content">
		
		<h1>Party by Balloonsss</h1>
		
	<!-- THE LOOP --><?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
		<p><?php the_content(); ?></p>
	<?php
	endwhile; else: ?>
	<p>Ben jij op zoek naar feestelijke, stijlvolle, decoratie voor jouw event? Voor elke gelegenheid hebben wij de juiste ballonnen! Aan de hand van jullie wensen, adviseren we je graag over de mogelijkheden en laatste trends!
Voor zowel grote als kleine evenementen kunnen wij jouw locatie omtoveren tot een prachtige stijlvolle feestlocatie. We komen niet alleen de ballonnen bezorgen, maar decoreren jouw locatie!</p>
	<?php endif; ?> <!-- END LOOP -->
	
	</div>
</div>

<div class="flexbox-home">
	<div class="flexbox-item-producten">
		<div class="item-image" style="background-image: url(/wp-content/uploads/2018/06/Bruiloft-ballonnen.jpg)"></div>
		
		<div class="tekst">
			<h2><?php the_field('titel_thema1'); ?></h2>
			<div class="tekst-p">
				<p><?php the_field('tekst_thema1'); ?></p>	
			</div>
			<div class="actie-sub">
				<a href="http://www.balloonsss.nl/ballonnen-bruiloft/">Lees meer<i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
	
	<div class="flexbox-item-producten">
		<div class="item-image" style="background-image: url(/wp-content/uploads/2018/06/babyopkomst.jpg)"></div>
		<div class="tekst">
			<h2><?php the_field('titel_thema2'); ?></h2>
			<div class="tekst-p">
				<p><?php the_field('tekst_thema2'); ?></p>	
			</div>
			<div class="actie-sub">
				<a href="http://www.balloonsss.nl/ballonnenbaby/">Lees meer<i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="flexbox-home">
	<div class="flexbox-item-producten">
		<div class="item-image" style="background-image: url(/wp-content/uploads/2018/06/Ballonnen-halloween.jpg)"></div>
		
		<div class="tekst">
			<h2><?php the_field('titel_thema3'); ?></h2>
			<div class="tekst-p">
				<p><?php the_field('tekst_thema3'); ?></p>	
			</div>
			<div class="actie-sub">
				<a href="http://www.balloonsss.nl/ballonnen-seizoensfeesten/">Lees meer<i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
	
	<div class="flexbox-item-producten">
		<div class="item-image" style="background-image: url(http://www.quiropracticopromover.es/wp-content/themes/Promover/beelden2/Verjaardag1.jpg)"></div>
		<div class="tekst">
			<h2><?php the_field('titel_thema4'); ?></h2>
			<div class="tekst-p">
				<p><?php the_field('tekst_thema4'); ?></p>	
			</div>
			<div class="actie-sub">
				<a href="http://www.balloonsss.nl/verjaardag-ballonnen/">Lees meer<i class="fas fa-angle-right"></i></a>
			</div>
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