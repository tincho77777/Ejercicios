<?php
session_start();
if ($_POST) {
    //El codigo php no se ve en el inspeccionar puedo poner contraseñas solo se ve acá
    if (($_POST['user'] == "MartinAlvarez7") && ($_POST['password'] == "12345")) {

        $_SESSION['user'] = "MartinAlvarez7";
        //tambien puede ser:  $_SESSION['login'] = true;

        //La funcion header hace que una vez logueado te manda a la ubicacion que quieras
        header("location:index.php");
    } else {
        echo "<script>   alert('Usuario o contraseña incorrecta!');   </script>";
    }
}

?>

<!-- Login creado con bs5-$ -->
<!doctype html>
<html lang="en">

<head>
    <title>LOGIN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <br>
                <br>
                <br>
                <br>
                <div class="card">
                    <div class="card-header">
                        Iniciar sesión
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            Usuario:
                            <input type="text" class="form-control" name="user" id="">
                            <br>
                            <br>
                            Contraseña:
                            <input type="password" class="form-control" name="password" id="">
                            <br>
                            <br>
                            <button type="submit" class="btn btn-success">Entrar</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                    </div>
                </div>

            </div>
            <div class="col-md-4">

            </div>
        </div>

    </div>



</body>

</html>