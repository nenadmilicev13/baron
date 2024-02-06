
import LazyLoader from './_site/lazy-load';
import NavBtn from './_site/navBtn';
import Sliders from './_site/sliders';
import HomeAnimation from './_site/homeAnimation';
import Observer from './_site/observer';
import Gsap from './_site/gsap';
import Tes from './_site/tes';
import Gallery from './_site/gallery';
import Lottie from './_site/lottie';

document.addEventListener('DOMContentLoaded', () => {
	LazyLoader.init();
	NavBtn.init();
	Sliders.init();
	HomeAnimation.init();
	Observer.init();
	Gsap.init();
	Tes.init();
	Gallery.init();
	Lottie.init();
});
