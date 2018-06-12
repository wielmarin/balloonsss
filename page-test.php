<!-- Header -->


	<?php

	get_header();?>

<div class="flex-banner">
	
	<div class="flex-banner-image">     
	</div>
	
	<div class="contact-onscroll">  
		<div class="contact-onscroll-tekst">
		<p>Contact</p>
		</div>
	</div>	
	
</div>	
	
<div class="container-about">
	<div class="container-about-content">
		
		<h1>Balloonsss by Martina</h1>
		
	<!-- THE LOOP --><?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
		<p>Ben jij op zoek naar feestelijke, stijlvolle, decoratie voor jouw event? Voor elke gelegenheid hebben wij de juiste ballonnen! Aan de hand van jullie wensen, adviseren we je graag over de mogelijkheden en laatste trends!
Voor zowel grote als kleine evenementen kunnen wij jouw locatie omtoveren tot een prachtige stijlvolle feestlocatie. We komen niet alleen de ballonnen bezorgen, maar decoreren jouw locatie!</p>
	</p>
	<?php
	endwhile; else: ?>
	<p>Ben jij op zoek naar feestelijke, stijlvolle, decoratie voor jouw event? Voor elke gelegenheid hebben wij de juiste ballonnen! Aan de hand van jullie wensen, adviseren we je graag over de mogelijkheden en laatste trends!
Voor zowel grote als kleine evenementen kunnen wij jouw locatie omtoveren tot een prachtige stijlvolle feestlocatie. We komen niet alleen de ballonnen bezorgen, maar decoreren jouw locatie!</p>
	<?php endif; ?> <!-- END LOOP -->
	
		<a class="button" href="">Neem contact op</a>
	</div>
</div>

<div class="flexbox-home">
	<div class="flexbox-item1">
		<div class="item-image" style="background-image: url(http://www.quiropracticopromover.es/wp-content/themes/Promover/beelden2/Weddinghome.jpg)"></div>
		
		<div class="tekst">
			<a href="http://localhost/balloonsss/party/"><div class="tekst-titel"><h2>Party</h2>
			<h3>by Balloons</h3></div></a>
			<div class="categorieen">
					<p><i class="fas fa-long-arrow-alt-right"></i>Bruiloft</p>
					<p><i class="fas fa-long-arrow-alt-right"></i>Babyfeest</p>
					<p><i class="fas fa-long-arrow-alt-right"></i>Jubileum/verjaardagen</p>
					<p><i class="fas fa-long-arrow-alt-right"></i>Themafeesten</p>
			</div>
			<div class="Actie">
				<a class="buttonflex" href="http://localhost/balloonsss/party/">Bekijk meer<i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
	
	<div class="flexbox-item2">
		<div class="item-image" style="background-image: url(http://www.quiropracticopromover.es/wp-content/themes/Promover/beelden2/event.jpg)"></div>
		<div class="tekst">
			<a href="http://localhost/balloonsss/business/"><h2>Business</h2>
			<h3>by Balloons</h3></a>
			<div class="categorieen">
					<p><i class="fas fa-long-arrow-alt-right"></i>Openingsfeest</p>
					<p><i class="fas fa-long-arrow-alt-right"></i>Beurzen</p>
					<p><i class="fas fa-long-arrow-alt-right"></i>Thema’s</p>
					<p><i class="fas fa-long-arrow-alt-right"></i>Verjaardagen</p>
			</div>
			<div class="Actie">
				<a class="buttonflex" href="http://localhost/balloonsss/business/">Bekijk meer<i class="fas fa-angle-right"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="voordelen">		
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Professioneel</p></div>
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Passend bij elk themafeest</p></div>
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Kwalitatief en duurzaam</p></div>
</div>

<div class="flexbox-home-overmij">
	<div class="over-mij">
		<div class="over-mij-tekst"><h2><i class="fas fa-quote-left"></i>Aangenaam, ik ben Martina</h2>
		Ben jij op zoek naar feestelijke, stijlvolle, decoratie voor jouw event? Voor elke gelegenheid hebben wij de juiste ballonnen! Aan de hand van jullie wensen, adviseren we je graag over de mogelijkheden en laatste trends!	
		</div>
		<div class="actie-overmij">
			<p>Lees meer <i class="fas fa-angle-right"></i>
		</div>
	</div>
	<div class="box-over-mij-image">
		<div class="over-mij-image"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/martina.jpg" height="250px" width="true">
		<!-- IMAGE SRC VERVANGEN DOOR: <-VERWIJDEREN-?php the_field('over_mij_foto'); ?> -->
		</div>
	</div>
</div>


 


<?php 

get_footer();

?>