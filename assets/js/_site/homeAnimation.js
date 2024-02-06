import { gsap } from "gsap";

'use strict';
const HomeAnimation = {
  // Metoda za animaciju
  animate: function() {

    // Zakazivanje sledećeg frejma
    requestAnimationFrame(this.animate.bind(this));
  },

  init: function () {
    // Caching selectors
    const logoElement = document.querySelector('.header__logo');
    const menuBtnElement = document.querySelector('.menu-btn');


    // Animation for logo
    if (logoElement) {
      gsap.to(logoElement, {
        opacity: 1,
        duration: 1,
        y: 0,
      });
    }

    // Animation for menu button
    if (menuBtnElement) {
      gsap.to(menuBtnElement, {
        opacity: 1,
        duration: 1.2,
      });
    }
  }
};

export default HomeAnimation;
