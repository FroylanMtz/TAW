<?php

    require('db.php');

    $db = getPDO();
    $stmt = $db->prepare("SELECT * FROM usuarios");
    $filas = array();

    while( $filas[] = $stmt->fetch(PDO::FETCH_ASSOC) );

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de usuarios</title>
</head>
<body>
    
    <h1> Lista de usuarios </h1>



</body>
</html>