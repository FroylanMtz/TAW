<?php

    //Importa el archivo db.php que se encarga de la conexion y gestion con la base de datos
    require('db.php');

    //Se manda llamar la funcion getPDO() que retorna un objeto con la conexion
    $db = getPDO();

    //Se obtienen todos los datos de la tabla para mostralos
    $stmt = $db->prepare("SELECT * FROM usuarios");

    //Ejecuta el query de arriba
    $stmt->execute();

    //Variables que almacenan los datos de la persona, solo cuando se van a actualizar los datos de esta
    $n = ''; //nombre de la persona a actualizar
    $a = ''; //apellido de la persona a actualizar
    $g = ''; //genero de la persona a actualizar

    //Se declara un arreglo para almacenar los datos obtenidos en la consulta SELECT de la tabla usuarios
    $filas = array();

    //Se recorre el query y los datos se almacenan en el arreglo declarado anteriormente
    while($filas[] = $stmt->fetch(PDO::FETCH_ASSOC) );

    //Se filta (obtiene) el id, esto solo aplica cuando se quiere actualizar los datos de una persona
    $id = filter_input(INPUT_GET, 'id');

    //Esta comparacion es para saber si tiene algo el id, y queire decir que se trata de una actualizacion de datos
    if(!($id == '' || $id == null)){
        //Se almacenan los datos de la persona a actualizar en las variables previamente declaradas, para ponerlas en los campos del formulario
        for($i=0; $i< count($filas); $i++ ) {
            
            if($id == $filas[$i]['usuario_id'] ){
                $n = $filas[$i]['nombre'];
                $a = $filas[$i]['apellidos'];
                $g = $filas[$i]['genero'];
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Practica02</title>
</head>
<body>
    
    <h1 style="text-align: center;"> Practica02 </h1>
    <hr>
    <!-- Comapra si se trata de una actualizacion, y de ser asi coloca un titulo respectivo y otro, y ademas crea un enlace que retorna al index cuando se requiere almacenar un registro nuevo, no actualizciones -->
    <?php 
        if(!($id == '')){
            echo '<h2> Actualizar Usuario ['.$n.'] </h2>';
            echo '<a href="index.php" > Agregar nuevo usuario </a> <br>';
        }else{
            echo '<h2> Agregar Nuevo Usuario </h2>';
        }
    ?>
    <br>
    <!-- Formulario, la informacion que envia es dinamica, dependiendo de si se trata de una actualizacion o de una nueva insercion de datos, incluso en el parametro tipo get-->
    <form action="insertar.php?id=<?php if(!($id == '')){echo $id;} ?>" method="post" style="text-align: center">
        <label> Nombre: </label>
        <input type="text" name="txt_nombre" value="<?= $n ?>" />

        <label> Apellidos: </label>
        <input type="text" name="txt_apellidos" value="<?= $a ?>" />
        
        <label> Sexo </label>
        <select name="slc_sexo" >
            <?php
                //Informacion dinamica en caso de que el registro que se necesita actualizar sea el de una mujer, en ese caso se activa por defecto la casilla Femenino, de otro forma es el masculino, que tambien aplicaria el que esta por defecto cuando se requiera almacenar un dato nuevo
                if($g == 'Femenino'){
                    echo '<option >Masculino</option>';
                    echo '<option selected >Femenino</option>';
                }else{
                    echo '<option selected >Masculino</option>';
                    echo '<option >Femenino</option>';
                }
            ?>
        </select>

        <input type="submit" value="Guardar">

    </form>

    <br>
    <hr>

    <h2> Lista de usuarios </h2>

    <!-- Listado de los datos almacenados en la tabla, se le da un pequeño estilo-->
    <table style="width: 100%;border: 2px solid black;margin: 0 auto; width: 80%; text-align: center;">
        <thead>
            <tr> 
                <th> ID </th> 
                <th> Nombre </th> 
                <th> Apellidos </th>
                <th> Genero </th>
                <th> Actualizar </th>
                <th> Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <!-- Tabla dinamica creada a partir de los datos almacenados en la base de datos-->
            <?php for($i=0; $i < count($filas)-1; $i++ ) { ?>
                <tr>
                    <td> <?= $filas[$i]['usuario_id'] ?> </td>
                    <td> <?= $filas[$i]['nombre'] ?> </td>
                    <td> <?= $filas[$i]['apellidos']?> </td>
                    <td> <?= $filas[$i]['genero'] ?> </td>
                    <!-- En las opciones de actualizado y eliminado se asignana parametros get para enviarse a un archivo php correspondiente con los parametros del id en caso de actualizar o eliminar-->
                    <td><a href="index.php?id=<?=$filas[$i]['usuario_id']?> "> Actualizar </a></td>
                    <td><a href="eliminar.php?id=<?=$filas[$i]['usuario_id']?> "> Eliminar </a></td>
                </tr>   
            <?php } ?>
        </tbody>
    </table>

</body>
</html>