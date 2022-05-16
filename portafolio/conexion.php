<?php

//clase conexion para conectarse a la base de datos
class conexion{

    private $servidor="localhost";
    private $user="root";
    private $password="root";
    private $conexion;

    //metodo para inicializar la conexion
    public function __construct(){

        try{
            $this->conexion= new PDO("mysql:host=$this->servidor;dbname=album",$this->user,$this->password); 
            //El PDO nos permite conectarnos directamente a una base de datos
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            return "FALLA DE CONEXION!".$e;

        }
        
    }

    public function ejecutar($sql){  //este metodo lo puedo utilziar tanto como para insertar/actualizar/borrar
        $this->conexion->exec($sql);
        return $this->conexion;
    //     return $this->conexion->lastInsertId();    con esto me da error
    }

    public function consultar($sql){
        $sentencia = $this->conexion->prepare($sql);
        //el prepare toma la variable sql y la guarda en una variable
        $sentencia->execute();
        //el execute ejecuta la sentencia
        return $sentencia->fetchAll();
        //el fetchAll retorna todas los registros que podemos consultar con la secuencia sql

    }

}

?>