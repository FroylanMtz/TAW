<?php
include_once('db/database_utilities.php');

$id = isset( $_GET['id'] ) ? $_GET['id'] : '';  //Se revisa que el id del usuario se encuentre mediante el metodo get.

$r = search_user($id); //Se realiza una busqueda en la base de datos donde se obtienen los atributos del registro con el id ingresado.

//Se revisa que la variable nombre y email, se encuentren definidas, para posteriormente realizar la actualizacino y al final se
//realiza un redireccionado a la pagina principal
if(isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['user_status']) && isset($_POST['user_type']) ){

    //Se manda a llamar esta funcion desde el archivo database_utilities y se le pasan todos los campos del formulatio
    user_update($_POST['email'],$_POST['pass'], $_POST['user_status'], $_POST['user_type'], $id );
  
  //Una vez que termina de insertar el nuevo registro
    header("location: user_listado.php");
  }

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Actualizar usuario</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

    <div class="row">
 
      <div class="large-9 columns">
        <h3>Modificar Usuario [ <?= $r[0]['id'] ?> ] </h3>
        <br>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
                <form method="POST" action="user_update.php?id=<?php echo($id)?>">

                  <label for="email">Correo:</label>
                  <input type="email" name="email" value="<?= $r[0]['email'] ?>"><br>

                  <label for="pass">Contraseña:</label>
                  <input type="password" name="pass" value="<?= $r[0]['password'] ?>"><br>

                  <label for="pass">Status:</label>

                  <?php 
                    if($r[0]['status_id'] == 1 )  {
                        echo '<input type="radio" name="user_status" value="1" checked>Activo<br>';
                        echo '<input type="radio" name="user_status" value="2">Inactivo<br>';
                    }else{
                        echo '<input type="radio" name="user_status" value="1" >Activo<br>';
                        echo '<input type="radio" name="user_status" value="2" checked>Inactivo<br>';
                    }
                  ?>
                
                  <label>Es Admin:</label>
                  <?php

                    if($r[0]['user_type_id'] == 1){
                        
                        
                        echo '<input type="radio" name="user_type" value="1" checked>Si<br>';
                        echo '<input type="radio" name="user_type" value="2">No<br>';

                    }else{
                        
                        echo '<input type="radio" name="user_type" value="1">Si<br>';
                        echo '<input type="radio" name="user_type" value="2" checked>No<br>';

                    }
                  
                  ?>
                  
                  
                  

                  <button type="submit" class="success">Actualizar</button>
                </form>
            </div>
          </section>
        </div>
      </div>
    </div>
     
    <?php require_once('footer.php'); ?>