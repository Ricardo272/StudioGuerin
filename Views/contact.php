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
    <title>Document</title>
</head>

<body class="contact">

    <?php
    include "../Templates/navbar-desktop.php"
        ?>

    <div class="container">
        <h3>Vous souhaitez soliciter nos services ? </h3>

        <div class="row">
            <form method="POST" novalidate class="col s12 z-depth-5">

                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="nomClient" placeholder="Nom Prénom" type="text" class="validate">
                        <label for="nomClient"></label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">phone</i>
                        <input id="telephoneClient" placeholder="Telephone" type="tel" class="validate">
                        <label for="telephoneClient"></label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail</i>
                        <input id="emailClient" placeholder="Email" type="email" class="validate">
                        <label for="emailClient"></label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">border_color</i>
                        <input type="text" id="messageClient" placeholder="Votre Message ( facultatif ) ">
                        <label for="messageClient"></label>
                    </div>
                </div>

                <button class="row btn waves-effect waves-light col s4" type="submit" name="action">Envoyer
                    <i class="material-icons right">send</i>
                </button>





            </form>
        </div>

    </div>



    <?php
    include "../Templates/footer-desktop.php"
        ?>
</body>

</html>