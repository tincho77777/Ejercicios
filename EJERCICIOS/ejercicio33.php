<?php

//los archivos json se utilizan cuando queremos consumir datos de una api
// cada corchete representa un registro de informacion
//las apis son formas de comunicar a las aplicaciones
//formato json para intercambiar informacion
$jsonContenido = '[
    {"nombre":"Martin", "apellido":"Alvarez"},
    {"nombre":"Nicolas", "apellido":"Polido"}
]';

//El json_decode decodifica el archivo json para poder leerlo, sino no se puede
$resultado = json_decode($jsonContenido);
// print_r($resultado);   me muestra todo

foreach($resultado as $persona){
    echo ($persona->nombre." ".$persona->apellido)."<br/>";
}

?>