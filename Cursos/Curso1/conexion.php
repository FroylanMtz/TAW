<?php

/* Conectar a una base de datos de MySQL invocando al controlador */
$link = 'mysql:host=localhost;dbname=yt_colores';
$usuario = 'root';
$contrasena = '';

try {
    $pdo = new PDO($link, $usuario, $contrasena);

    //echo 'Conectado';

    /*foreach($pdo->query('SELECT * FROM colores') as $fila){
        print_r($fila);
    }*/

} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage() . '<br/>';
    die();
}
