<?php
include "php/AuthMicrosoft/Autenticacion.php";
@$varsesion = $_SESSION['uname'];

if ($varsesion != null || $varsesion != '') {

} else {
    echo "<script type=text/javascript> alert('Inicie sesión para poder ver la información');
        window.location.href='index.php';</script>";
    die();
}
include "php/Conexion.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mapas/cabeceraMapas.css">
    <link rel="stylesheet" href="css/visor/visor.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">


    <!-- AZURE MAPS -->
    <!-- Add references to the Azure Maps Map control JavaScript and CSS files. -->
<!--     <link rel="stylesheet" href="https://atlas.microsoft.com/sdk/javascript/mapcontrol/3/atlas.min.css" type="text/css">
    <script src="https://atlas.microsoft.com/sdk/javascript/mapcontrol/3/atlas.min.js"></script>
    <script src="https://atlas.microsoft.com/sdk/javascript/service/2/atlas-service.min.js"></script> 
    <script src="js/visor/visorAzure.js"></script>-->

    <script src="js/visor/ol7/ol.js"></script>
    <link rel="stylesheet" href="js/visor/ol7/ol.css">
    <link rel="shortcut icon" href="files/images/favicon.ico">

    <title>INN | Visor</title>
</head>

<!-- <body onload="GetMap()"> -->
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
            <div class="sidenav">
                <a href="#"><i class="fa-solid fa-arrow-left"></i></a>
            </div>

            <div class="main" id="map"></div>

        </div>
    </div><!-- FIN DEL CONTAINER -->
    <script src ="js/visor/app.js"></script>
</body>
<script src="https://kit.fontawesome.com/0b76b502ca.js" crossorigin="anonymous"></script>

</html>