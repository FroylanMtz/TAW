<?php

// Configuraciones de Base de Datos, datos necesarios para establecer la conexion
define('DB_SERVER', '127.0.0.1'); //Ip del servidor, en este caso localmente
define('DB_USER', 'root'); //Usuario del SGBD, que en este caso es el super usuario
define('DB_PASSWORD', ''); //Contraseña vinculada al usuario de arriba
define('DB_DATABASE', 'Practica02'); //Nombre de la base de datos
define('DB_PORT', 3306); //El puerto en donde esta el SGBD

//Se configura la zona horario del server
date_default_timezone_set('America/Mexico_City');

//Funcion que retorna un PDO de la conexion de la base de datos
function getPDO() {
    $host = DB_SERVER;
    $dbname = DB_DATABASE;
    $port = DB_PORT;
    $connStr =  "mysql:host={$host};dbname={$dbname};port={$port}";
    $dbOpt = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
    );

    //Retorna un nuevo objeto de tipo DBO
    return new PDO($connStr, DB_USER, DB_PASSWORD, $dbOpt);
}

?>