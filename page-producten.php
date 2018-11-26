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

<ul id="bb-custom-grid" class="bb-custom-grid">
<?php
	if( have_rows('product_boxes') ):
	while ( have_rows('product_boxes') ) : the_row();
?>
	<li class="block<?php echo get_row_index(); ?> productenblok">
		<div id="bb-bookblock<?php echo get_row_index(); ?>" class="bb-bookblock">
			
			<!---- Images repeater ---->
			<?php if( have_rows('product_afbeeldingen') ): 
			while ( have_rows('product_afbeeldingen') ) : the_row();?> 
				<div class="bb-item"><img src="<?php the_sub_field('product_image'); ?>" alt="image01" width=100% height=100% /> 
				</div>
			<?php endwhile; 
			endif; ?> 
			<!--- End image repeater --->
			
		</div>
			<nav>
				<i class="fas fa-caret-square-left fa-lg prev<?php echo get_row_index(); ?>"></i><i class="fas fa-caret-square-right fa-lg next<?php echo get_row_index(); ?>"></i>
			</nav>
			<h3><?php the_sub_field('productgroep_titel'); ?></h3>
			<p><?php the_sub_field('productgroep_prijs'); ?></p>
			<a href="<?php the_sub_field('productgroep_link'); ?>">Offerte aanvragen</a>
	</li>
<?php endwhile; endif; ?><!---- End Main Block Repeater ----->
</ul>


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