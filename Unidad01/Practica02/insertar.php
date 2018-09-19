<?php
    
    //Importa el archivo que hace gestion con la BD
    require('db.php');

    //Filtra (recibe) los parametros enviados desde el formulario desde metodo POST
    $nombre = filter_input(INPUT_POST,'txt_nombre');
    $apellidos = filter_input(INPUT_POST,'txt_apellidos');
    $genero = filter_input(INPUT_POST,'slc_sexo');
    
    //Filtra (recibe) el parametro enviado desde el formulario desde metodo GET, pa saber si es una actualizacion o no. si el id contiene un valor quiere decir que si es actualizacion, si pasa en blanco quiere decir que es un nuevo registro
    $id = filter_input(INPUT_GET, 'id');

    //Se obtiene el objeto PDO desde la funcion definida en el archivo db.php
    $db = getPDO();

    //Se compara si el id esta vacio, en caso afirmativo quiere decir que los datos son nuevos y se prepara una sentancia INSERT con datos nuevos. Si tiene algo, quiere decir que es una actualizacion y se prepara una sentencia UPDATE
    if($id === ''){
        $stmt = $db->prepare("INSERT INTO usuarios(nombre, apellidos, genero) VALUES ( :nombre, :apellidos, :genero ) ");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellidos', $apellidos);
        $stmt->bindParam(':genero', $genero);
    }else{
        $stmt = $db->prepare("UPDATE usuarios SET nombre = :nombre, apellidos = :apellidos, genero = :genero WHERE usuario_id = :id ");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellidos', $apellidos);
        $stmt->bindParam(':genero', $genero);
        $stmt->bindParam(':id', $id);
    }

    //Compara si los datos son vacios, en caso de ser asi, no hace nada, ya que aqui adentro se manda llamar la fduncion execute() que ejecuta el query previamente preparado dependiendo de la situacion
    if( $nombre == '' || $apellidos == '' || $genero == '' || $nombre == null || $apellidos == null || $genero == null ){
        echo '<h2> No se pudieron guardar los datos </h2>';
    }else{

        //Ejecuta el query preparado con los datos parametrizados con bindParam definidos en la comparacion de mas arriba
        $stmt->execute();
        
        echo '<h2> Registro realizado correctamente </h2>';
    }

    //Redirige a la pagina principal que muestra los cambios
    header('Location: index.php');
    

