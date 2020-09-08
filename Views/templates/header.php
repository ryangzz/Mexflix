<?php $urls = new RutasAmigables(empty($_GET["param1"]),empty($_GET["param2"]),empty($_GET["param3"]));?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Mexflix</title>
    <!-- <link rel="stylesheet" href="Public/css/bulma.min.css"> -->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />

    <link rel="stylesheet" href="Public/css/styles.css">
    <link rel="stylesheet" href="Public/css/sweetalert2.min.css">
    <script src="Public/js/javascript/axios.min.js"></script>
    <script src="Public/js/javascript/vue.js"></script>
    <script src="Public/js/javascript/jquery.min.js"></script>
    <script src="Public/js/javascript/sweetalert2.all.min.js"></script>
    <script src="Public/js/javascript/Global.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
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
							<a class="navbar-item" >Salir</a>
						</div>
				</div>
      </div>
    </div>
  </div>
</nav>
<div id="app">