<!--Esta plantilla corresponde a la plantilla del ADMIN THEME llaamado ELA ADMIN-->
<!--# ElaAdmin HTML5 Admin Dashboard Template #-->
<!--Solo se dejo cosas minimas a utilizar, no se utiliza toda la serie de widgets que vienen con la plantilla-->

<!--Todos los archivos necesarios para esta plantilla estan almacenados en la careta PUBLIC en la cual estan almacenados los archivos de imagenes, javascripts y css necesarios para la presentacion.-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema de tutorias</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Favicon-->
    <link rel="shortcut icon" href="public/img/logo.jpg">

    <!--Estilo-->
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="public/css/style.css">

</head>

<body>

<!--Navegacion principal, es la que esta del lado izquierdo del navegador-->
<?php include("modulos/navegacion.php") ?>

<!-- Right Panel --> 
<div id="right-panel" class="right-panel">
    
    <?php include("modulos/cabecera.php") ?>

    <div class="content pb-0">
        <?php
            //Mostraremos un controlador que muestra la plantilla 
            $controlador = new Controller();

            //Mostramos la funcion 
            $controlador -> enlacesPaginasController();
        ?>
    </div> 

    

</div>

<!-- Scripts -->
<script src="public/js/vendor/jquery-2.1.4.min.js"></script>
<script src="public/js/popper.min.js"></script>
<script src="public/js/plugins.js"></script>
<script src="public/js/main.js"></script>

</body>
</html>