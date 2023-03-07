const $ = jQuery.noConflict();
import { gsap } from "gsap";

'use strict';
const NavBtn = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
    // const navBtn = document.querySelector('.js-menu-btn');
    // const headerBox = document.querySelector('.header__container-box');
    
    //     navBtn.addEventListener('click', () => {
    //         navBtn.classList.toggle('open');
    //         headerBox.classList.toggle('open');
    //     })

        var menuToggle = document.querySelector(".js-menu-btn");

        var navTl = gsap.timeline({ paused:true });
        
        navTl.to('.header__container-box', {
            duration: 0,
            y: "0%",
        },"<");       
        
        navTl.from('.menu-link a', {
            delay: .5,
            duration: 1,
            y: "100%",
            stagger:0.2,
            ease: "Power4.easeOut" 
        });
        
        navTl.reverse();
        
        menuToggle.addEventListener('click', function(){
            navTl.reversed(!navTl.reversed());
            menuToggle.classList.toggle('open');
        })


    }
};

export default NavBtn;
