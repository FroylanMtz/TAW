<?php

include_once('db/database_utilities.php');

if(isset($_POST['correo']) && isset($_POST['contrasena'])){

    //SE manda a llamar esta funcion desde el archivo database_utilities y se le pasan todos los campos del formulatio, para el caso del tipo simplemente se lee el que se mando con el parametro get
    if(validate($_POST['correo'], $_POST['contrasena']) ){
        header("location: index.php?");
    }else{
        header("location: login.php?");
    }
  
  //Una vez que termina de insertar el nuevo registro
    //header("location: listado.php?t=".$t);

}