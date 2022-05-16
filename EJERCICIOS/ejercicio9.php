<?php

if($_POST){

    $ValorA = $_POST['ValorA'];   //asi se recepcionan datos que vienen del formulario con el post
    $ValorB = $_POST['ValorB'];

    if( $ValorA > $ValorB ){     //OPERADOR RELACIONAL
        echo "El valor de A es mayor que el valor de B";
    }


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="ejercicio9.php" method="post">

Valor A:
<input type="text" name="ValorA" id="">
<br>
<br>
Valor B:
<input type="text" name="ValorB" id="">
<br>
<br>

<input type="submit" value="Calcular">

</form>


</body>
</html>