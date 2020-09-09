<nav class="navbar">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img src="https://cdn.emk.dev/templates/bulma-logo-light.png" alt="Logo">
            </a>
            <span class="navbar-burger burger" data-target="navbarMenu">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>
        <div id="navba  rMenu" class="navbar-menu">
            <div class="navbar-end">
                <a href="./" class="navbar-item <?php if($urls->parametro1=="home"){ echo "is-active";}?>">
                    Home
                </a>
                <a class="navbar-item <?php if($urls->parametro1=="movieserie"){ echo "is-active";}?>">
                    Peliculas y Series
                </a>
                <a class="navbar-item <?php if($urls->parametro1=="actores"){ echo "is-active";}?>">
                    Actores
                </a>
                <a class="navbar-item <?php if($urls->parametro1=="directores"){ echo "is-active";}?>">
                    Directores
                </a>
                <a class="navbar-item <?php if($urls->parametro1=="generos"){ echo "is-active";}?>">
                    Generos
                </a>
                <a class="navbar-item <?php if($urls->parametro1=="paises"){ echo "is-active";}?>">
                    Paises
                </a>
                <a href="./estatus" class="navbar-item <?php if($urls->parametro1=="estatus"){ echo "is-active";}?>">
                    Estatus
                </a>
                <div class="navbar-item is-hoverable <?php if($urls->parametro1=="cuenta"){ echo "is-active";}?>" >
                    <a class="navbar-link">Account</a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item"><?php echo $_SESSION["user_name"];?></a>
                        <a class="navbar-item">Profile</a>
                        <hr class="navbar-divider">
                        <a href="./salir" class="navbar-item" >Salir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
