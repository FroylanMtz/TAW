<!--Vista del formulario del login-->
<h1>Inicio de Sesion</h1>


<!--Formulario de inicio-->
<form method="post">

    <input type="text" placeholder="Usuario" name="usuario" required>

    <input type="password" placeholder="Contraseña" name="pass" required>

    <input type="submit" value="Ingresar">

</form>

<?php

    //Instancia del objeto del controlador para hacer la validacion de los datos
    $ingreso = new MvcController();
    $ingreso->ingresoUsuarioController();

    if(isset($_GET['action'])){
        if($_GET['action'] == "fallo"){
            echo "No se pudo ingresar a la cuenta";
        }
    }

?>