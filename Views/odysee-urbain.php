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

            <div class="col s6 m4 l4">
                <a href="../Views/odysee-urbain.php">
                    <img class="responsive-img" src="../assets/projet-archi/isometrie1.png" alt="Carte de stratégie">
                </a>

            </div>

            <div class="col s6 m4 l4">
                <a href="#">
                    <img src="../assets/projet-archi/plan-masse-commun.png" alt='Image plan masse commun'>
                </a>
            </div>

            <div class="col s6 m4 l4">
                <a href="#">
                    <img src="../assets/projet-archi/plan-masse.jpg" alt='Image plan masse'>
                </a>
            </div>

            <div class="col s6 m4 l4">
                <a href="#">
                    <img src="../assets/projet-archi/iso-colo.jpg" alt='Image iso colo'>
                </a>
            </div>

            <div class="col s6 m4 l4">
                <a href="#">
                    <img class="responsive-img" src="../assets/projet-archi/ime(9).jpg"
                        alt='Image de présentation du projet'>
                </a>
            </div>

            <div class="col s6 m4 l4">
                <a href="#">
                    <img class="responsive-img" src="../assets/projet-archi/otakup(11).jpg"
                        alt='Image de présentation du projet'>
                    <h5>Otaku - Bibliothéque</h5>
                </a>
            </div>

        </div>
    </div>


    <?php
    include "../Templates/footer-desktop.php"
        ?>
</body>


</html>