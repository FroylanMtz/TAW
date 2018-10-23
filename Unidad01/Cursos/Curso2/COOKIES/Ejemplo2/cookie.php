<?php
$fecha = date('d/m/Y | H:i:s');


if( isset($_COOKIE['fecha']) ){
    echo 'Hola de nuevo, tu última visita fué el ' . $_COOKIE['fecha'];

    setcookie('fecha', $fecha, time()+(60*60*24*365) );
} else {
    echo 'Esta es tu primera visita a nuestra página';
    
    //El tercer paramatro que es para poner la vigencia de la cookie esta dado en segundos
    setcookie('fecha', $fecha, time()+(60*60*24*365) );
}

?>

<html>
    <head>
        <title>Ejercicio 2</title>
        <meta charset="UTF-8" />
    </head>

    <body>
    </body>
</html>