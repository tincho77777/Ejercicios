<?php

//definimos una variable server, que es donde se va a conectar(la base de datos)
$servidor = "localhost";  //La direccion del local host es 127.0.0.1

//definimos un acceso o usuario
$usuario = "root";
$contrasenia = "root";


try{

    $conexion = new PDO("mysql:host = $servidor; dbname=album", $usuario, $contrasenia);   //PDO es una clase que me permite conectarme a la base de datos
    //album es el nombre que le dimos a nuestra base de datos en phpmyadmin
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Para leer la infromacion de nuestra tabla
    $sql = "SELECT * FROM `fotos`";

    //Tenemos que crear una sentencia que ejecute nuestra petición
    $sentencia = $conexion->prepare($sql);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    print_r($resultado);
    
    //otras forma de mostrar algo mas especifico:
    // foreach ($resultado as $foto){
    //     print_r($foto['nombre']);
    // }

    echo "Conexión Exitosa!!!";

}catch (PDOException){

    echo "Conexión Fallida!!!".$error;
}

?>