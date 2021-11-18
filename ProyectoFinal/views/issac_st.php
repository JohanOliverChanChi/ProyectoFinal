<?php
if(!isset($usuario)){
    header("location:?menu=401");
}else{

}

require './conections/conexion.php';

$carta = 4;



$q = "SELECT * from tarjetas where id = '$carta' ";
$consulta = mysqli_query($conexion,$q);
$mostrar = mysqli_fetch_array($consulta);
$titulo = $mostrar['titulo'];
$enlace = $mostrar['enlace'];

?>




<div id ="video">
    <h2>
        <?php echo $titulo;?>
</h2>
<div class="row">
    <div class="col-12">
        <div class="embed-responsive embed-responsive-16by9">
        <iframe width="760" height="515" src="<?php echo $enlace;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>


<button type="button" class="btn btn-danger">Descargar</button>

</div>