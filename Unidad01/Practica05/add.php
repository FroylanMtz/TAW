<?php
include_once('db/database_utilities.php');

$t = $_GET["t"];


//Se revisa que las variables nombre y email se esten recibiendo mediante el metodo POST para despues continuar
//con la insercion de los valores ingresados en la base de datos, para finalmente redireccionar al inicio
if(isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['posicion']) && isset($_POST['carrera']) && isset($_POST['email'])){

  //SE manda a llamar esta funcion desde el archivo database_utilities y se le pasan todos los campos del formulatio, para el caso del tipo simplemente se lee el que se mando con el parametro get
  add($_POST['id'],$_POST['nombre'], $_POST['posicion'], $_POST['carrera'], $_POST['email'], $t );

//Una vez que termina de insertar el nuevo registro
  header("location: listado.php?t=".$t);
}


?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

    <div class="row">
 
      <div class="large-9 columns">

        <?php
            //Dependiendo del tipo pasado es el texto que aparece en el boton de arriba para agregar en un nuevo usuario
            if($t == 1){
                echo '<h3>Agregar nuevo futbolista</h3>';
            }else{
                echo '<h3>Agregar nuevo basquetbolista</h3>';
            }
        ?>
        <br>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
                <form method="POST" action="add.php?t=<?=$t?>" >
                  
                  <!-- Formulario con todos los campos de la tabla sport_team-->
                  <label for="id">ID:</label>
                  <input type="text" name="id"><br>

                  <label for="nombre">Nombre:</label>
                  <input type="text" name="nombre"><br>
                  
                  <label for="posicion">Posicion:</label>
                  <input type="text" name="posicion"><br>

                  <label for="carrera">Carrera:</label>
                  <input type="text" name="carrera"><br>
                  
                  <label for="email">Email:</label>
                  <input type="email" name="email"><br>

                  <button type="submit" class="success">Guardar</button>
                </form>
            </div>
          </section>
        </div>
      </div>
    </div>
     
    <?php require_once('footer.php'); ?>