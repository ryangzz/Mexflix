<?php
require_once("Helpers/Autoload.php");
$urls = new RutasAmigables(empty($_GET["param1"]),empty($_GET["param2"]),empty($_GET["param3"]));
$ruta = new Route($urls);
?>