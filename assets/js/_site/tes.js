import LocomotiveScroll from 'locomotive-scroll';

const Tes = {
  scrollInstance: null,

  updateScrollDirectionAttribute: function (isLandscape) {
    document.documentElement.setAttribute('data-scroll-direction', isLandscape ? 'horizontal' : 'vertical');
  },

  init: function () {
    const scrollContainer = document.querySelector('[data-scroll-container]');

    const initializeScroll = () => {
      // Provera da li postoji scrollContainer
      if (!scrollContainer) {
        // console.log('Scroll container not found, LocomotiveScroll not initialized.');
        return; // Prekida izvršavanje ako scrollContainer ne postoji
      }

      const screenWidth = window.innerWidth;
      const screenHeight = window.innerHeight;
      const isLandscape = screenWidth > screenHeight;

      // Ažuriranje HTML atributa
      this.updateScrollDirectionAttribute(isLandscape);

      if (this.scrollInstance) {
        this.scrollInstance.destroy();
        this.scrollInstance = null;
        // console.log('LocomotiveScroll instance destroyed.');
      }

      if (screenWidth >= 1025) {
        // Inicijalizacija LocomotiveScroll samo ako je ekran širi od 1024px
        let scrollOptions = {
          el: scrollContainer,
          smooth: true,
          direction: isLandscape ? 'horizontal' : 'vertical',
          // multiplier: .1
        };

        // console.log('Initializing LocomotiveScroll with options:', scrollOptions);
        this.scrollInstance = new LocomotiveScroll(scrollOptions);
        // console.log('LocomotiveScroll instance initialized.');
      } else {
        // console.log('Screen width is less than 1025px, LocomotiveScroll is not initialized.');
        // Ovde možete dodati dodatnu logiku ako je potrebno da se nešto uradi kada nije inicijalizovan LocomotiveScroll
      }
    };

    // Debounce funkcija
    const debounce = (func, wait, immediate) => {
      let timeout;
      return function() {
        const context = this, args = arguments;
        const later = function() {
          timeout = null;
          if (!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
      };
    };

    // Inicijalizacija pri prvom učitavanju
    initializeScroll();

    // Event listener za resize sa debounce
    window.addEventListener('resize', debounce(initializeScroll, 250));
  },
};

export default Tes;
