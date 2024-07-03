//console.log(" Message dans la console, pour vérifier que le JavaScript est fonctionnel ")
console.log(" le script javascript est floatingLogo.js ");

document.addEventListener("DOMContentLoaded", function() {
  // Une fois que la page HTML est totalement chargée, nous allons ajouter les propriétés de style avec un délai de 3 secondes
  setTimeout(function() {
    var element = document.getElementById("floatingLogo"); // Sélectionnez l'élément que vous souhaitez modifier par son ID
    element.style.animation = "logoFloating 1s ease-in-out infinite"; // Ajoutez l'animation à l'élément
  }, 1500); // Le délai est en millisecondes (3 secondes équivaut à 3000 millisecondes)
});

