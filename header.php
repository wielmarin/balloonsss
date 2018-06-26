<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
			
			<meta name="viewport" content="width=device-width">
			<meta name="description" content=""/>
			<title>Balloonsss</title>
			<?php wp_head(); ?>
			
			<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet"> 
			<link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet"> 
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">	
			
			
	</head>

<body <?php body_class(); ?>> 
			
			
<div class="container">


 <!-- /.primary -->
 
<div class="homesearch">	

<div class="homebutton">	
	<a href="<?php echo get_home_url(); ?>"><i class="fas fa-home fa-2x"></i></a>
</div>

<!-- search -->
 
<div class="search-box">
		<div class="hd-search">
			<?php get_search_form(); ?>
		</div>
		<div class="search-icon">
		</div>
</div>

</div>

<?php get_template_part("contactbutton");?>
	
	<!-- site-header -->
	<header class="site-header">
	
	
	
	
	<!-- navigation -->
			<nav class="frontnav-left frontnav">
			<span id="close"><i class="fas fa-times"></i></span>
			<a id="mobilehomelink" href="<?php echo get_home_url(); ?>">Home</a>
				<?php
					$args = array(
					'theme_location' => 'links'
					);
				?>
				<?php wp_nav_menu( $args ); ?>	
			</nav>
			<a class="logo" href="<?php echo get_home_url(); ?>">
				<img src="/wp-content/uploads/2018/05/Balloonsss_logo_solid_rgb-e1529401970764.png" width="140px" height="true" alt="Balloonsss">
			</a>
			
			<nav class="frontnav-right frontnav">
				<?php
					$args = array(
					'theme_location' => 'rechts'
					);
				?>
				<?php wp_nav_menu( $args ); ?>	
			
				<div class="search-boxmobile">
						<div class="hd-search">
							<?php get_search_form(); ?>
						</div>
						<div class="search-icon">
						</div>
				</div>
			</nav>
	<div id="mobilemenuopen">
		<p>Menu</p><i class="fas fa-bars"></i>
	</div>
		
	<!-- /navigation -->

	</header>
	<!-- /site-header -->
	
