<?php

    $db_user = 'root';
    $db_password = '';

    $conexion = 'mysql:dbname=examen;host=127.0.0.1';

    try{

        $pdo = new PDO($conexion, $db_user, $db_password);

    }catch(PDOException $r){
        echo 'error al conectarnos';
    }

?>