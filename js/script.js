jQuery( document ).ready(function() {
	
	jQuery.backstretch("/balloonsss/wp-content/uploads/2018/06/achtergrond-Balloonsss-e1528818100120.jpg");
	jQuery(".flex-banner-image").backstretch(['http://www.quiropracticopromover.es/wp-content/themes/Promover/beelden2/Wediingredb.jpg', 'http://www.quiropracticopromover.es/wp-content/themes/Promover/beelden2/Balloonssky.jpg', 'http://www.quiropracticopromover.es/wp-content/themes/Promover/beelden2/weddingballoons.jpg', 'http://www.quiropracticopromover.es/wp-content/themes/Promover/beelden2/weddingcake.jpg', 'http://www.quiropracticopromover.es/wp-content/themes/Promover/beelden2/weddingday.jpg'],{duration:3000, transition:'cover_left', transitionDuration:2000, transitionEasing:'swing', animateFirst:false});
	

	// Scroll down homepage arrow	
	jQuery('#scrolldown').click(function() {
    jQuery('html,body').animate({
        scrollTop: jQuery(".container-about").offset().top
    }, 2000);
	});
	
	
	// Contact button
	
	jQuery('.contact-onscroll-open-tekst1').click(function() {
		jQuery('.contact-onscroll-open').animate({right: '-85px'}, 800);
	});
	
	jQuery('#closecontact').click(function() {
		jQuery('.contact-onscroll-open').animate({right: '-315px'}, 800);
	});
	
	
	// ScrollReveal
	
	window.sr = ScrollReveal();
		sr.reveal('.flexbox-item1', { duration: 1800 });
		sr.reveal('.flexbox-item2', { duration: 1800 });
		sr.reveal('.sp', { duration: 1800 });
		sr.reveal('.flexbox-home-overmij', { duration: 1800 });
		sr.reveal('.cta', { duration: 1800 });
		sr.reveal('.flexbox-item-producten', { duration: 1800 });
	
	/* Ready Function Close */
	
	
});