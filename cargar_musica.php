<?php

$texto = "<h3>Tema: " . $_POST['tema'] . " Artista: " . $_POST['artista'];

$archivo = fopen('temamusica.txt', 'a');
fputs($archivo, $texto);

$tema_music = $_POST['tema'];
$artista_music = $_POST['artista'];
$descripcion_music = $_POST['descripcion'];

include("conexion.php");

mysqli_query($conexion, "INSERT INTO musicales VALUES
(DEFAULT, '$tema_music','$artista_music','$descripcion_music')");

mysqli_close($conexion);

header("Location: index.php?ok");