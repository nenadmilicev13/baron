'use strict';
const Gallery = {
    init: function () {
        const galleryIcon = document.querySelector('.gallery-icon');
        const closePopup = document.querySelector('.close-popup');
        const galleryPopup = document.getElementById('galleryPopup');

        if (galleryIcon && galleryPopup) {
            galleryIcon.addEventListener('click', function () {
                galleryPopup.style.display = 'block';

                // Nakon što se galerija otvori, postavi src atribute na data-src za sve slike
                const lazyImages = document.querySelectorAll('.gallery-item img.lazy');
                lazyImages.forEach(function (lazyImage) {
                    lazyImage.setAttribute('src', lazyImage.getAttribute('data-src'));
                });
            });
        }

        if (closePopup && galleryPopup) {
            closePopup.addEventListener('click', function () {
                galleryPopup.style.display = 'none';
            });
        }
    }
};
export default Gallery;