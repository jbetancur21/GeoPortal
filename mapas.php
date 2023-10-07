<?php
include "php/AuthMicrosoft/Autenticacion.php";
@$varsesion = $_SESSION['uname'];

if ($varsesion != null || $varsesion != '') {

} else {
    echo "<script type=text/javascript> alert('Inicie sesión para poder ingresar');
        window.location.href='index.php';</script>";
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mapas/cabeceraMapas.css">
    <link rel="stylesheet" href="css/mapas/mapas.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="files/images/favicon.ico">

    <title>INN | Mapas</title>
</head>

<body>
    <div class="contain">

        <!-- CABECERA VERDE -->
        <div id="navbar">
            <img src="files/images/Logo.png" title="INN">
            <div class="topnav-right">
                <a href="?action=logout">Cerrar Sesión</a>
            </div>
        </div>

        <div class="mapas">
            <div class="navbar-mapas">
                <a class="active" href="mapas.php"><i class="fa fa-solid fa-map"></i> Mis Mapas</a>
                <a href="capas.php"><i class="fa fa-solid fa-shapes"></i> Mis Capas</a>
            </div>
            <?php 
                include_once("php/Conexion.php");
                CConexion::ConexionBD();
            ?>
        </div>
    </div><!-- FIN DEL CONTAINER -->
</body>
<script src="https://kit.fontawesome.com/0b76b502ca.js" crossorigin="anonymous"></script>
</html>