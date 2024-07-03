document.addEventListener('DOMContentLoaded', function () {
    var video = document.querySelector('.banner-video');
    var bannerFallback = document.querySelector('.banner-fallback');
  
    if (video && bannerFallback) {
      // Ajouter un délai de 1 seconde (1000 millisecondes) avant de masquer la bannerFallback
      setTimeout(function () {
        bannerFallback.style.display = 'none';
      }, 3000);
    }
  });
  