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

<body>
    <?php
    include "../Templates/navbar-desktop.php"
        ?>
    <div class="container">
        <h5>Vous souhaitez soliciter nos services ? </h5>

        <div class="row">
            <form method="POST" novalidate class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" placeholder="Nom Prénom" type="text" class="validate">
                        <label for="icon_prefix"></label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">phone</i>
                        <input id="icon_telephone" placeholder="Telephone" type="tel" class="validate">
                        <label for="icon_telephone"></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail</i>
                        <input id="icon_telephone" placeholder="Email" type="email" class="validate">
                        <label for="icon_telephone"></label>
                    </div>
                </div>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">border_color</i>
                                <textarea id="textarea1" placeholder="Votre Message ( facultatif ) "
                                    class="materialize-textarea"></textarea>
                                <label for="textarea1"></label>
                            </div>
                        </div>
                    </form>
                </div>
            </form>
        </div>

    </div>



    <?php
    include "../Templates/footer-desktop.php"
        ?>
</body>

</html>