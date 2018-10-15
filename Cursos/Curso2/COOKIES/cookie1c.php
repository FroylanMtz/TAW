<html>

<head>
    <title>Ejercicio</title>
    <meta charset="UTF-8" />
</head>

<body>

    <?php
        //Muestra un mensaje al usuario con la cookie si existe, o un mensaje alertando que no se ha podido encontrar en caso de que dicha cookie no exista (haya expirado) o no esté definida
        if( isset($_COOKIE['nombre']) ){
            echo 'La cookie tiene el valor: ' . $_COOKIE['nombre'];
        } else {
            echo 'La cookie no ha podido ser encontrada';
        } 
    ?>
    
    <a href="cookie1d.php" >Salir del sistema </a>

</body>
</html>