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
	<p>Ben jij op zoek naar feestelijke, stijlvolle, decoratie voor jouw event? Voor elke gelegenheid hebben wij de juiste ballonnen! Aan de hand van jullie wensen, adviseren we je graag over de mogelijkheden en laatste trends!
Voor zowel grote als kleine evenementen kunnen wij jouw locatie omtoveren tot een prachtige stijlvolle feestlocatie. We komen niet alleen de ballonnen bezorgen, maar decoreren jouw locatie!</p>
	<?php endif; ?> <!-- END LOOP -->
	
	</div>
</div>

<div class="flexbox-home">
	<div class="flexbox-item-producten">
		<div class="item-image" style="background-image: url(http://www.quiropracticopromover.es/wp-content/themes/Promover/beelden2/beurs.jpg)"></div>
		
		<div class="tekst">
			<h2>Opening</h2>
			<div class="tekst-p">
				<p>Balloonsss helpt je met de mooiste bruiloftballonnen en decoratie! Of je het nu groots of toch liever wat kleiner wilt aanpakken, alles is mogelijk.</p>	
			</div>
			<div class="actie-sub">
				<a href="">Lees meer<i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
	
	<div class="flexbox-item-producten">
		<div class="item-image" style="background-image: url(http://www.quiropracticopromover.es/wp-content/themes/Promover/beelden2/event.jpg)"></div>
		<div class="tekst">
			<h2>Beurs</h2>
			<div class="tekst-p">
				<p>Ballonnen geven jouw event extra attentiewaarden. Denk hierbij aan ballonnenboog, ballonnenslinger of ballonnenpilaren.</p>	
			</div>
			<div class="actie-sub">
				<a href="">Lees meer<i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="flexbox-home">
	<div class="flexbox-item-producten">
		<div class="item-image" style="background-image: url(http://www.quiropracticopromover.es/wp-content/themes/Promover/beelden2/Themafeest.jpg)"></div>
		
		<div class="tekst">
			<h2>Thema</h2>
			<div class="tekst-p">
				<p>Van ballonnenbogen, tot losse ballonnen, Wij helpen je graag om jouw evenement met onze ballonnen extra feestelijk te maken.</p>	
			</div>
			<div class="actie-sub">
				<a href="">Lees meer<i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
	
	<div class="flexbox-item-producten">
		<div class="item-image" style="background-image: url(http://www.quiropracticopromover.es/wp-content/themes/Promover/beelden2/Verjaardag1.jpg)"></div>
		<div class="tekst">
			<h2>Verjaardag</h2>
			<div class="tekst-p">
				<p>Je werknemer in het zonnetje zetten? Of gaat een collega met pensioen? Wij decoreren graag jouw feestlocatie. Wij bezorgen ook trossen ballonnen! </p>	
			</div>
			<div class="actie-sub">
				<a href="">Lees meer<i class="fas fa-angle-right"></i></a>
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
<a class="buttoncta" href="http://localhost/balloonsss/contact/">Neem contact met mij op<i class="fas fa-angle-right"></i></a>
</div>


 


<?php 

get_footer();

?>