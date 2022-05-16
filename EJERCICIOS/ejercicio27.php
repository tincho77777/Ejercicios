<?php

//Metodos Estaticos
class UnaClase{

    public static function unMetodo(){
        echo "Hola soy un metodo estatico!";
    }

}

//asi lo haciamos antes
$obj = new UnaClase();
// $obj-> unMetodo();

//ahora con metodo estatico podemos hacer lo siguiente para ahorrar hacer la instanciacion
UnaClase::unMetodo();

?>