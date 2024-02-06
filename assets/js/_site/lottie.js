import lottieWeb from 'lottie-web/build/player/lottie_light';

'use strict';

const Lottie = {
    init: function () {
        const lottieContainer = document.getElementById('lottie-signature');
        if (lottieContainer) {
            // setTimeout za odloženo pokretanje animacije
            setTimeout(() => {
                lottieWeb.loadAnimation({
                    container: lottieContainer,
                    path: '/baron/wp-content/themes/baron/assets/video/signature.json',
                    renderer: 'svg',
                    loop: false,
                    autoplay: true,
                });
                // console.log('Lottie animation should be loaded now.');
            }, 1000); // Kašnjenje od 2000 milisekundi (2 sekunde)
        } 
    }
};

export default Lottie;




