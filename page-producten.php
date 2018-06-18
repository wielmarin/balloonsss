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

<div class="flexbox-home-overmij">
	<div class="tarieven">
		<div class="tarieven-content">
			<h2>Overzicht producten en tarieven (excl. BTW)</h2>
			 <table style="width:90%">
			  <tr>
			  <tr class="ballonnenboog">
				<td><b>Product</b></td>
				<td><b>Tarief</b></td>
				<td><b>Zie voorbeeld</b></td>
			  </tr>
			  <tr class="ballonnenboog">
				<td>Ballonnenboog (1 – 4 kleuren)</td>
				<td>Vanaf €79,50</td>
				<td><i class="fas fa-eye" style="color:$roze"></i></td>
			  </tr>
			  <tr class="ballonnenpilaar">
				<td>Ballonnenpilaar</td>
				<td>€32,50</td>
				<td><i class="fas fa-eye" style="color:$roze"></i></td>
			  </tr>
			  <tr class="losse">
				<td>Losse ballonnen</td>
				<td>€1,20</td>
				<td><i class="fas fa-eye" style="color:$roze"></i></td>
			  </tr>
				<tr class="ballonen3">
				<td>Ballonnentros 3 (met hi-float)</td>
				<td>€7,00</td>
				<td><i class="fas fa-eye" style="color:$roze"></i></td>
			  </tr>
			  <tr class="ballonnen5">
				<td>Ballonnentros 5 (met hi-float) </td>
				<td>€9,00</td>
				<td><i class="fas fa-eye" style="color:$roze"></i></td>
			  </tr>
			  <tr class="ballonnen7">
				<td>Ballonnentros 7 (met hi-float) </td>
				<td>€11,00</td>
				<td><i class="fas fa-eye" style="color:$roze"></i></td>
			  </tr>
				<tr class="ballonnen3f2l">
				<td>Ballonnentros (3 folie en 2 latex)</td>
				<td>€19,50</td>
				<td><i class="fas fa-eye" style="color:$roze"></i></td>
			  </tr>
			  <tr class="topballon">
				<td>Topballon helium gevuld (80 cm)</td>
				<td>€17,50</td>
				<td><i class="fas fa-eye" style="color:$roze"></i></td>
			  </tr>
			  <tr class="folieballon">
				<td>Folieballon cijfers helium gevuld</td>
				<td>€12,50</td>
				<td><i class="fas fa-eye" style="color:$roze"></i></td>
			  </tr>
				<tr class="ballonnenhart">
				<td>Ballonnenhart op standaard  </td>
				<td>€60,00</td>
				<td><i class="fas fa-eye" style="color:$roze"></i></td>
			  </tr>
			</table> 
		</div>
	</div>
	<div class="box-over-mij-image">
		<div class="over-mij-image"><img id="productimage" src="/balloonsss/wp-content/uploads/2018/06/Tros-ballonnen-verjaardag-1.jpg" height="250px" width="true">
		<!-- IMAGE SRC VERVANGEN DOOR: <-VERWIJDEREN-?php the_field('over_mij_foto'); ?> -->
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