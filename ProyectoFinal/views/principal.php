<div id="bienvenida">
<?php

$usuario = $_SESSION['username'];

if(!isset($usuario)){
 echo  "<h1>bienvenido $usuario ahora puedes accedera toda la biblioteca de bandas sonoras de muchas series, peliculas y videojuegos </h1>";
}else{
  echo  "<h1>bienvenido $usuario ahora puedes accedera toda la biblioteca de bandas sonoras de muchas series, peliculas y videojuegos </h1>";
}

?>
</div>