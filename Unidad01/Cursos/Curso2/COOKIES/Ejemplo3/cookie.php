<?php
if ( isset($_COOKIE['contador'])){
    setcookie('contador', $_COOKIE['contador'] + 1, time()+(60*60*24*365) );
    echo 'Numero de visitas: ' . $_COOKIE['contador'];
}else{
    setcookie('contador', 1, time()+60*60*24*365 );
    echo 'Bienvenido por primera vez a nuestra página';
}
?>

<html>
    <head>
        <title>Ejercicio 3</title>
        <meta charset="UTF-8" />
    </head>

    <body>
    </body>
</html>