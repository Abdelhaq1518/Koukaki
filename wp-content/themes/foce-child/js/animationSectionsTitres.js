
// Animation des titres de section au scroll
const observer = new IntersectionObserver(entries => {
  // Boucle pour chaque entrée
  entries.forEach(entry => {
    // si l'élément est visible
    if (entry.isIntersecting) {
      // ajouter la classe 
      entry.target.classList.add("animPart1");
    }
      else {
      // supprimer la classe 
      entry.target.classList.remove("animPart1");
      }
  });
  });
   
    // Première partie du titre
    const sections = document.querySelectorAll(".title-part1")
      sections.forEach(section => {
      observer.observe(section);
    });  
  
    const observer2 = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("animPart2");
        }
          else {
          entry.target.classList.remove("animPart2");
          }
      });
    });
  
    // Deuxième partie du titre
    const sections2 = document.querySelectorAll(".title-part2")
      sections2.forEach(section => {
      observer2.observe(section);  
    });