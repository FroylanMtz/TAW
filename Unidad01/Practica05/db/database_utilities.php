<?php

//Se importa el archivo que hace la conexion a la bd e inicializa el el pdo
require_once('connection.php');

//Cuanta los registros de una tabla dada por el parametro
function count_table($tabla){

    global $pdo;

    $sql = "SELECT COUNT(*) as total FROM $tabla";
    $query = $pdo->prepare($sql);
    $query->execute();

    $r = array();

	$r[] = $query->fetch(PDO::FETCH_ASSOC);
		
    return $r[0]['total'];
}

//Cuenta las peronas activas en la tabla user
function count_active(){

    global $pdo;

    $sql = "SELECT COUNT(*) as total FROM user WHERE status_id = 1 ";
    $query = $pdo->prepare($sql);
    $query->execute();

    $r = array();

	$r[] = $query->fetch(PDO::FETCH_ASSOC);
		
    return $r[0]['total'];

}

//Cuenta las peronas que estan inactivas de la tabla user
function count_inactive(){

    global $pdo;

    $sql = "SELECT COUNT(*) as total FROM user WHERE status_id = 2 ";
    $query = $pdo->prepare($sql);
    $query->execute();

    $r = array();

	$r[] = $query->fetch(PDO::FETCH_ASSOC);
		
    return $r[0]['total'];
}

//Retorna todos los registros de una tabla en especifica dada por el usuario, este retorna una arreglo numerico
function selectAllFromTable($t){

    global $pdo;

    $sql = "SELECT * FROM $t";
    $query = $pdo->prepare($sql);
    $query->execute();

    $r = array();
    
    //Se recorren todos los registros con este while sin cuerpo y en cada vuelta se almacena un registro en el arreglo $r
    while($r[] = $query->fetch(PDO::FETCH_NUM) );
		
    return $r;

}

//Funcion que retorna todos los registros dada una tabla como parametro, este retorna un arreglo asociativo
function getAll($t){

    global $pdo;

    $sql = "SELECT * FROM sport_team WHERE id_type = $t ";
    $query = $pdo->prepare($sql);
    $query->execute();

    $r = array();
    
    while($r[] = $query->fetch(PDO::FETCH_ASSOC) );
    
    //Se aplica este pop para retirar el ultimo dato del arreglo que es informacion retornada por el servidor mysql para darnos un mensaje que todo ha salido bien :D 
    array_pop($r);
    
    return $r;
}

//Funcion para insertar un nuevo registro en la tabla donde se guardan los nombres de los jugadores de fut y basquet
function add($id, $nombre, $posicion ,$carrera, $email, $id_type ){

    global $pdo;

    $sql = "INSERT INTO sport_team (id, nombre, posicion, carrera, email, id_type) VALUES
    ('$id', '$nombre', '$posicion', '$carrera', '$email', $id_type)";

    $query = $pdo->prepare($sql);
    $query->execute();
}

//Funcion que retorna los campos de un especifico registro dado un id
function search($id){

    global $pdo;

    $sql = "SELECT * FROM sport_team WHERE id = '$id' ";
    $query = $pdo->prepare($sql);
    $query->execute();

    $r = array();
    
    while($r[] = $query->fetch(PDO::FETCH_ASSOC));
    
    return $r;

}

//Funcion que actualiza un registro pasandole todos los campos como parametros
function update($id, $nombre, $posicion ,$carrera, $email, $id_type){


    global $pdo;

    $sql = "UPDATE sport_team SET nombre = '$nombre', posicion = '$posicion', carrera = '$carrera', email = '$email', id_type = $id_type WHERE id = '$id' ";

    $query = $pdo->prepare($sql);
    $query->execute();


}

//Funcion que elimina un registro pasandole como parametro el id del mismo
function delete($id){

    global $pdo;

    $sql = "DELETE FROM sport_team WHERE id = '$id' ";

    $query = $pdo->prepare($sql);
    $query->execute();

}