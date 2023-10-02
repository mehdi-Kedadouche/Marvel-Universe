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
