<?php
//Consumir una api con php
$url = "https://api.dailymotion.com/videos?channel=sport&limit=10";

//como es httpS esa S significa seguridad entonces hay que hacer mas opciones
//Con esto desactivo la compatibilidad para que me deje leer la informacion
$opciones = array("ssl"=>array("verify_peer"=>false, "verify_peer_name"=>false));

//file_get_contents es una funcion que me permite leer todo el contenido y covertirlo a un string
//stream_contetx_create se usa para leer los paramtros de desactivacion de $opciones
$respuesta = file_get_contents($url, false, stream_context_create($opciones));

//Ahora decodificamos el archivo json
$objRespuesta = json_decode($respuesta);

// print_r($objRespuesta);

//hacemos un foreach para leer mejor el registro
//si vamos al codigo fuente vemos que tenemos que acceder a list para ver los datos
// foreach ($objRespuesta->list as $video){
//     print_r($video->title);
//     print_r($video->channel);
// }

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

<!-- Con un solo item como tiene el for each dentro mostramos todos los datos. Muy bueno! -->
<ul>
    <?php foreach ($objRespuesta->list as $video){ ?>

    <li>  <?php   echo ($video->title);   ?>  |  <?php   echo ($video->channel);   ?>  </li>

    <?php  }  ?>
</ul>
</body>
</html>