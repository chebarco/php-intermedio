<?php include('header.php');
?>

<form>
    <?php include("conexion.php");
$consulta = mysqli_query($conexion, "SELECT * FROM musicales");

while ($mostrar_datos = mysqli_fetch_assoc($consulta)) {
  ?>  

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $mostrar_datos['tema']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $mostrar_datos['artista']; ?></h6>
    <p class="card-text"><?php echo $mostrar_datos['descripcion']?></p>
  <a href="eliminar.php?id=<?php echo $mostrar_datos['id'];?>"> Borrar</a>
  </div>
</div>


<?php
}
?>

</form>

