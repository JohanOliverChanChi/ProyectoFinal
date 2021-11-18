<?php
$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';
echo "<br>";
switch ($var_getMenu) {
case "inicio":
require_once ('./views/home.php');
break;
case "principal":
require_once ('./views/principal.php');
break;
case "login":
require_once('./views/login.php');
break;
case "logout":
require_once('./views/logout.php');
break;
case "about":
require_once('./views/acercade.php');
break;
case "videojuegos":
require_once('./views/videojuegos.php');
break;
case "peliculas":
require_once('./views/peliculas.php');
break;
case "series":
require_once('./views/series.php');
break;
case "401":
require_once('./views/401.php');
break;
case "tarjeta":
require_once('./views/issac_st.php');
break;
default:
require_once('./views/bienvenida.php');
}
?>