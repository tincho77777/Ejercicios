<?php

//Para validar el logueo y quedar logueados hacemos lo siguiente
session_start();
//isset es una funcion que nos permite validar si las cosas estan vacias o llenas
//Si el usuario que ingreso es diferente a MartinAlvarez7 te direcciona a el login
if (isset($_SESSION['user']) != "MartinAlvarez7") {
    header("location:login.php");
}
//Como esto esta en la cabecera que esta en todos loa archivos se mantiene el logueo o se cierra en todas
//las pantallas, todas tienen la misma validacion


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <!-- Navbar content -->
        <nav class="navbar navbar-expand-lg bg-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="portafolio.php">Portafolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="Cerrar">Cerrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <br>