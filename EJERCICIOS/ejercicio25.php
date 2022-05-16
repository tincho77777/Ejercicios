<?php

class Persona {

    public $nombre;    //propiedad
    private $edad;
    protected $altura;

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

class Trabajador extends Persona{  //herencia

    public $puesto;

    public function presentarse(){
        echo "Hola buenos dias mi nombre es ".$this->nombre." y soy ".$this->puesto."</br>";
    }

}

$objAlumno = new Persona();   //instancia o creacion de un objeto
$objAlumno->asignarNombre("Martin"); //llamando a un metodo
// echo $objAlumno->nombre;   //imprimiendo una propiedad
$objAlumno->imprimirNombre();

$objAlumno2 = new Persona();
$objAlumno2->asignarNombre("Nicolas");
// echo $objAlumno2->nombre;
$objAlumno2->imprimirNombre();

echo $objAlumno2 ->mostrarEdad();


//herencia
$objTrabajador = new Trabajador();
$objTrabajador->asignarNombre("Ramón");
$objTrabajador->imprimirNombre();
$objTrabajador-> puesto = ("Profesor");
echo $objTrabajador->presentarse();



?>