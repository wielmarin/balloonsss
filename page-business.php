<!-- Header -->

	<?php

	get_header();?>
	
<!-- Banner -->
	
<?php get_template_part("banner");?>
	
<!-- Introductie supbage -->
	
<div class="container-subpage">
	<div class="container-content">
		
		<h1>Business by Balloonsss</h1>
		
	<!-- THE LOOP --><?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
		<p><?php the_content(); ?></p>
	<?php
	endwhile; else: ?>
	<p>Ook als bedrijf heb je diverse gelegenheid om je evenement te decoreren met ballonnen. Denk aan opening van je bedrijf, beurzen, thema’s zoals kerst, nieuwjaarsreceptie etc. Wij helpen je graag om jouw evenement op een feestelijke, stijlvolle manier aan te kleden. We bespreken graag de mogelijkheden met je.</p>
	<?php endif; ?> <!-- END LOOP -->
	
	</div>
</div>

<div class="flexbox-home">

	<div class="flexbox-item-producten">
		<div class="item-image-producten" style="background-image: url(/wp-content/uploads/2018/06/Ballonnen-beurs-1.jpg)"></div>
		<div class="tekst">
			<a href="/balloonsss/beurs-ballonnen/"><h2><?php the_field('titel_thema2'); ?></h2></a>
			<div class="tekst-p">
				<p><?php the_field('tekst_thema2'); ?></p>	
			</div>
			<div class="actie-sub">
				<a href="/balloonsss/beurs-ballonnen/">Lees meer<i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
	<div class="flexbox-item-producten">
		<div class="item-image-producten" style="background-image: url(/wp-content/uploads/2018/06/Ballonnen-opening.jpg)"></div>
		
		<div class="tekst">
			<a href="/balloonsss/ballonnenopening/"><h2><?php the_field('titel_thema1'); ?></h2></a>
			<div class="tekst-p">
				<p><?php the_field('tekst_thema1'); ?></p>	
			</div>
			<div class="actie-sub">
				<a href="/balloonsss/ballonnenopening/">Lees meer<i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
	
</div>

<div class="flexbox-home">
	<div class="flexbox-item-producten">
		<div class="item-image-producten" style="background-image: url(/wp-content/uploads/2018/06/Balloons-nieuwjaar-1-e1529668952150.jpg)"></div>
		
		<div class="tekst">
			<a href="/balloonsss/ballonnen-thema/"><h2><?php the_field('titel_thema3'); ?></h2></a>
			<div class="tekst-p">
				<p><?php the_field('tekst_thema3'); ?></p>	
			</div>
			<div class="actie-sub">
				<a href="/balloonsss/ballonnen-thema/">Lees meer<i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
	
	<div class="flexbox-item-producten">
		<div class="item-image-producten" style="background-image: url(/wp-content/uploads/2018/06/Verjaardag-letter-ballonnen.jpg)"></div>
		<div class="tekst">
			<a href="/balloonsss/business-verjaardagballonnen/"><h2><?php the_field('titel_thema4'); ?></h2></a>
			<div class="tekst-p">
				<p><?php the_field('tekst_thema4'); ?></p>	
			</div>
			<div class="actie-sub">
				<a href="/balloonsss/business-verjaardagballonnen/">Lees meer<i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
</div>


<div class="voordelen">		
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Professioneel</p></div>
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Passend bij elk themafeest</p></div>
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Kwalitatief en duurzaam</p></div>
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