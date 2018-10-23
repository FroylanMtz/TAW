<?php


//Se instancia a un objeto de l clase controlador para que se manden llamar todos los metodo que cominican a la vista con el controlador
$Controlador = new Controller();

//Se crean dos arreglos para recibir la informacion de las carreras y los tutores
$datosCarreras = array();
$datosTutores = array();

//Se mandan llamar los metodos que traen estos datos, estos retornan un arreglo asociativo, esta informacion sera desplegada en los campos del formulario en donde se necesite mostrar los datos de la tabla que existen
$datosCarreras = $Controlador -> obtenerDatosCarreras();
$datosTutores = $Controlador -> obtenerDatosTutores();


?>

<h3>Agregar nuevo alumno</h3>
<hr>

<!--Formulario de registro del susuario-->
 <div class="card">

    <div class="card-header"> <strong> Datos del alumno </strong> </div>
    <div class="card-body" style="background-color: #eae3ea;">

        <!--Se cambia la cabecera del archivo, debido a que va tambien una imagen y para que la funcion del controlador pueda leer dicha imagen para almacenarla en su respectivp directorio-->
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="matricula">Matricula</label>
                <input type="text" class="form-control" name="matricula" placeholder="1800001">
            </div>
            
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Juanito Perez">
            </div>

            <!--En este campo se agregar opciones dinamicamente respecto a cuanta informacion existe, esta infroacion es leida desde la tabla de carreras, de este modo el usuario no tendra que aprender que carreras hay sino simplemente seleccionar a la que pertenece-->
            <div class="form-group">    
                <label for="carrera">Carrera</label>
                <select class="form-control" name="carrera">
                    <?php

                        for($i = 0; $i < count($datosCarreras); $i++ ){
                            echo '<option value="'.$datosCarreras[$i]['carrera_id'].'"> '. $datosCarreras[$i]['nombre'] .' </option>';
                        }
                    
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="situacion">Situacion Academica</label>
                <select class="form-control" name="situacion">
                    <option>Regular</option>
                    <option>Especial</option>
                </select>
            </div>

            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="text" class="form-control" name="correo" placeholder="alguien@ejemplo.com">
            </div>

            <!--Caso similar al pasado en donde existia una lista dinamica que mostraba las carreras registradas, en este caso muestra los tutores registrados para poder asignarlo a un usuario en particular-->
            
            <div class="form-group">
                <label for="tutor">Tutor</label>
                <select class="form-control" name="tutor">
                    <?php
                        for($i = 0; $i < count($datosTutores); $i++ ){
                            echo '<option value="'.$datosTutores[$i]['tutor_id'].'"> '. $datosTutores[$i]['nombre'] .' </option>';
                        }
                    ?>
                </select>
            </div>

            <!--Campo que subre la fotografia al servidor, lo coloca en una carpeta temporal desde donde se toma y se almacena en una carpeta especificada, para poder subir la imagen en el formulario se debe cambiar el encabezado a tipo  enctype="multipart/form-data" -->
            <div class="form-group">
                <label for="foto">Fotografia:</label> <br>
                <input type="file" class="form-control" name="foto"  />
            </div>

            <!--Boton que envia la informacion al metodo del controlador para que lo tome y este lo envia al modelo para que pueda ser almacenado en la tabla correspondiente-->
            <input type="submit" class="btn btn-primary" value="Guardar Datos" />

        </form>

    </div>
</div>

<?php

    //Compara si la variable exista, para que cuando entre sin que se le haya pulsado al boton esto no se accione y trate de hacer algo, eso solo se habilitara cuando el usaurio de click en el boton, es lo que significa
    if(isset($_POST['matricula'])){
        
        //Funcion del controlador que permite la lecutra de todas las variables del formulario para reunirlas en un objeto y posteriormente pasarlas al modelo apra que la almacene
        $Controlador -> guardarDatosAlumno();
    
    }

?>