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

    //colocamos la sentencia sql que creamos en phpmyadmin
    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg');";
    
    //para ejecutar esa peticion ahora hacemos:
    //exce es un metodo de PDO que ejecuta la sentencia sql.
    $conexion->exec($sql);

    echo "Conexión Exitosa!!!";

}catch (PDOException){

    echo "Conexión Fallida!!!".$error;
}

?>