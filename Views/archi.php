<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>Document</title>
</head>

<body class="archi">
    <?php
    include "../Templates/navbar-desktop.php"
        ?>
    <div class="container">
        <h3>Nos Projets Architecture</h3>
    </div>

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


    <ul class="gallery">
        <li>
            <div class="container">
                <div>
                    <div class="titre">
                        <p class="valign-wrapper">[2023 - 2024]</p>
                        <h4>
                            Odysée - Urbain
                        </h4>
                    </div>

                    <div class="right-align">
                        <p>
                            Aménagement d’un
                            parc résidentiel avec
                            la construction de
                            logements collectifs.
                        </p>
                    </div>

                </div>
            </div>

            <div class="valign-wrapper">BRON [69]
                Analyse urbaine
            </div>

            <div class="row">
                <p class="col s12 m8 l8">
                    ¹ Ce projet vise à élaborer un plan directeur pour la ville de Bron, proposant
                    un nouvel aménagement urbain attentif aux besoins des citadins. Dans
                    cette nouvelle ère, l’humanité est confrontée à de multiples menaces
                    qui pourraient potentiellement entraîner l’extinction de toutes les
                    formes de vie sur la planète Gaia, à long terme (bien que cette notion
                    soit relative par rapport à notre existence dans l’échelle temporelle).

                    <br>
                    <br>


                    ² Il devient impératif de prendre conscience et de comprendre le fonctionnement
                    de notre zone critique afin de proposer des solutions durables pour le
                    développement. Dans ce cas d’étude spécifique, les menaces identifiées
                    soulignent des opportunités qu’il est essentiel de saisir pour atteindre les
                    objectifs énoncés. Il sera nécessaire de proposer des idées novatrices
                    pour la conception de la ville, en cherchant à l’améliorer par une réflexion
                    approfondie. La centralité repose sur la diversité et l’abondance des individus
                    qui composent la société, ainsi que sur les fonctions qui façonnent l’économie.
                </p>

                <p class="col s12 m4 l4">
                    ³ Les lieux de centralité, superposés ou juxtaposés aux dimensions de
                    nœud et de pôle, contribuent à la création du phénomène urbain. Dans
                    ce schéma, les lieux de centralité sont intrinsèquement liés aux pôles,
                    qui attirent et concentrent les flux de personnes et de biens, ainsi qu’aux
                    nœuds (comme l’avenue Salengro), qui facilitent l’accès aux lieux de
                    centralité et de polarité.et de biens, ainsi qu’aux nœuds (comme l’avenue
                    Salengro), qui facilitent l’accès aux lieux de centralité et de polarité.
                </p>

            </div>
            <div class="row">
                <span class="col s6">
                    <p>ISOMÉTRIE TOPOGRAPHIQUE - Carte de stratégie </p>
                    <p>Illustrator-Auto CAD </p>
                </span>

                <p class="col s6 right-align">Piéce graphique: Guerin Kelliane / Tom Soule-Beaud</p>
            </div>

            <img id="image" class="responsive-img" src="../assets/projet-archi/isometrie1.png" alt="Carte de stratégie">
        </li>
        <li style="background: #f7ede2;"></li>
        <li style="background: #f5cac3;"></li>
        <li style="background: #84a59d;"></li>
        <li style="background: #f28482;"></li>
    </ul>


    <!-- <img class="responsive-img" src="../assets/projet-archi/iconesCarte.png" alt="">
            <img class="responsive-img" src="../assets/projet-archi/CarteSynthesefinal.png" alt=""> -->
    <?php
    include "../Templates/footer-desktop.php"
        ?>
    <script src="../assets/js/script.js"></script>
</body>

</html>