const $ = jQuery.noConflict();
import { gsap } from "gsap";
'use strict';
const SubMenu = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
        const list = document.querySelectorAll('.list');
		let subMenu = document.querySelectorAll('.main-section__right-submenu');
		let tabLink = document.querySelectorAll('.tab_link');
		let subMenuLink = document.querySelectorAll('.main-section__right-submenu-link');

		let linkWomen = document.querySelector("#link-w");

		setTimeout(() => {
			linkWomen.classList.add('active');
		}, "400");

		console.log(linkWomen);

        list.forEach(tabL => {
            tabL.addEventListener('click', (tab) => {
				tabLink.forEach(link => {
					link.classList.remove('active');
					tabL.children[0].classList.add('active');
				});

				subMenu.forEach(item => {
					item.classList.remove('sub-active');
					tabL.children[1].classList.add('sub-active');
				});
            });
        })

		gsap.to(subMenuLink, {
            opacity: 1,
            duration: 0.3,
			delay: 1.9,
			stagger: .3,
			y: 0,
            ease: "Sine.easeOut"
        });
		
	}
};

export default SubMenu;


