<?php 
if(isset($_COOKIE['nombre'])){
    setcookie('nombre', $_COOKIE['nombre'], time()-4800 );
}
?>

<html>

<head>
    <title>Ejercicio</title>
    <meta charset="UTF-8" />
</head>

<body>

    <a href="cookie1c.php">Verificar </a>

</body>
</html>