<?php

	//Dato de la conexion a la base de datos
	$dsn = 'mysql:dbname=php_sql_course;host=localhost;';
	$user = 'root';
	$password = '';

	//La creacion de un nuevo objeto PDO encerrado en un try-catch para atrapar los errores :D
	try{
		$pdo = new PDO($dsn, $user, $password);
	}catch( PDOException $e ){
		echo 'Error al conectarnos: ' . $e->getMessage();
	}
	
?>