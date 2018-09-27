<?php

    require_once('db/gestion.php');

    $matricula = $_POST['matricula'];
    $carrera = $_POST['carrera'];
    $nombre = $_POST['nombre'];
    $tutor = (int) $_POST['tutor'];

    if( isset($matricula) && isset($nombre) && isset($carrera) && isset($tutor) ){

        guardar_alumno($matricula, $carrera, $nombre, $tutor);
        header('Location: index.php');
        
        //echo $matricula;
    }else{
        header('Location: index.php');
    }

?>