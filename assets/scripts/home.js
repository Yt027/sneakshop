document.addEventListener('DOMContentLoaded', function () {
  new Splide('.partner', {
    type: 'loop', // Boucle infinie
    drag: 'free', // Défilement fluide
    arrows: false, // Pas de flèches
    pagination: false, // Pas de pagination
    perPage: 5, // Nombre de logos visibles (desktop)
    autoScroll: {
      speed: 1, // Vitesse du défilement
      pauseOnHover: false, // Pas d'arrêt au survol
      pauseOnFocus: false // Pas d'arrêt au focus
    },
    breakpoints: {
      1200: { perPage: 4 }, // Grand écran
      992: { perPage: 3 }, // Tablette paysage
      768: { perPage: 2 }, // Tablette portrait
      480: { perPage: 1 } // Mobile
    }
  }).mount(window.splide.Extensions)
})
