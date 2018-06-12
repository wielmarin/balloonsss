<?php

/*
Template Name: Special template
*/

get_header();

?>

<!-- banner-image -->
<div class="bannercontact">
	<div class="banner-titelcontact"><h1><span>&middot;</span> Contact <span>&middot;</span></h1></div> 
</div>

<div class="container-contact-background">
	<div class="container-contact">

<!-- info-box -->
<div class="info-box"
		<img src="http://192.168.1.148/maxine/wp-content/uploads/2017/02/huisvesting.jpg" height="50" width="50" alt="Maxine McCombs">
		<img src="http://192.168.1.148/maxine/wp-content/uploads/2017/01/1485380578_Mail.png" height="25" width="25" alt="Email" >&nbsp;info@mmc-fm.nl</p>
		<img src="http://192.168.1.148/maxine/wp-content/uploads/2017/01/1485380380_Call01.png" height="25" width="25 alt="Telefoonnummer" >&nbsp;+31(0)652612891</p>
		Hommelseweg 249<br>6821 LH Arnhem<br><br>BTW: NL150056539B01 <br> KVK: 52330087<br>IBAN: NL54 RABO 01169.53.632
</div>
<!-- /info-box -->


<?php the_content(); ?>
</article>
	<div class="formulier">
		<?php echo do_shortcode('[si-contact-form form=1]'); ?>
	</div>
</div>
</div>

<?php endwhile;

else : 
echo '<p>No content found</p>';

endif;

get_footer();

?>