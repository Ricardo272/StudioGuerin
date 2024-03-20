<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Page projet Odysée - Urbain</title>
</head>


<body class="projets">

    <?php
    include "../Templates/navbar-desktop.php"
        ?>

    <div class="tableau-projet">

        <div class="row">

            <div class="col s12 m6 l4">
                <img class="responsive-img" src="../assets/projet-archi/rendu-final-1.jpg"
                    alt='Image de présentation du projet'>
                <ul class="collapsible popout">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                </ul>
            </div>
            <div class="col s12 m6 l4">
                <img class="responsive-img" src="../assets/projet-archi/isometrie1.png" alt="Carte de stratégie">
                <ul class="collapsible popout">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                </ul>
            </div>

            <div class="col s12 m12 l4">
                <img class="responsive-img" src="../assets/projet-archi/plan-masse-commun.png"
                    alt='Image plan masse commun'>
                <ul class="collapsible popout">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                </ul>
            </div>

            <div class="col s12 m6 l4">
                <img class="responsive-img" src="../assets/projet-archi/plan-masse.jpg" alt='Image plan masse'>
                <ul class="collapsible popout">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                </ul>
            </div>

            <div class="col s12 m6 l4">
                <img class="responsive-img" src="../assets/projet-archi/iso-colo.jpg" alt='Image iso colo'>
                <ul class="collapsible popout">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                </ul>
            </div>

            <div class="col s12 m12 l8">
                <img class="responsive-img" src="../assets/projet-archi/Facadepsdnord.jpg"
                    alt='Image de présentation du projet'>
                <ul class="collapsible popout">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                </ul>

                <img class="responsive-img" src="../assets/projet-archi/coupe.jpg"
                    alt='Image de présentation du projet'>
                <ul class="collapsible popout">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <script src="../assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <?php
    include "../Templates/footer-desktop.php"
        ?>
</body>


</html>