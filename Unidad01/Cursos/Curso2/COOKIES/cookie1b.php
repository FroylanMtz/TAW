<?php

$nombre = $_POST['nombre'];

//Funcion para declarar una cookie, el primer parametro es el nombre del campo a guardar, el segundo el valor, y el tercero es la expiracion de dicha cookie
setcookie('nombre', $nombre, time() + 4800);


?>