const $ = jQuery.noConflict();

'use strict';
const Hero = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
        const tabLink = document.querySelectorAll('.tab_link');

        tabLink.forEach(element => {
            element.addEventListener("click", (event) => {
                let activeLinkId = event.target.getAttribute("data-image");
                let mainSectionLeftImage = document.querySelectorAll('.main-section__left img');
                document.body.style.backgroundColor = event.target.getAttribute("data-color");   
                mainSectionLeftImage.forEach(image => {
                    image.classList.remove("active");
                    if(activeLinkId === image.getAttribute('id')) {
                        image.classList.add('active');
                    }
                })
            });
        });
	}
};

export default Hero;
