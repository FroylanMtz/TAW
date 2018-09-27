<?php

    require('db/conexion.php');


    function guardar_carrera($id, $nombre){

        global $pdo;

        $stmt = $pdo->prepare("INSERT INTO carrera(carrera_id, nombre) VALUES( $id, '$nombre' )");
        
        $stmt->execute();

    }

    function guardar_tutor($id, $nombre, $carrera){
        global $pdo;

        $stmt = $pdo->prepare("INSERT INTO tutores(tutor_id, nombre, carrera_id) VALUES( $id, '$nombre', $carrera )");
        
        $stmt->execute();
    }

    function guardar_alumno($matricula, $carrera ,$nombre , $tutor){
        global $pdo;

        $stmt = $pdo->prepare("INSERT INTO alumnos(matricula, carrera, nombre, tutor_id) VALUES( '$matricula', '$carrera', '$nombre', $tutor )");
        
        $stmt->execute();
    }


    function seleccionarCarreras(){
        global $pdo;
        
        $stmt = $pdo->prepare('SELECT * FROM carrera');
        
        $stmt->execute();

        $r = array();

        $r = $stmt->FetchAll();
        
        return $r;
    }

    function seleccionarTutores(){
        global $pdo;
        
        $stmt = $pdo->prepare('SELECT * FROM tutores');
        
        $stmt->execute();

        $r = array();

        $r = $stmt->FetchAll();
        
        return $r;
    }

    function seleccionarAlumnos(){
        global $pdo;
        
        $stmt = $pdo->prepare('SELECT * FROM alumnos');
        
        $stmt->execute();

        $r = array();

        $r = $stmt->FetchAll();
        
        return $r;
    }

?> 