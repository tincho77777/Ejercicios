<?php

if($_POST){

    $ValorA = $_POST['ValorA'];   //asi se recepcionan datos que vienen del formulario con el post
    $ValorB = $_POST['ValorB'];

    $suma = $ValorA + $ValorB;    //asignacion
    $resta = $ValorA - $ValorB;
    $multiplicacion = $ValorA * $ValorB;
    $division = $ValorA / $ValorB;


    echo $suma."<br/>";
    echo $resta."<br/>";
    echo $multiplicacion."<br/>";
    echo $division."<br/>";

    if( $ValorA == $ValorB){    //comparacion

        echo "El valor de A es igual que el valor de B"."<br/>";


        if( $ValorA == 4){
            echo "El valor es 4"."<br/>";
        }
        if( $ValorA == 5){
            echo "El valor es 5";
        }

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
    

<form action="ejercicio11.php" method="post">

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