<?php
    if( isset($_COOKIE['visita']) ){
        echo 'Que alegria verte de nuevo por aqui'; 
    } else {
        setcookie('visita', 'ok', time()+(60*60*24*365));
        echo 'Bienvenido a mi pagina por primera vez';
    }
?>

<html>

<head>
    <title>Ejercicio</title>
    <meta charset="UTF-8" />
</head>

<body>

</body>
</html>