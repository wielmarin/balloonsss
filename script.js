/*! slides | https://gist.github.com/mhulse/66bcbb7099bb4beae530 */
(function($) {
	
	'use strict';
	
	var $slides = $('[data-slides]');
	var images = $slides.data('slides');
	var count = images.length;
	var slideshow = function() {
		$slides
			.css('background-image', 'url("' + images[Math.floor(Math.random() * count)] + '")')
			.show(0, function() {
				setTimeout(slideshow, 5000);
			});
	};
	
	slideshow();
	
}(jQuery));

/*! slides | https://gist.github.com/mhulse/66bcbb7099bb4beae530 */
!function(t){"use strict";var a=t("[data-slides]"),s=a.data("slides"),e=s.length,n=function(){a.css("background-image",'url("'+s[Math.floor(Math.random()*e)]+'")').show(0,function(){setTimeout(n,5e3)})};n()}(jQuery);
