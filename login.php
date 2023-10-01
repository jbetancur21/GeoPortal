<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="css//index/index.css">
    <link rel="stylesheet" href="css/login/login.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="files/images/favicon.ico">

    <title>INN | Inicio</title>
</head>

<body>
    <div class="contain">
        <!-- CABECERA DESPLEGABLE -->
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.html">Inicio</a>
            <a href="acercade.html">Acerca de</a>
            <a href="login.php">Iniciar Sesión</a>
        </div>

        <!-- CABECERA VERDE -->
        <div id="navbar">
            <img src="files/images/Logo.png" title="INN">
            <button class="openbtn" onclick="openNav()">&#9776;</button>
        </div>


        <div class="container">
            <img
                src="https://media.licdn.com/dms/image/C4E0BAQEAY69oewvPuQ/company-logo_200_200/0/1619042533662?e=2147483647&v=beta&t=y-KzmcDCb0fK0IO7BnEtvXLeRBZCSHLNv1Gzomf-u9E" />
            <div>
                <form class="form_login" onSubmit="">

                    <button type="submit"><img
                            src="https://aid-frontend.prod.atl-paas.net/atlassian-id/front-end/5.0.486/static/media/microsoft-logo.42b61fa1.svg"><a
                            href="?action=login">Continuar con Microsoft</a> </button>
                </form>
            </div>
        </div>
    </div><!-- FIN DEL CONTAINER -->
</body>

<script src="js/cabecera.js"></script>

</html>

<?php
include "php/AuthMicrosoft/Autenticacion.php";
?>