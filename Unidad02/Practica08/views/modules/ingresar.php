<h1>Inicio de Sesion</h1>

<form method="post">

    <input type="text" placeholder="usuario" name="usuario" required>

    <input type="password" placeholder="Contraseña" name="pass" required>

    <input type="submit" value="Ingresar">

</form>

<?php

    $ingreso = new MvcController();
    $ingreso->ingresoUsuarioController();

    if(isset($_GET['action'])){
        if($_GET['action'] == "fallo"){
            echo "Fallo al ingresar";
        }
    }

?>