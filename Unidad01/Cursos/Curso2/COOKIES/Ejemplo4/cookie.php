<?php

if( isset($_POST['color']) )
{
    
    $color = $_POST['color'];
    setcookie('color', $color, time()+800000);

} else 
{
    if(isset($_COOKIE['color']))
    {
        $color = $_COOKIE['color'];
    }else
    {
        $color = 'white';
    }
}

?>

<html>
<head>
    <title>Ejercicio 4</title>
    <meta charset="UTF-8" />
</head>

    <body style="background-color: <?= $color ?> " >

        <h1> <?= $color ?> </h1>

        <form method="post" action="cookie.php">
            <label for="color"> Escoge tu color de fondo </label>

            <select name="color">
                <option value="red">Rojo</option>
                <option value="blue">Azul</option>
                <option value="green">Verde</option>
                <option value="yellow">Amarillo</option>
                <option value="silver">Gris</option>
                <option value="black">Negro</option>
            </select>
            <input type="submit" value="Cambiar color" />

        </form>

    </body>
</html>