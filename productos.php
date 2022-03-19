<?php include("template/cabecera.php"); ?>

<?php

include("administrador/config/bd.php");

$sentenciaSQL = $conexion->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();
$listaLibros = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC)

?>

<?php foreach ($listaLibros as $libro) { ?>


    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" height="200" src="./img/<?php echo $libro['imagen']; ?>" alt="amapola">
            <div class="card-body">
                <h4 class="card-title"><?php echo $libro['nombre']; ?></h4>
                <a href="#" name='' id="" role="button" class="btn btn-primary">Ver más</a>
            </div>
        </div>
    </div>

<?php }  ?>


<?php include("template/pie.php"); ?>