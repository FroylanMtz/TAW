<?php

    require_once('db/gestion.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen Unidad 1</title>
</head>
<body>
    
    <h1>Examen unidad 1</h1>

    <hr>

    <h3>Alta De Carreras</h3>

    <form action="alta_carreras.php" method="POST">
        <label>ID</label>
        <input type="text" name="id" />

        <label>Nombre</label>
        <input type="text" name="nombre" />

        <input type="submit" value="Guardar" />
    </form>

    <hr>

    <h3>Alta De Tutores</h3>

    <form action="alta_tutores.php" method="POST">
        
        <label>No. Empleado</label>
        <input type="text" name="numero" />

        <label>Nombre</label>
        <input type="text" name="nombre" />


        <label>Carrera</label>
        <input type="text" name="carrera" />

        <input type="submit" value="Guardar" />
    </form>

    <hr>

    <h3>Alta De Alumnos</h3>

    <form action="alta_alumnos.php" method="POST">

        <label>Matricula</label>
        <input type="text" name="matricula" />

        <label>Carrera</label>
        <input type="text" name="carrera" />

        <label>Nombre</label>
        <input type="text" name="nombre" />

        <label>Tutor</label>
        <input type="text" name="tutor" />

        <input type="submit" value="Guardar" />
    </form>


</body>
</html>