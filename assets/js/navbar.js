window.onscroll = function () {

    scrollFunction()
}
function scrollFunction() {
    var sn = document.getElementById("sticky_nav");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        sn.style.top = "0"
    }
    else {
        sn.style.top = "-48px"
    }
}

$(document).ready(function () {
    $(".dropdown-trigger").dropdown();
});