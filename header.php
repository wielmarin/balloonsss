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
 
 
	<!-- search -->
 
<div class="search">
		<div class="hd-search">
			<?php get_search_form(); ?>
		</div>
		<div class="search-icon">
		</div>
</div>
	
	<!-- site-header -->
	<header class="site-header">
	
	
	
	
	<!-- navigation -->
			<nav class="frontnav-left frontnav">
				<?php
					$args = array(
					'theme_location' => 'links'
					);
				?>
				<?php wp_nav_menu( $args ); ?>	
			</nav>
			<a href="<?php echo get_home_url(); ?>">
			<div class="logo">
				<img src="http://www.quiropracticopromover.es/wp-content/themes/Promover/beelden2/logosolid.png" width="150px" height="150px" alt="Balloonsss">
			</div>
			</a>
			
			<nav class="frontnav-right frontnav">
				<?php
					$args = array(
					'theme_location' => 'rechts'
					);
				?>
				<?php wp_nav_menu( $args ); ?>	
			</nav>
		
	<!-- /navigation -->

	</header>
	<!-- /site-header -->