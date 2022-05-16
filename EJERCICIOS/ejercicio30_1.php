<?php
//Iniciamos sesion y ya tenemos todos los datos de la otra pagina
//dato: cuando cerramos el navegador esta session se pierde
session_start();

if( isset($_SESSION["usuario"]) ){        //isset es una funcion para ver si hay algo vacio 

echo "Usuario: ".$_SESSION["usuario"]."<br/>"." Estatus: ".$_SESSION["status"];

}else{

    echo "No hay datos de usuario!";
    
}

?>