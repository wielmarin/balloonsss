


<div class="footer-flex">
	<div class="footer">
		<h3>Navigatie</h3>
			<nav class="footer-nav">
					<?php
						$args = array(
						'theme_location' => 'footer'
						);
					?>
					<?php wp_nav_menu( $args ); ?>	
			</nav>		
	</div>
	
	<div class="footer">
		<h3>Vragen en contact</h3>
		<div class="contactfooter"><a href="callto:0683916328" target="_blank"><i class="fas fa-phone"></i>06 83 91 63 28</a><br></div>
		<div class="contactfooter"><a href="mailto:martina@balloonsss.nl" target="_blank"><i class="far fa-envelope"></i>martina@balloonsss.nl</a><br></div>
		<i class="fas fa-question"></i>FAQ
	</div>

	<div class="footer">
		<h3>Volg Balloonsss</h3>
		<a href="https://www.facebook.com/balloonsssveenendaal" target="_blank"><i class="fab fa-facebook-f fa-lg"></i></a>
		<a href="https://www.linkedin.com/company/balloonsssveenendaal/" target="_blank"><i class="fab fa-linkedin-in fa-lg"></i></a>
	</div>	
	
</div>

<div class="copyright">
	&copy; <?php echo date('Y');?> <?php bloginfo('name'); ?>  |  <a href="/wp-content/uploads/2018/06/Algemene-Voorwaarden-Balloonsss.pdf" target="_blank">Algemene voorwaarden</a> 
</div>

</div><!-- container -->



<?php wp_footer(); ?>
	

</body>
</html>