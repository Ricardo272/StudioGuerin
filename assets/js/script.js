const slider = document.querySelector('.gallery');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', e => {
    isDown = true;
    slider.classList.add('active');
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
});
slider.addEventListener('mouseleave', _ => {
    isDown = false;
    slider.classList.remove('active');
});
slider.addEventListener('mouseup', _ => {
    isDown = false;
    slider.classList.remove('active');
});
slider.addEventListener('mousemove', e => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const SCROLL_SPEED = 3;
    const walk = (x - startX) * SCROLL_SPEED;
    slider.scrollLeft = scrollLeft - walk;
});

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