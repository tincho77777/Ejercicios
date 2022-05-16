<?php

$txtNombre = "";
$radioLenguaje = "";

$chkphp = "";
$chkhtml = "";
$chkcss = "";

$lsAnime = "";

$txtComentario = "";

if ($_POST) {
    //el signo de pregunta lo que hace es si hay algun valor que lo asigne a txtNombre, de lo contrario
    // usando los dos puntos y las comillas decimos que quede vacio.
    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
    $radioLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";

    $chkphp = (isset($_POST['chkphp']) == "si") ? "checked" : "";
    $chkhtml = (isset($_POST['chkhtml']) == "si") ? "checked" : "";
    $chkcss = (isset($_POST['chkcss']) == "si") ? "checked" : "";

    $lsAnime = (isset($_POST['lsAnime'])) ? $_POST['lsAnime'] : "";

    $txtComentario = (isset($_POST['txtComentario'])) ? $_POST['txtComentario'] : "";

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <!-- codigo embebido -->
    <!-- no deberia verse si no hay un nombre enviado -->
    <?php if ($_POST) {   ?>
        <h3>
            Hola <?php echo $txtNombre;   ?>
        </h3>
        <h3>
            Tu lenguaje es: <?php echo $radioLenguaje;   ?>
        </h3>
        <h3>
            Estas aprendiendo: 
            <?php echo ($chkphp == "checked") ? "PHP" : "";   ?>
            <?php echo ($chkhtml == "checked") ? "HTML" : "";   ?>
            <?php echo ($chkcss == "checked") ? "CSS" : "";   ?>
        </h3>
        <h3>
            Tu anime favorito es: 
            <?php echo $lsAnime;   ?>
        </h3>
        <strong>Tu mensaje es:</strong> <?php echo $txtComentario  ?>
        
    <?php   }    ?>

    <form action="ejercicio31.php" method="post">
        <p>Ingrese su nombre:</p>
        <input type="text" name="txtNombre" id="">
        <br>
        <p>Le gusta?:</p>
        PHP:<input type="radio" <?php echo ($radioLenguaje == "php") ? "checked" : ""; ?> name="lenguaje" value="php" id=""><br>
        HTML:<input type="radio" <?php echo ($radioLenguaje == "html") ? "checked" : ""; ?> name="lenguaje" value="html" id=""><br>
        CSS:<input type="radio" <?php echo ($radioLenguaje == "css") ? "checked" : ""; ?> name="lenguaje" value="css" id=""><br>
        <br>
        <!-- me permite selccionar uno solo porque en el name todos tienen el mismo -->

        Estas aprendiendo...?
        <br>
        PHP:<input type="checkbox" <?php echo $chkphp;  ?> name="chkphp" value="si" id=""><br>
        HTML:<input type="checkbox" <?php echo $chkhtml;  ?> name="chkhtml" value="si" id=""><br>
        CSS:<input type="checkbox" <?php echo $chkcss;  ?> name="chkcss" value="si" id=""><br>
        <br>

        Que anime te gusta?<br>
        <!-- En el select solo se puede selccionar una opcion -->
        <select name="lsAnime" id="">
            <option value="">Ninguna</option>
            <option value="naruto" <?php  echo ($lsAnime == "naruto")? "selected":"" ?> >Naruto</option>
            <option value="bleach" <?php  echo ($lsAnime == "bleach")? "selected":"" ?> >Bleach</option>
            <option value="dragon" <?php  echo ($lsAnime == "dragon")? "selected":"" ?> >Dragon Ball Z</option>
        </select>
        <br>
        <br>

        Tienes alguna duda?<br>
        <textarea name="txtComentario" id="" cols="30" rows="10"></textarea>
        <br>


        <br>
        <input type="submit" value="Enviar información">

    </form>

</body>

</html>