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
	
		<a class="button" href="/balloonsss/portfolio/">Bekijk portfolio
		</a>
	</div>
</div>

<div class="flexbox-home">
	
	<a class="flexbox-item1" href="/balloonsss/party/">
	
		<div class="item-image" style="background-image: url(/wp-content/uploads/2018/06/Ballonnen-party.jpg)"></div>

		<div class="tekst">
			<h2>Party ballonnen</h2>
			
			<div class="categorieen">
					<p><i class="fas fa-long-arrow-alt-right"></i>Bruiloft</p>
					<p><i class="fas fa-long-arrow-alt-right"></i>Babyfeest</p>
					<p><i class="fas fa-long-arrow-alt-right"></i>Jubileum en verjaardagen</p>
					<p><i class="fas fa-long-arrow-alt-right"></i>Themafeesten</p>
					<p><i class="fas fa-long-arrow-alt-right"></i>Pilaren en bogen</p>
			</div>
			<div class="Actie">
				<span class="buttonflex">Bekijk meer<i class="fas fa-angle-right"></i></span>
			</div>
		</div>
	</a>

	
	<a class="flexbox-item2"  href="/balloonsss/business/">
		<div class="item-image" style="background-image: url(/wp-content/uploads/2018/06/Business-ballonnen.jpg)"></div>
		<div class="tekst">
			<h2>Business ballonnnen</h2>
			<div class="categorieen">
					<p><i class="fas fa-long-arrow-alt-right"></i>Openingsfeest</p>
					<p><i class="fas fa-long-arrow-alt-right"></i>Beurzen</p>
					<p><i class="fas fa-long-arrow-alt-right"></i>Thema’s</p>
					<p><i class="fas fa-long-arrow-alt-right"></i>Verjaardagen</p>
					<p><i class="fas fa-long-arrow-alt-right"></i>Pilaren en bogen</p>
			</div>
			<div class="Actie">
				<span class="buttonflex">Bekijk meer<i class="fas fa-angle-right"></i></span>
			</div>
		</div>
	</a>
</div>

<div class="voordelen">		
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Professioneel</p></div>
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Passend bij elk themafeest</p></div>
			<div class="sp"><img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/Beelden/Beelden/waaromballoonsss.jpg" height="70" width="70"><p>Kwalitatief en duurzaam</p></div>
</div>



<div class="drieblokken">
	<div class="blok">
		<div class="blok-image1" style='background-image: url("<?php the_field('blok_1_beeld'); ?>")'>
		</div>
		<div class="blok-tekst">
		<h2><?php the_field('blok_1_titel'); ?></h2>
		<?php the_field('blok_1_tekst'); ?>
		<div class="blok-actie"><a href="<?php the_field('blok_1_lees_meer_link'); ?>"><?php the_field('blok_1_link_tekst'); ?><i class="fas fa-angle-right"></i></a></div>
		</div>
	</div>
	<div class="blok">
		<div class="blok-image2" style='background-image: url("<?php the_field('blok_2_beeld'); ?>")'>
		</div>
		<div class="blok-tekst">
		<h2><?php the_field('blok_2_titel'); ?></h2>
		<?php the_field('blok_2_tekst'); ?>
		<div class="blok-actie"><a href="<?php the_field('blok_2_lees_meer_link'); ?>"><?php the_field('blok_2_link_tekst'); ?><i class="fas fa-angle-right"></i></a></div>
		</div>
	</div>
	<div class="blok">
		<div class="blok-image3" style='background-image: url("<?php the_field('blok_3_beeld'); ?>")'>
		</div>
		<div class="blok-tekst">
		<h2><?php the_field('blok_3_titel'); ?></h2>
		<?php the_field('blok_3_tekst'); ?>
		<div class="blok-actie"><a href="<?php the_field('blok_3_lees_meer_link'); ?>"><?php the_field('blok_3_link_tekst'); ?><i class="fas fa-angle-right"></i></a></div>
		</div>
	</div>
</div>

 


<?php 

get_footer();

?>