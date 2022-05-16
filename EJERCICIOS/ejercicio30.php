<?php
//variables de sesion

//el session start sirve para mantener infromacion el cualquier pagina mientras el navegador este abierto
//vamos a crear datos que van a mantenerse en todas las paginas
//por ej si me logeo en una pagina la pagina tiene que saber que estoy logueado en todas las pantallas que tenga

session_start();

//ahora creamos variable tipo sesion
$_SESSION["usuario"]= "Martin";
$_SESSION["status"]= "Logueado";

echo "Sesión Iniciada".":<br/>";

echo "Usuario: ".$_SESSION["usuario"]."<br/>"." Estatus: ".$_SESSION["status"];

//Lo que destaca a las variables de session de una variable normal es que estas puedo por ejemplo abrirlas desde
//otro archivo como es el ejercicio30_1.php y no me va a pedir nada



?>