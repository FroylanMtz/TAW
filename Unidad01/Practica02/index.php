<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <h1> Practica01 </h1>

    <form action="insertar.php" method="post">
        <label> Nombre: </label>
        <input type="text" name="txt_nombre" />

        <label> Apellidos: </label>
        <input type="text" name="txt_apellidos" />
        
        <label> Sexo </label>
        <select name="slc_sexo">
            <option name="opc_1">Masculino</option>
            <option name="opc_2">Femenino</option>
        </select>

        <input type="submit" value="Guardar">
    </form>

</body>
</html>