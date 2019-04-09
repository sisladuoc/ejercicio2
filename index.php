<?php
    include('lib/constantes.php');
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HOSTALRIOAMAZONAS RESERVATION ONLINE</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div id="titulo">
            <div id="imag"></div>
            <h2>Mi sitio</h2>
        </div>
        <div id="menu"><?php include('menu.php'); ?></div>
        <div id="contenido">
            <h2>Titulo pagina</h2>
            <p>
                contenido
            </p>
        </div>
        <footer>
            Antonio Varas #666, Fono de contacto: 000000000
        </footer>
    </body>

    <script>
        
        $("#reservation").on("click", function (event) {
            if (($("#lsreservation").css("display") != "none")) {
                $("#lsreservation").css("display", "none");
            } else {
                $("#lsreservation").show();
                $("#lsreservation").css("display", "block");
            }
        });

        $('[data-toggle="tooltip"]').tooltip();
    </script>
</html>
