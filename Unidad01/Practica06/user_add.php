<?php
include_once('db/database_utilities.php');

//Se revisa que las variables nombre y email se esten recibiendo mediante el metodo POST para despues continuar
//con la insercion de los valores ingresados en la base de datos, para finalmente redireccionar al inicio
if(isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['user_status']) && isset($_POST['user_type']) ){

  //Se manda a llamar esta funcion desde el archivo database_utilities y se le pasan todos los campos del formulatio, para el caso del tipo simplemente se lee el que se mando con el parametro get
  add_user($_POST['email'],$_POST['pass'], $_POST['user_status'], $_POST['user_type'] );

//Una vez que termina de insertar el nuevo registro
  header("location: user_listado.php?t=".$t);
}


?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agregar nuevo jugador</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

    
    <div class="row">
 
      <div class="large-9 columns">
        <h3> Agregar a un nuevo usuario </h3>
        <br>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
                <form method="POST" action="user_add.php" >
                  
                  <!-- Formulario con todos los campos de la tabla sport_team-->

                  <label for="email">Correo:</label>
                  <input type="email" name="email"><br>

                  <label for="pass">Contraseña:</label>
                  <input type="password" name="pass"><br>

                  <label for="pass">Status:</label>
                  <input type="radio" name="user_status" value="1">Activo<br>
                  <input type="radio" name="user_status" value="2">Inactivo<br>
                  
                  <label for="pass">Es Admin:</label>
                  <input type="radio" name="user_type" value="1">Si<br>
                  <input type="radio" name="user_type" value="2">No<br>

                  
                  <button type="submit" class="success">Guardar</button>
                </form>
            </div>
          </section>
        </div>
      </div>
    </div>
     
    <?php require_once('footer.php'); ?>