<?php



function balloonsss_resources() {
	
	wp_enqueue_style('bookblock', get_template_directory_uri() . '/css/bookblock.css');
	wp_enqueue_style('style', get_stylesheet_uri());
	
	wp_dequeue_script('jquery');
	wp_enqueue_script('onlinejquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
	wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.custom.js');
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
	wp_enqueue_script('scrollReveal', 'https://unpkg.com/scrollreveal/dist/scrollreveal.min.js');
	wp_enqueue_script('bb1', get_template_directory_uri() . '/js/jquerypp.custom.js');
	wp_enqueue_script('bb2', get_template_directory_uri() . '/js/jquery.bookblock.js');
	wp_enqueue_script('bb3', get_template_directory_uri() . '/js/bookblock.js');
	wp_enqueue_script('backstretch', 'https://cdnjs.cloudflare.com/ajax/libs/danielgindi-jquery-backstretch/2.1.15/jquery.backstretch.min.js');
	
}
 

add_action('wp_enqueue_scripts', 'balloonsss_resources');

// Navigation Menus
register_nav_menus(array(
'primary' => __( 'Primary Menu'),
'links' => __( 'Menu left'),
'rechts' => __( 'Menu right'),
'footer' => __( 'Footer'),
));



// custom header

$args = array(
	'flex-width'    => true,
	'width'         => 200,
	'flex-height'    => true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/images/Logo.png',
);
add_theme_support( 'custom-header', $args );

// Customize excerpt word count length
function custom_excerpt_length() {
	return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');

//Theme Setup
function lerenwordpress_setup() {
	
	
// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 1920, 800, true);
	
	// Add post format support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'lerenwordpress_setup');

// Add homepage to admin appearance customize screen

function rulu_home_body($wp_customize) {
	$wp_customize->add_section('rulu-home-body-section', array(
	'title' => 'Home Body'
	));
	
	$wp_customize->add_setting('rulu-home-body-headline', array(
		'default' => 'Example Headline Text!'
	));
	
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 
		'rulu-home-body-headline-control', array(
			'label' => 'Headline',
			'section' => 'rulu-home-body-section',
			'settings' => 'rulu-home-body-headline'
	)));
		
	$wp_customize->add_setting('rulu-home-body-text', array(
		'default' => 'Example Paragraph Text!'
	));
	
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 
		'rulu-home-body-text-control', array(
			'label' => 'Text',
			'section' => 'rulu-home-body-section',
			'settings' => 'rulu-home-body-text',
			'type' => 'textarea'
	)));
	
	$wp_customize->add_setting('rulu-home-body-button', array(
		'default' => 'Example Button Text!'
	));
	
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 
		'rulu-home-body-button-control', array(
			'label' => 'Button',
			'section' => 'rulu-home-body-section',
			'settings' => 'rulu-home-body-button'
	)));
	
	$wp_customize->add_setting('rulu-home-body-link');
	
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 
		'rulu-home-body-link-control', array(
			'label' => 'Link',
			'section' => 'rulu-home-body-section',
			'settings' => 'rulu-home-body-link',
			'type' => 'dropdown-pages'
	)));
	
	$wp_customize->add_setting('rulu-home-body-image1');
	
	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 
		'rulu-home-body-image1-control', array(
			'label' => 'Image1',
			'section' => 'rulu-home-body-section',
			'settings' => 'rulu-home-body-image1',
			'width' => 310,
			'height' => 235
	)));
	
	$wp_customize->add_setting('rulu-home-body-image2');
	
	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 
		'rulu-home-body-image2-control', array(
			'label' => 'Image2',
			'section' => 'rulu-home-body-section',
			'settings' => 'rulu-home-body-image2',
			'width' => 310,
			'height' => 235
	)));
	
	
	
	
}

add_action('customize_register', 'rulu_home_body');
