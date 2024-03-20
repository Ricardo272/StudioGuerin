<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


<div id="sticky_nav" class="navbar-fixed">
    <nav>
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="../Controllers/projet-archi.php">Projets Architecture</a></li>
            <li class="divider"></li>
            <li><a href="../Controllers/photo.php">Projets Photographie</a></li>
            <li class="divider"></li>
            <li><a href="../Controllers/design.php">Projets Design</a></li>
        </ul>
        <ul id="dropdown2" class="dropdown-content">
            <li><a href="#!">Architecture</a></li>
            <li class="divider"></li>
            <li><a href="#!">Photographie</a></li>
            <li class="divider"></li>
            <li><a href="#!">Design</a></li>
        </ul>

        <div class="nav-wrapper">
            <a href="../Controllers/home.php" class="responsive-img"><img src="../assets/logo/Logogrand.png"
                    alt="logo"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-small-and-down">
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Nos Projets<i
                            class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Nos Services<i
                            class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="../Controllers/contact.php">Contact</a></li>
            </ul>
        </div>

    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="../Controllers/projet-archi.php">Projets Architecture</a></li>
        <li><a href="../Controllers/photo.php">Projets Photographie</a></li>
        <li><a href="../Controllers/design.php">Projets Design</a></li>
        <li><a href="../Controllers/contact.php">Contact</a></li>
    </ul>
</div>
<style>

</style>
<script src="../assets/js/navbar.js"></script>