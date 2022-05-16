<?php

if($_POST){

    print_r($_POST);

    print_r($_FILES['archivo']['name']);
    // La informacion de estos tipos de archivos se recibe con $_FILES

    //Guardar archvio con php
    //tremendo esto
    move_uploaded_file($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']);

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

<form action="ejercicio32.php" enctype="multipart/form-data" method="post">
    <!-- Si no ponemos el enctype="multipart/form-data" el formulario(el input file) lo unico que recibe es el nombre, pero no recibe la foto
o archivo pdf etc -->

Imagen:
<br>
<!-- Sirve para adjuntar archivos tipo foto o pdf etc -->
<input type="file" name="archivo" id="">
<br>
<br>

<input type="submit" name="enviar" value="Enviar Información">



</form>
    
</body>
</html>