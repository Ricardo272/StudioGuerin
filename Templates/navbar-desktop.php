<div class="navbar-fixed">
    <nav>
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="../Controllers/archi.php">Architecture</a></li>
            <li><a href="../Controllers/photo.php">Photographie</a></li>
            <li class="divider"></li>
            <li><a href="../Controllers/design.php">Design</a></li>
        </ul>
        <div class="nav-wrapper">
            <a href="../Controllers/home.php"><img src="../assets/logo/Logogrand.png" alt="logo"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Nos Projets<i
                            class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="badges.html">Services</a></li>
                <li><a href="../Controllers/contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function () {
        $(".dropdown-trigger").dropdown();
    });
</script>