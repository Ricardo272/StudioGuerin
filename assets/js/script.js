// Récupérez tous les éléments d'image par leur classe
let elems = document.getElementsByClassName("fullscreen");

// Itérez sur la liste des éléments
for (let i = 0; i < elems.length; i++) {
    let elem = elems[i];

    // Ajoutez un gestionnaire d'événements pour le clic sur chaque image
    elem.addEventListener('click', () => {
        if (document.fullscreenElement) {
            // Si l'image est déjà en mode plein écran, désactivez-le
            document.exitFullscreen();
        } else {
            // Sinon, activez le mode plein écran pour l'image
            elem.requestFullscreen();
        }
    });
}

document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.collapsible');
    M.Collapsible.init(elems);
});

