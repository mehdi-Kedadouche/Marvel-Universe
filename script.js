/*menu burger*/

document.addEventListener("DOMContentLoaded", function () {
  // Récupérer les éléments du DOM
  var sidenav = document.getElementById("mySidenav");
  var openBtn = document.getElementById("openBtn");
  var closeBtn = document.getElementById("closeBtn");

  // Ajouter des écouteurs d'événements pour gérer le menu burger
  openBtn.addEventListener("click", openNav);
  closeBtn.addEventListener("click", closeNav);

  // Définir la largeur de la navigation latérale à 250px
  function openNav() {
    sidenav.classList.add("active");
  }

  // Définir la largeur de la navigation latérale à 0
  function closeNav() {
    sidenav.classList.remove("active");
  }
});


/**boutton remonter  */

// JavaScript pour remonter en haut de page
// Sélection de l'élément button
var btn = document.getElementById('button');

// Ajout d'un gestionnaire d'événement scroll à la fenêtre
window.addEventListener('scroll', function() {
  // Vérification de la position de défilement de la fenêtre
  if (window.scrollY > 300) {
    // Ajout de la classe 'show' si la position de défilement est supérieure à 300
    btn.classList.add('show');
  } else {
    // Retrait de la classe 'show' sinon
    btn.classList.remove('show');
  }
});

// Ajout d'un gestionnaire d'événement click au bouton
btn.addEventListener('click', function(e) {
  e.preventDefault();

  // Animation du défilement vers le haut
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

