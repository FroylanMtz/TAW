<?php

//Se importa el archivo.php que hace la gestion con la bd
require('db.php');

//Recibe el id del usuario a eliminar por medio de un parametro get
$id = filter_input(INPUT_GET, 'id');

// Ejecucion de la instruccion a la base de datos
$db = getPDO(); // Obtenemos la instancia del objeto PDO
$sqlCmd = "DELETE FROM usuarios WHERE usuario_id = :id "; //sql de la ejecucion
$stmt = $db->prepare($sqlCmd); //Obtenemos el statement 
$stmt->bindParam(':id', $id); // Ingresamos las variables al stmt
$stmt->execute(); // Ejecutamos la instruccion SQL

 // Redirigimos a index.php
 header('Location: index.php');

