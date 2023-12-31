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
    <link rel="stylesheet" href="css/capas/capas.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="files/images/favicon.ico">

    <title>INN | Capas</title>
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
                <a href="mapas.php"><i class="fa fa-solid fa-map"></i> Mis Mapas</a>
                <a class="active" href="capas.php"><i class="fa fa-solid fa-shapes"></i> Mis Capas</a>
            </div>

            <div class="tableMaps">
            <a class="boton" href="visor.php"><i class="fa fa-solid fa-shapes"></i> Subir Capa</a>
                <br><br><br>

<table>

    <thead>
        <tr>
            <th>Nombre</th>
            <th>Tipo de Capa</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php
        $query = "Select * from poligono";
        $consulta = pg_query($conexion, $query);

        while ($list = pg_fetch_object($consulta)) {
    ?>
    <tr>
        <td><?php echo $list->nombre; ?></td>
        <td>Poligono</td>
        <td><a href=""><i class="fa fa-regular fa-eye"></i></a></td>
    </tr>
    </tbody>
    <?php }?>

</table>


</div>

        </div>
    </div><!-- FIN DEL CONTAINER -->
</body>
<script src="https://kit.fontawesome.com/0b76b502ca.js" crossorigin="anonymous"></script>
</html>