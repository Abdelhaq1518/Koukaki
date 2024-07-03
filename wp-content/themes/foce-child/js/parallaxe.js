const effetParallaxeLogo = document.querySelector('.banner-logo');
const effetParallaxeTexte = document.querySelector('.parallax__layer');

window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;
    const maxTranslationY = 250;

    if (scrollY <= maxTranslationY) {
        effetParallaxeLogo.style.transform = `translateY(${scrollY}px)`;
        effetParallaxeTexte.style.transform = `translateY(${scrollY / 2}px)`; // Ajustez la vitesse de défilement du texte selon vos préférences
    } else {
        // Ajoutez un style pour réinitialiser la transformation si nécessaire
        effetParallaxeLogo.style.transform = 'translateY(0)';
        effetParallaxeTexte.style.transform = 'translateY(0)';
    }
});
