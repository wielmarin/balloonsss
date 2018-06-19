jQuery( document ).ready(function() {
	
	//jQuery.backstretch({"url":"/balloonsss/wp-content/uploads/2018/06/achtergrond-Balloonsss2.jpg", "width": 400, "scale":"fill"});

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
	
	
	// Product Views
	
	jQuery('.ballonnenboog').click( function() {
		jQuery('#productimage').attr('src', '/balloonsss/wp-content/uploads/2018/06/Ballonnenboog-hart.jpg')
	});
	
	jQuery('.ballonnenpilaar').click( function() {
		jQuery('#productimage').attr('src', '/balloonsss/wp-content/uploads/2018/06/Ballonnenpilaar-roze-meisje-1.jpg')
	});
	
	jQuery('.losse').click( function() {
		jQuery('#productimage').attr('src', '/balloonsss/wp-content/uploads/2018/06/Losse-ballonnen-e1529072330891.jpg')
	});
	
	jQuery('.ballonen3').click( function() {
		jQuery('#productimage').attr('src', '/balloonsss/wp-content/uploads/2018/06/Banner-idee-e1529071504279.jpg')
	});
	
	jQuery('.ballonnen5').click( function() {
		jQuery('#productimage').attr('src', '/balloonsss/wp-content/uploads/2018/06/Tros-metallic-ballonnen-verjaardag-e1529072618773.jpg')
	});
	
	jQuery('.ballonnen7').click( function() {
		jQuery('#productimage').attr('src', '/balloonsss/wp-content/uploads/2018/06/Tros-ballonnen-verjaardag-1.jpg')
	});
	
	jQuery('.ballonnen3f2l').click( function() {
		jQuery('#productimage').attr('src', '/balloonsss/wp-content/uploads/2018/06/Folie-ballon-goude-ster.jpg')
	});
	
	jQuery('.topballon').click( function() {
		jQuery('#productimage').attr('src', '/balloonsss/wp-content/uploads/2018/06/Ballon-kerst.jpg')
	});
	
	jQuery('.folieballon').click( function() {
		jQuery('#productimage').attr('src', '/balloonsss/wp-content/uploads/2018/06/Ballon-cijfer-2.jpg')
	});
	
	jQuery('.ballonnenhart').click( function() {
		jQuery('#productimage').attr('src', '/balloonsss/wp-content/uploads/2018/06/Ballonnenhart-rood.jpg')
	});
	
	
	
	// ScrollReveal
	
	window.sr = ScrollReveal();
		sr.reveal('.flexbox-item1', { duration: 1800 });
		sr.reveal('.flexbox-item2', { duration: 1800 });
		sr.reveal('.sp', { duration: 1800 });
		sr.reveal('.flexbox-home-overmij', { duration: 1800 });
		sr.reveal('.cta', { duration: 1800 });
		sr.reveal('.flexbox-item-producten', { duration: 1800 });
	
	// Portfolio
		
var Page = (function() {
				var $grid = $( '#bb-custom-grid' );
				return {
					init : function() {
						$grid.find( 'div.bb-bookblock' ).each( function( i ) {
							
							var $bookBlock = $( this ),
								$nav = $bookBlock.next().children( 'span' ),
								bb = $bookBlock.bookblock( {
									speed : 600,
									shadows : false
								} );
								
							// add navigation events
							$nav.each( function( i ) {
								$( this ).on( 'click touchstart', function( event ) {
									var $dot = $( this );
									$nav.removeClass( 'bb-current' );
									$dot.addClass( 'bb-current' );
									$bookBlock.bookblock( 'jump', i + 1 );
									return false;
								} );
							} );
							
						// Next image on click !!Veranderd puntjes niet!!
						
						$bookBlock.children().on( {
								'click' : function( event ) {
									$bookBlock.bookblock( 'next' );
									return false;
								},
		
							} );
							
							
							// add swipe events
							$bookBlock.children().on( {
								'swipeleft' : function( event ) {
									$bookBlock.bookblock( 'next' );
									return false;
								},
								'swiperight' : function( event ) {
									$bookBlock.bookblock( 'prev' );
									return false;
								}
							} );
							
						} );
					}
				};
			})();

				Page.init();

	
	/* Ready Function Close */
	
	
});


