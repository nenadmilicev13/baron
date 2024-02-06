import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

'use strict';

const Gsap = {
  init: function () {
    this.animateBody();
    this.animateSectionHeadTitle();
    this.animateMainSection();
  },

  animateBody: function () {
    const body = document.querySelector(".site-main");
    if (body) {
      gsap.to(body, {
        opacity: 1,
        delay: 0.3,
        duration: 1,
      });
    }
  },

  animateSectionHeadTitle: function () {
    const sectionHeadTitle = document.querySelector('.section-head__title');
    if (sectionHeadTitle) {
      gsap.to(sectionHeadTitle, {
        y: '0%',
        duration: 0.6,
        onComplete: () => {
          const sectionHeadSubtitles = document.querySelectorAll('.section-head__subtitle');
          sectionHeadSubtitles.forEach((sectionHeadSubtitle, index) => {
            gsap.to(sectionHeadSubtitle, {
              opacity: 1,
              duration: 0.7,
              delay: index * 0.2,
              onComplete: () => {
                const back = document.querySelector('.banner__content-back');
                if (back) {
                  gsap.to(back, {
                    opacity: 1,
                    duration: 0.28,
                    y: 0,
                    onComplete: () => {
                      const bannerImages = document.querySelectorAll('.fade-in');
                      this.animateImages(bannerImages);
                    }
                  });
                }
              }
            });
          });
        }
      });
    }
  },

  animateMainSection: function () {

    const element = document.querySelector('.main-section__hero-image-line');
    if (element) {
      gsap.from('.main-section__hero-image-line', {
        duration: 1,
        delay: 1.8,
        opacity: 0,
        scale: 0.9,
        ease: "power2.out"
      });

      gsap.from('.main-section__hero-image-main', {
        duration: .5,
        delay: .5,
        opacity: 0,
        scale: 0.9,
        ease: "power2.out"
      });

      gsap.from('.main-section__title', {
        duration: 1.6,
        delay: 1.4, 
        opacity: 0,
        y: 20,
        ease: "power2.out"
      });
  
      gsap.from('.main-section__title span', {
        duration: 1.6,
        delay: 1.6,
        opacity: 0,
        scale: 1.02,
        ease: "power2.out"
      });
  
      gsap.from('.main-section__since', {
        duration: 1,
        delay: .7,
        opacity: 0,
        ease: "power2.out"
      });
  
      gsap.from('.main-section__signature', {
        duration: 3,
        delay: 1.1,
        opacity: 0,
        ease: "power2.out"
      });
    }
  }
};

export default Gsap;
