<!-- METODO POST -->
<?php


if ($_POST) {   //Condicional de que si se produce el envio


    //Recibir informacion del formulario html(Metodo POST)
    $nombre = $_POST['txtNombre'];

    echo "Hola " . $nombre;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- El metodo post recibe informacion, recibe los datos y los oculta -->
    <form action="ejercicio2.php" method="post">

        Nombre:
        <input type="text" name="txtNombre" id="">
        <br>
        <input type="submit" value="Enviar">



    </form>
</body>

</html>