import Swiper from "swiper/bundle";

("use strict");

const Sliders = {
  init: function () {
    if (window.matchMedia("(max-width: 1024px)").matches) {
      const swipers = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          dynamicBullets: true,
        },
      });

      const swiper3 = new Swiper('.swiper-container3', {
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          dynamicBullets: true,
        },
      });
    }
    const swiper4 = new Swiper('.swiper-container-gallery', {
      slidesPerView: 1,
      spaceBetween: 30,
      grabCursor: true,
      // centeredSlides: true,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
      },

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      
      keyboard: {
        enabled: true,
      },
    });
  },
};

export default Sliders; 