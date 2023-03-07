const $ = jQuery.noConflict();

'use strict';
const Sliders = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		var slider = $('.js-slider');
		
		// slider
		slider.slick({
			slidesToShow: 1,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 1,
					}
				}
			]
		});

	}
};

export default Sliders;
