
import Sliders from './_site/sliders';
import Hero from './_site/hero';
import SubMenu from './_site/subMenu';
import NavBtn from './_site/navBtn';
import SubMenuAnimation from './_site/SubMenuAnimation';
import HomeAnimation from './_site/homeAnimation';



jQuery(function () {
	// Slick Slider
	Sliders.init();

	// HomeAnimation
	HomeAnimation.init();

	// Hero
	Hero.init();

	// SubMenu
	SubMenu.init();

	// NavBtn
	NavBtn.init();

	// SubMenuAnimation
	SubMenuAnimation.init();

	// console.log('hello');
});
