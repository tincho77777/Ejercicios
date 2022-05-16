<?php

//Escritura de archivos
$nombreArchivo = "archivo.txt";

$contenidoArhivos = "Hola Martin! Saludos!";

//Creo el archivo en modo escritura
$archivoACrear = fopen($nombreArchivo,"w");

//Me escribe el archivo
fwrite($archivoACrear, $contenidoArhivos);

//Cierra el archivo
fclose($archivoACrear);

?>