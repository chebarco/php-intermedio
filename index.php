<?php include('header.php');
?>
   <form action="cargar_musica.php" method="post" class="form">
            <div class="mb-3">
                <h3>Carga tu tema musicial</h3>
                <input name="tema" type="text" class="form-control" id="temaMusical" aria-describedby="emailHelp" placeholder="Nombre del tema">
            </div>
            <div class="mb-3">
                <input name="artista" type="text" class="form-control" id="exampleInputPassword1" placeholder="Artista musical">
            </div>
            <div class="mb-3">
               <textarea name="descripcion" id="" class="form-control" placeholder="Contanos de que trata"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" value="cargar musica">Submit</button>
        </form>


<?php




if (isset($_GET['ok'])){
 echo "<h2>Cargado con exito</h2>";
}
?>

