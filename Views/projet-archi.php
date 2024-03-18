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
    <title>Page Projet Architecture</title>
</head>

<body class="projet-archi">

    <?php
    include "../Templates/navbar-desktop.php"
        ?>

    <div class="faitInteressant">
        <div class="row">
            <h3 class="col s3">Quelques faits interessants</h3>
            <div class="col s3">
                <h3>147</h3>
                <h5>Projets</h5>
            </div>
            <div class="col s3">
                <h3>117</h3>
                <h5>Clients satisfaits</h5>
            </div>
            <div class="col s3">
                <h3>7</h3>
                <h5>Années d'experiences</h5>
            </div>
        </div>
    </div>

    <div class="container">
        <h3>Nos Projets Architecture</h3>
    </div>

    <div class="tableau-projet">

        <div class="row">

            <div class="col s6 m4 l4">
                <a href="../Views/projet-archi/odysée-urbain.php">
                    <img class="responsive-img" src="../assets/projet-archi/rendu-final-1.jpg"
                        alt='Image de présentation du projet'>
                    <h5>Odysée - Urbain</h5>
                </a>

            </div>

            <div class="col s6 m4 l4">
                <a href="#">
                    <img class="responsive-img" src="../assets/projet-archi/teste-lum_1-Photo.jpg"
                        alt='Image de présentation du projet'>
                    <h5>Tersiaire - ERP</h5>
                </a>
            </div>

            <div class="col s6 m4 l4">
                <a href="#">
                    <img class="responsive-img" src="../assets/projet-archi/SUITE_6 -Photo.jpg"
                        alt='Image de présentation du projet'>
                    <h5>Observatoir - Habitat</h5>
                </a>
            </div>

            <div class="col s6 m4 l4">
                <a href="#">
                    <img class="responsive-img" src="../assets/projet-archi/Lodge(5).jpg"
                        alt='Image de présentation du projet'>
                    <h5>Lodge - hôtellerie</h5>
                </a>
            </div>

            <div class="col s6 m4 l4">
                <a href="#">
                    <img class="responsive-img" src="../assets/projet-archi/ime(9).jpg"
                        alt='Image de présentation du projet'>
                    <h5>IME - Scolaire</h5>
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