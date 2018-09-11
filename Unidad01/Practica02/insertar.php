<?php
    
    require('db.php');

    $nombre = filter_input(INPUT_POST,'txt_nombre');
    $apellidos = filter_input(INPUT_POST,'txt_apellidos');
    $genero = filter_input(INPUT_POST,'slc_sexo');

    $db = getPDO();
    $stmt = $db->prepare("INSERT INTO usuarios(nombre, apellidos, genero) VALUES ( :nombre, :apellidos, :genero ) ");


    if( $nombre == '' || $apellidos == '' || $genero == '' || $nombre == null || $apellidos == null || $genero == null ){
        echo '<h2> No se pudieron guardar los datos </h2>';
    }else{

        
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellidos', $apellidos);
        $stmt->bindParam(':genero', $genero);
        $stmt->execute();
        
        echo '<h2> Registro realizado correctamente </h2>';
    }

    echo '<a href="#"> <h5> Ver la lista de usuarios  </h5> </a>';
    echo '<a href="index.php"> <h5> Agregar otro usuario  </h5> </a>';
    

