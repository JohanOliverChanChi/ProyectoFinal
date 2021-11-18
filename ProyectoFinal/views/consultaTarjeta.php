<?php
require '../conections/conexion.php';

$carta = 1;


$q = "SELECT * from tarjetas where id = '$carta' ";
$consulta = mysqli_query($conexion,$q);
$mostrar = mysqli_fetch_array($consulta);

echo $mostrar['titulo'];


?>