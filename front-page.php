<!-- Header -->


	<?php

	get_header();?>

<div class="flex-banner">
	<?php  $post_thumbnail_id = get_post_thumbnail_id();
					$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
					
	<div class="flex-banner-image" style="background-image:url(<?php echo $post_thumbnail_url; ?>)">						
	</div>
	
</div>	
	
<div class="container-about">
	<div class="container-about-content">
		
		<h1><?php the_title(); ?></h1>
		
	<!-- THE LOOP --><?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>
		<p><?php the_content(); ?></p>
	<?php
	endwhile; else: ?>
	<p>Ben jij op zoek naar feestelijke, stijlvolle, decoratie voor jouw event? Voor elke gelegenheid hebben wij de juiste ballonnen! Aan de hand van jullie wensen, adviseren we je graag over de mogelijkheden en laatste trends!
	<?php endif; ?> <!-- END LOOP -->
	
		<a class="button" href="/balloonsss/fotogalerij/">Bekijk foto's
		</a>
	</div>
</div>

<div class="flexbox-home">
	
	<div class="flexbox-item1">
	
		<div class="item-image" style="background-image: url(/wp-content/uploads/2018/06/Ballonnen-party.jpg)"></div>

		<div class="tekst">
			<h2>Particulier</h2>
			
			<div class="categorieen">
					<a href="http://www.balloonsss.nl/ballonnenbaby/"><p><i class="fas fa-long-arrow-alt-right"></i>Baby</p></a>
					<a href="http://www.balloonsss.nl/ballonnen-bruiloft/"><p><i class="fas fa-long-arrow-alt-right"></i>Bruiloft</p></a>
					<a href="http://www.balloonsss.nl/verjaardag-ballonnen/"><p><i class="fas fa-long-arrow-alt-right"></i>Jubileum en verjaardagen</p></a>
					<a href="http://www.balloonsss.nl/ballonnen-seizoensfeesten/"><p><i class="fas fa-long-arrow-alt-right"></i>Themafeesten</p></a>
			</div>
			<div class="Actie">
				<a href="http://www.balloonsss.nl/particulier"><span class="buttonflex">Bekijk meer<i class="fas fa-angle-right"></i></span></a>
			</div>
		</div>
		</div>
	

	
	<div class="flexbox-item2">
		<div class="item-image" style="background-image: url(/wp-content/uploads/2018/06/Business-ballonnen.jpg)"></div>
		<div class="tekst">
			<h2>Zakelijk</h2>
			<div class="categorieen">
					<a href="http://www.balloonsss.nl/ballonnenopening/"><p><i class="fas fa-long-arrow-alt-right"></i>Openingsfeest</p></a>
					<a href="http://www.balloonsss.nl/beurs-ballonnen/"><p><i class="fas fa-long-arrow-alt-right"></i>Beurzen</p></a>
					<a href="http://www.balloonsss.nl/ballonnen-thema/"><p><i class="fas fa-long-arrow-alt-right"></i>Thema’s</p></a>
					<a href="http://www.balloonsss.nl/business-verjaardagballonnen/"><p><i class="fas fa-long-arrow-alt-right"></i>Verjaardagen</p></a>
			</div>
			<div class="Actie">
				<a href="http://www.balloonsss.nl/zakelijk"><span class="buttonflex">Bekijk meer<i class="fas fa-angle-right"></i></span></a>
			</div>
		</div>
	</div>
</div>

<div class="voordelen">		
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Professioneel</p></div>
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Passend bij elk themafeest</p></div>
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Kwalitatief en duurzaam</p></div>
</div>

<div class="drieblokken">
	<div class="blok">
		<a href="<?php the_field('blok_1_lees_meer_link'); ?>"><div class="blok-image1" style='background-image: url("<?php the_field('blok_1_beeld'); ?>")'>
		</div></a>
		<div class="blok-tekst">
		<h2><?php the_field('blok_1_titel'); ?></h2>
		<?php the_field('blok_1_tekst'); ?>
		<div class="blok-actie"><a href="<?php the_field('blok_1_lees_meer_link'); ?>"><?php the_field('blok_1_link_tekst'); ?><i class="fas fa-angle-right"></i></a></div>
		</div>
	</div>
	<div class="blok">
		<a href="<?php the_field('blok_2_lees_meer_link'); ?>"><div class="blok-image2" style='background-image: url("<?php the_field('blok_2_beeld'); ?>")'>
		</div></a>
		<div class="blok-tekst">
		<h2><?php the_field('blok_2_titel'); ?></h2>
		<?php the_field('blok_2_tekst'); ?>
		<div class="blok-actie"><a href="<?php the_field('blok_2_lees_meer_link'); ?>"><?php the_field('blok_2_link_tekst'); ?><i class="fas fa-angle-right"></i></a></div>
		</div>
	</div>
	<div class="blok">
		<a href="<?php the_field('blok_3_lees_meer_link'); ?>"><div class="blok-image3" style='background-image: url("<?php the_field('blok_3_beeld'); ?>")'>
		</div></a>
		<div class="blok-tekst">
		<h2><?php the_field('blok_3_titel'); ?></h2>
		<?php the_field('blok_3_tekst'); ?>
		<div class="blok-actie"><a href="<?php the_field('blok_3_lees_meer_link'); ?>"><?php the_field('blok_3_link_tekst'); ?><i class="fas fa-angle-right"></i></a></div>
		</div>
	</div>
</div>

<div class="voordelen-mobile">
	<h3>Waarom Balloonsss?</h3>
		<i class="fas fa-check"></i> Kwalitatief en duurzaam<br>
		<i class="fas fa-check"></i> Professioneel<br>
		<i class="fas fa-check"></i> Passend bij elk themafeest
</div>

<div class="cta">
	<h3>Wil je meer weten over Balloonsss of een offerte aanvragen?</h3>
	<a class="buttoncta" href="/contact/">Neem contact met mij op<i class="fas fa-angle-right"></i></a>
</div>



<?php 

get_footer();

?>