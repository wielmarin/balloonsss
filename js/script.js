jQuery( document ).ready(function() {
	
	//jQuery.backstretch({"url":"/balloonsss/wp-content/uploads/2018/06/achtergrond-Balloonsss2.jpg", "width": 400, "scale":"fill"});

	// Scroll down homepage arrow	
	jQuery('#scrolldown').click(function() {
    jQuery('html,body').animate({
        scrollTop: jQuery(".container-about").offset().top
    }, 2000);
	});
	
	// Fix Menu on Scroll
	
var x = window.matchMedia("(min-width: 481px) and (max-width: 1100px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes 

	function myFunction(x) {
    if (x.matches) { // If media query matches
      
	  jQuery(function() {
		   jQuery(window).scroll(function () {
			  if (jQuery(this).scrollTop() > 125) {
				  jQuery('.flex-banner').css('margin-top','168px');
				  jQuery('.flex-banner-subpage').css('margin-top','168px');
				 jQuery('.site-header').css({'position': 'fixed', 'width': '85%', 'background': 'white', 'z-index':'9999'});
				 jQuery('.logo').hide();
			  }
			  if (jQuery(this).scrollTop() < 125) {
				 jQuery('.site-header').css({'position':'static', 'width':'100%', 'background':'none'});
				 jQuery('.logo').show();
				 jQuery('.flex-banner').css('margin-top','0px');
				 jQuery('.flex-banner-subpage').css('margin-top','0px');
			  }
		   });
		});
	  
    } else {
       
    }
}


	
	
	// Mobile menu
	
	jQuery('#mobilemenuopen').click(function() {
		jQuery('#mobilemenuopen').hide(),
		jQuery('#mobilehomelink').show(),
		jQuery('#close').show(),
		jQuery('.search-boxmobile').show(),
	jQuery('.frontnav-left').css({'border-top':'2px solid #EB4D66', 'padding-top':'10px'}),
		jQuery('.frontnav ul').show();
	});
	
	jQuery('#close').click(function() {
		jQuery('#mobilemenuopen').show(),
		jQuery('#mobilehomelink').hide(),
		jQuery('#close').hide(),
		jQuery('.search-boxmobile').hide(),
		jQuery('.frontnav-left').css({'border-top':'none', 'padding-top':'0px'}),
		jQuery('.frontnav ul').hide();
		
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
		sr.reveal('.drieblokken', { duration: 1800 });
		sr.reveal('.flexbox-contact', { duration: 1800 });
		
	
	// Portfolio
		
var Page = (function() {
				var $grid = $( '#bb-custom-grid' );
				return {
					init : function() {
						$grid.find( 'div.bb-bookblock' ).each( function( i ) {
							
							var $bookBlock = $( this ),
								bb = $bookBlock.bookblock( {
									speed : 600,
									shadows : false,
									circular : true
								} );
								
						// Next image on click
						
						$bookBlock.children().on( {
								'click' : function( event ) {
									$bookBlock.bookblock( 'next' );
									return false;
								},
		
							} );
							
		// Turn page met peiltjes
					// Block1		
					$('.next1').on( {
							'click' : function( event ) {
								$('#bb-bookblock1').bookblock( 'next' );
								return false;
							},
						} );
								
						$('.prev1').on( {
									'click' : function( event ) {
										$('#bb-bookblock1').bookblock( 'prev' );
										return false;
									},
			
								} );
							
						// Block2		
						$('.next2').on( {
								'click' : function( event ) {
									$('#bb-bookblock2').bookblock( 'next' );
									return false;
								},
							} );
									
							$('.prev2').on( {
										'click' : function( event ) {
											$('#bb-bookblock2').bookblock( 'prev' );
											return false;
										},
				
									} );	
							
				// Block3		
				$('.next3').on( {
						'click' : function( event ) {
							$('#bb-bookblock3').bookblock( 'next' );
							return false;
						},
					} );
							
					$('.prev3').on( {
								'click' : function( event ) {
									$('#bb-bookblock3').bookblock( 'prev' );
									return false;
								},
		
							} );

				// Block4		
				$('.next4').on( {
						'click' : function( event ) {
							$('#bb-bookblock4').bookblock( 'next' );
							return false;
						},
					} );
							
					$('.prev4').on( {
								'click' : function( event ) {
									$('#bb-bookblock4').bookblock( 'prev' );
									return false;
								},
		
							} );

						// Block5		
						$('.next5').on( {
								'click' : function( event ) {
									$('#bb-bookblock5').bookblock( 'next' );
									return false;
								},
							} );
									
							$('.prev5').on( {
										'click' : function( event ) {
											$('#bb-bookblock5').bookblock( 'prev' );
											return false;
										},
				
									} );

				// Block6		
				$('.next6').on( {
						'click' : function( event ) {
							$('#bb-bookblock6').bookblock( 'next' );
							return false;
						},
					} );
							
					$('.prev6').on( {
								'click' : function( event ) {
									$('#bb-bookblock6').bookblock( 'prev' );
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


