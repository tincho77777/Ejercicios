<?php

//abriendo u  archivo para leer el contendido
$archivo = "contenido.txt";

//La funcion fopen es file open para poder abrir un archivo
//La r es de read
//La w es de write
$archivoAbierto = fopen($archivo,"r");

//La funcion fread lee un arhivo abierto con fopen
$contenido = fread($archivoAbierto, filesize($archivo));

echo $contenido

?>