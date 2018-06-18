<!-- Header -->


	<?php

	get_header();?>
	
<!-- Contactbutton -->
	
<div class="flex-banner-subpage">
	
	<div class="flex-banner-subpage-image">     
	</div>

	
	<div class="contact-onscroll-open"> 
		<div class="contact-onscroll-open-tekst1">
			<p>Contact</p>
		</div>
		<div class="contact-onscroll-open-tekst2">
			<p>Meer weten?</p><p id="closecontact">X</p><br><p><i class="fas fa-phone"></i><i class="fab fa-whatsapp fa-lg"></i><a href="callto:0683916328" target="_blank">06 83 91 63 28</a><br>
			<p><i class="far fa-envelope"></i><a href="martina@balloonsss.nl" target="_blank">martina@balloonsss.nl</a></p>
		</div>
	</div>
	
</div>	

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
		<div class="item-image" style="background-image: url(http://www.quiropracticopromover.es/wp-content/themes/Promover/beelden2/Weddingparty.jpg)"></div>
		
		<div class="tekst">
			<h2>Bruiloft</h2>
			<div class="tekst-p">
				<p>Balloonsss helpt je met de mooiste bruiloftballonnen en decoratie! Of je het nu groots of toch liever wat kleiner wilt aanpakken, alles is mogelijk.</p>	
			</div>
			<div class="actie-sub">
				<a href="">Lees meer<i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
	
	<div class="flexbox-item-producten">
		<div class="item-image" style="background-image: url(http://www.quiropracticopromover.es/wp-content/themes/Promover/beelden2/babyopkomst.jpg)"></div>
		<div class="tekst">
			<h2>Baby</h2>
			<div class="tekst-p">
				<p>Er is een baby opkomst en jullie zijn helemaal in de wolken. Reden genoeg om dit te vieren! De ballonnen van Balloonsss mogen natuurlijk niet ontbreken.</p>	
			</div>
			<div class="actie-sub">
				<a href="">Lees meer<i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="flexbox-home">
	<div class="flexbox-item-producten">
		<div class="item-image" style="background-image: url(http://www.quiropracticopromover.es/wp-content/themes/Promover/beelden2/Thema.jpg)"></div>
		
		<div class="tekst">
			<h2>Seizoensfeesten</h2>
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
				<p>Verjaardag, jubileum of trouwdag? Geslaagd of met pensioen? Reden genoeg voor een feestje. Wij decoreren graag jouw feestlocatie. </p>	
			</div>
			<div class="actie-sub">
				<a href="http://localhost/balloonsss/ballonnen-verjaardag/">Lees meer<i class="fas fa-angle-right"></i></a>
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