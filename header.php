<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
			
			<meta name="viewport" content="width=device-width">
			<meta name="description" content=""/>
			<title>Balloonsss</title>
			<?php wp_head(); ?>
			
			<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet"> 
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">	
			
			
	</head>

<body <?php body_class(); ?>> 
			
			
<div class="container">


 <!-- /.primary -->
 
<div class="homesearch">

	<!-- search -->
	 
	<div class="search-box">
			<div class="hd-search">
				<?php get_search_form(); ?>
			</div>
			<div class="search-icon">
			</div>
	</div>	

	<div class="homebutton">	
		<a href="<?php echo get_home_url(); ?>"><i class="fas fa-home fa-2x"></i></a>
	</div>

</div>

<!----------- Fixed Elements ------------->
<?php get_template_part("contactbutton");?>
<i id="backtotop" class="fas fa-chevron-circle-up"></i>
	
	<!-- site-header -->
	<header class="site-header">
	
	<a class="logo" href="<?php echo get_home_url(); ?>">
				<img src="/wp-content/uploads/2018/05/Balloonsss_logo_solid_rgb-e1529401970764.png" width="140px" height="true" alt="Balloonsss">
			</a>
			
			<!--Search Box Mobile -->
				<div class="search-boxmobile">
					<div class="hd-search">
						<?php get_search_form(); ?>
					</div>
					<div class="search-icon">
					</div>
				</div>
				<!--- Button Open Mobile Menu --->
				<div id="mobilemenuopen">
					<i class="fas fa-bars"></i>
					<p>Menu</p>
				</div>
				<div id="mobilemenuclose">
					<i class="fas fa-times"></i>
					<p>Close</p>
				</div>
	
	
	<!-- navigation -->
			<nav class="frontnav-left frontnav">
			<a id="mobilehomelink" href="<?php echo get_home_url(); ?>">Home</a>
				<?php
					$args = array(
					'theme_location' => 'links'
					);
				?>
				<?php wp_nav_menu( $args ); ?>	
			</nav>
			
			
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

	<div id='containermargin'>
