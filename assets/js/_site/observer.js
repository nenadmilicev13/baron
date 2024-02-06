'use strict';

const Observer = {
  init: function () {
    if (window.innerWidth <= 768) {
      return;
    }

    // Element na koji se dodaje klasa 'white'(display: 'none')
    const navButton = document.querySelector('.menu-btn');
    
    // Logo koji menja boju
    const logo = document.querySelector('.logo');

    // Početno postavljanje loga na belu boju
    logo.style.filter = 'invert(1)';

    // Element dark-theme sekcije
    const darkThemeSection = document.querySelector('.dark-background');

    // Opcije za Intersection Observer
    const options = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1,
    };

    // Callback funkcija za navButton
    
    const navCallback = function (entries, observer) {
      if (window.innerWidth > 1024) {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            navButton.classList.add('white');
          } else {
            navButton.classList.remove('white');
          }
        });
      }
      
    };

    // Callback funkcija za promenu boje loga
    const logoCallback = function (entries, observer) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // Ako je dark-theme element koji se sece sa viewportom
          logo.style.filter = 'invert(0)';
        } else {
          // Ako dark-theme element više nije sečen sa viewportom
          logo.style.filter = 'invert(1)';
        }
      });
    };

    // Lista putanja stranica koje ne trebaju Observer
    const excludedPages = ['/'];
    // Provjera da li se trenutna putanja nalazi na listi isključenih stranica
    const isExcludedPage = excludedPages.includes(window.location.pathname);

    // Kreiranje Intersection Observer instance samo ako nije isključena stranica
    if (!isExcludedPage) {
      // Kreiranje Intersection Observer instance za navButton
      const navObserver = new IntersectionObserver(navCallback, options);
      // Kreiranje Intersection Observer instance za logo
      const logoObserver = new IntersectionObserver(logoCallback, options);

      // Početak praćenja targetElement-a za navButton
      const targetElement = document.querySelector('.site-footer');
      if (targetElement) {
        navObserver.observe(targetElement);
      }

      // Početak praćenja darkThemeSection-a za logo
      if (darkThemeSection) {
        logoObserver.observe(darkThemeSection);
      }
    }
  }
};

export default Observer;
