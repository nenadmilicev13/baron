'use strict';

const NavBtn = {
    init: function () {
        const navBtn = document.querySelector('.js-menu-btn');
        const headerBox = document.querySelector('.header__container-box');
        const navLink = document.querySelectorAll('.tab_link');
        const overlay = document.querySelector('.content-overlay');

        navBtn.addEventListener('click', () => {
            // Ovde se proverava širina ekrana
            if (window.innerWidth > 768) {
                const isOverlayVisible = overlay.style.opacity === '1';

                if (!isOverlayVisible) {
                    overlay.style.display = 'block';
                    setTimeout(() => {
                        overlay.style.opacity = '1';
                    }, 10);
                } else {
                    overlay.style.opacity = '0';
                }
            }

            // Ovaj deo koda će se izvršavati nezavisno od širine ekrana
            navBtn.classList.toggle('open');
            headerBox.classList.toggle('open');
            navLink.forEach((link) => {
                link.classList.add('no-click');
            });
        });

         // Dodavanje event listenera za završetak tranzicije
         overlay.addEventListener('transitionend', function() {
            if (window.innerWidth > 768 && overlay.style.opacity === '0') {
                overlay.style.display = 'none';
            }
        });

        window.addEventListener('orientationchange', function() {
            const blocker = document.querySelector('.landscape-blocker');
            if (window.innerWidth <= 767 && (window.orientation === 90 || window.orientation === -90)) {
                // Uređaj je mobilni telefon u landscape modu
                blocker.style.display = 'flex';
            } else {
                // Uređaj nije mobilni telefon u landscape modu
                blocker.style.display = 'none';
            }
        });
        
    }
};

export default NavBtn;

