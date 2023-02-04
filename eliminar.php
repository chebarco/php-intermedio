<?php
include("conexion.php");

$id_musicales = $_GET['id'];
mysqli_query($conexion, "DELETE FROM musicales WHERE id=$id_musicales");

header("Location: informacion.php");