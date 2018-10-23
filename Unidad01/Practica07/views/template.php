<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Plantilla</title>
    <style>
        header{
            position: relative;
            margin: auto;
            text-align: center;
            padding: 5px;
        }
        nav{
            position: relative;
            margin: auto;
            width: 100%;
            height: auto;
            background: black;
        }
        nav ul{

            position: relative;
            margin: auto;
            width: 50%;
            text-align: center;
        }

        nav ul li{
            display: inline-block;
            width: 24%;
            line-height: 50%;
            list-style: none;
        }

        nav ul li a{
            color: white;
            text-decoration: none;
        }
        
        section{
            position: relative;
            padding: 20%;
        }
    </style>
</head>
<body>
    
    <header><h1> TAW - PHP MVC </h1></header>

    <?php
        include('modules/navegacion.php');
    ?>

    <section>
    <?php

        //Mostraremos un controlador que muestra la plantilla 
        $mvc = new MvcController();

        //Mostramos la funcion 
        $mvc -> enlacesPaginasController();

    ?>
    </section>

</body>
</html>