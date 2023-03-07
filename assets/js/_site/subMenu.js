const $ = jQuery.noConflict();

'use strict';
const SubMenu = {

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
        const list = document.querySelectorAll('.list');
		let subMenu = document.querySelectorAll('.main-section__right-submenu');
		let tabLink = document.querySelectorAll('.tab_link');

        list.forEach(tabL => {
            tabL.addEventListener('click', (tab) => {

				tabLink.forEach(link => {
					link.classList.remove('active');
					tabL.children[0].classList.add('active');
				});

				subMenu.forEach(item => {
					item.classList.remove('active');
					tabL.children[1].classList.add('active');
				});
            });
        })
	}
};

export default SubMenu;
