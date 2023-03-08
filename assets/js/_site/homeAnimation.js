const $ = jQuery.noConflict();
import { gsap } from "gsap";

'use strict';
const NavBtn = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
        gsap.to(".header__logo", {
            opacity: 1,
            duration: 1.2,
            y: 0, 
        });

        gsap.to(".menu-btn", {
            opacity: 1,
            duration: 1.2,
            top: "27%", 
        });

        gsap.to(".main-section__left-img", {
            opacity: 1,
            duration: 1.5,
            x: 0, 
        });

        gsap.to(".tab_link", {
            opacity: .2,
            duration: .4,
			delay: .4,
			stagger: .3,
			y: 0,
            ease: "Sine.easeOut"
        });

        gsap.from(".main-section__right-bottom-text", {
            opacity: 0,
            delay: 1.7,
            duration: 1,
            y: 0, 
        });
    }
};

export default NavBtn;
