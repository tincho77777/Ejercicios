<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>

<?php

if ($_POST) {

    // print_r($_POST);

    $name = $_POST['name'];
    $descripcion = $_POST['descripcion'];
    $fecha = new DateTime();

    //Para recibir el nombre de la foto:
    //Lo concatenamos a una fecha para distinguir si es la misma imagen pero con diferente momento
    $imagen = $fecha->getTimestamp() . "_" . $_FILES['img']['name'];

    $imagen_temporal = $_FILES['img']['tmp_name'];

    move_uploaded_file($imagen_temporal, "img/" . $imagen);

    $objConexion = new conexion();

    //sentencia sql para insertar datos:
    //copiamos la sentencia sql que nos da php y
    // en values tenemos que cambiar los nombres por las variables que creamos nosotros y que tenemos en el formulario
    $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$name', '$imagen', '$descripcion');";

    $objConexion->ejecutar($sql);

    header("location:portafolio.php");
}

//el envio get es cuando presiobamos el boton de eliminar
if ($_GET) {

    //Para borrar datos:
    //enviamos el id:
    $id = $_GET['borrar'];
    $objConexion = new conexion();

    //haciendo el borrado del archivo:
    $imagen = $objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id=" . $id);
    unlink("img/" . $imagen[0]['imagen']);

    //haciendo el borrado en la base de datos:
    $sql = "DELETE FROM `proyectos` WHERE `proyectos`.`id` =" . $id;
    $objConexion->ejecutar($sql);

    header("location:portafolio.php");
}

$objConexion = new conexion();
$proyectos = $objConexion->consultar("SELECT * FROM `proyectos`");

?>

<br>

<!-- usando bs5-grid-default me crea un div que me divide la pantalla en 12 partes
entonces aca hago dos div md-6 y me divide la pagina en dos, pero se puede dividir en 3,4, etc -->

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Datos del Proyecto:
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">
                        Nombre del proyecto:
                        <br>
                        <input required type="text" class="form-control" name="name" id="">
                        <br>
                        Imagen del proyecto:
                        <br>
                        <input required type="file" class="form-control" name="img" id="">
                        <br>
                        Ingrese una descripción:
                        <textarea required class="form-control" name="descripcion" id="" rows="3"></textarea>
                        <br>
                        <input type="submit" class="btn btn-success" value="Enviar Proyecto">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- sentencia de php para mostrar los resultados en la tabla -->
                    <?php foreach ($proyectos as $proyecto) {  ?>
                        <tr>
                            <td> <?php echo $proyecto['id'];  ?> </td>
                            <td> <?php echo $proyecto['nombre'];  ?> </td>
                            <td>

                                <img width="100" src="img/<?php echo $proyecto['imagen'];  ?>" alt="">

                            </td>
                            <td> <?php echo $proyecto['descripcion'];  ?> </td>
                            <td> <a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id'];  ?>">Eliminar</a> </td>
                        </tr>
                    <?php  }   ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<br>

<?php include("pie.php"); ?>