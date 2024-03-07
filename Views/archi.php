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
    <div class="container">
        <div class="carousel">
            <input type="radio" id="page1cb" checked name="pages" />
            <input type="radio" id="page2cb" name="pages" />
            <input type="radio" id="page3cb" name="pages" />
            <input type="radio" id="page4cb" name="pages" />
            <input type="radio" id="page5cb" name="pages" />
            <!-- page 1 -->
            <page id="page1">
                <div>Page One!
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio quod aspernatur cupiditate
                        accusantium iusto non reiciendis soluta porro eum harum ea recusandae laborum, dolorem quidem
                        deserunt deleniti eius sequi! Et qui illo, nulla delectus beatae quis nobis cupiditate culpa
                        totam blanditiis soluta hic reiciendis debitis animi nemo error distinctio quasi recusandae,
                        inventore doloremque expedita! Voluptas non error, dolorem quasi totam aperiam ullam laboriosam
                        numquam repudiandae fugiat repellat modi id laudantium ut recusandae temporibus provident a odit
                        ipsa accusantium deserunt assumenda. Doloremque, beatae aliquam minus praesentium dicta repellat
                        voluptas. Modi maiores quia voluptatum praesentium? Nobis tempore animi ea vel! Soluta,
                        doloremque?</p>
                </div>
                <label for="page2cb" title="Start"><b>START</b></label>
            </page>
            <!-- page 2 -->
            <page id="page2">
                <div>Page Two!</div>
                <label for="page3cb" title="Next"><b>NEXT</b></label>
            </page>
            <!-- page 3 -->
            <page id="page3">
                <div>Page Three!</div>
                <label for="page4cb" title="Next"><b>NEXT</b></label>
            </page>
            <!-- page 4 -->
            <page id="page4">
                <div>Page Four!</div>
                <label for="page5cb" title="Next"><b>NEXT</b></label>
            </page>
            <!-- page 5 -->
            <page id="page5">
                <div>Page Five!</div>
                <label for="page1cb" title="That's all folks!"><b>START AGAIN?</b></label>
            </page>
        </div>
    </div>

    <?php
    include "../Templates/footer-desktop.php"
        ?>
</body>

</html>