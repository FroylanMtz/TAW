<h3>Para eliminar un usuario primero necesita ingresar su contraseña</h3>
<form method="POST">

    <label> Ingrese su contraseña: </label>
    <input type="password" name="contra_confirm" >
    <input type="submit" value="Eliminar">

</form>

<?php

    if(isset($_POST['contra_confirm'])){

        $datos = new MvcController();
        $r = $datos->eliminaDatosUsuario();

    }
    
?>