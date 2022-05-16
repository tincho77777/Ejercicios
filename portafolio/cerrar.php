<?php

session_start();
session_destroy();
header("location:index.php");
//Una vez que salgo se destruye la sesion para que no pueda volver a entrar nadie

?>