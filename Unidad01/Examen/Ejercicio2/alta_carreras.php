<?php

    require_once('db/gestion.php');

    $id = (int) $_POST['id'];
    $nombre = $_POST['nombre'];

    if( isset($id) && isset($nombre) ){

        guardar_carrera($id, $nombre);
        header('Location: index.php');
        
    }else{
        header('Location: index.php');
    }

?>