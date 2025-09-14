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
      1200: { perPage: 5 }, // Grand écran
      800: { perPage: 4 }, // Tablette paysage
      620: { perPage: 3 }, // Tablette portrait
      // 430: { perPage: 3 } // Mobile
    }
  }).mount(window.splide.Extensions)
})
