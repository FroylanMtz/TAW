<?php

    require_once('db/gestion.php');

    $id = (int) $_POST['numero'];
    $nombre = $_POST['nombre'];
    $carrera = (int) $_POST['carrera'];

    if( isset($id) && isset($nombre) && isset($carrera)){

        guardar_tutor($id, $nombre, $carrera);
        header('Location: index.php');
        
        //echo $id;
    }else{
        header('Location: index.php');
    }

?>