<?php

class Persona {

    public $nombre;    //propiedad
    private $edad;
    protected $altura;

    function __construct($nuevoNombre){
        
        $this->nombre = $nuevoNombre;

    }

    public function asignarNombre($nuevoNombre){     //accion

        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre."</br>";

    }

    public function mostrarEdad(){
        $this-> edad = 20;
        return $this->edad;
    }

}

$objAlumno = new Persona("Martin");   //instancia o creacion de un objeto
// $objAlumno->asignarNombre("Martin"); //llamando a un metodo
$objAlumno->imprimirNombre();


?>