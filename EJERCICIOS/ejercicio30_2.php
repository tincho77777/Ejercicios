<?php

//para eliminar los datos de la sesion que iniciamos usamos destroy

session_start();
session_destroy();

echo "Se destruyó la sesion de usuario!";

?>