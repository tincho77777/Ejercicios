<!-- CABECERA/HEADER -->
<!-- Para no repetir en todas las paginas la cabecera utilizamps un include y la llamamos -->
<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php

$objConexion = new conexion();
$proyectos = $objConexion->consultar("SELECT * FROM `proyectos`");

?>

<br>

<!-- Estructura hecha con bootstrap apretando: bs5-jumbotron-default -->
<!-- Los grid se crean usando bs5-grid-conteiner-->
<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Bienvenido!</h1>
        <p class="lead">Este es el recetario de Martin Alvarez</p>
        <hr class="my-2">
        <p>Enjoy!</p>
    </div>
</div>

<br>

<div class="row row-cols-1 row-cols-md-2 g-4">

    <?php foreach ($proyectos as $proyecto) {  ?>

        <div class="col">
            <div class="card">
                <img height="300" src="img/<?php echo $proyecto['imagen'];  ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $proyecto['nombre'];  ?> </h5>
                    <p class="card-text"> <?php echo $proyecto['descripcion'];  ?> </p>
                </div>
            </div>
        </div>

    <?php  }   ?>


</div>

<br>

<!-- Para no repetir en todas las paginas el pie utilizamps un include y lo llamamos -->
<!-- PIE DE PAGINA/FOOTER -->
<?php include("pie.php"); ?>