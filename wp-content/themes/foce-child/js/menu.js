// JavaScript pour le menu burger
console.log("le script lancé est burger.js");
/*Ouverture menu*/

const boutonMenu = document.querySelector('.boutonBurger');
const     burger = document.querySelector('.fullScreen');

boutonMenu.addEventListener('click', () => {
burger.classList.toggle('nav_open');
boutonMenu.classList.toggle('active');
});

    
/*Fermeture menu sur click lien*/

const menuLinks = document.querySelectorAll('.fullScreen ul li a');

menuLinks.forEach(link => {
    link.addEventListener('click', () => {
        burger.classList.remove('nav_open');
        boutonMenu.classList.remove('active');
    })});