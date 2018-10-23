<?php

//Lista de todos los alumnos registrados en la tabla alumnos

//Se crea un objeto de tipo controlador para poder llamar los metodos para traer toda la informacion
$Controlador = new Controller();

//Se crea un array que va a recibir todos los obejtos 
$datosAlumnos = array();

//Y se llena ese array con la respuesta con los datos
$datosAlumnos = $Controlador -> obtenerDatosAlumnos();

?>

<h3>Lista de alumnos</h3>
<hr>

<!--Tabla para mostrar todos lso registros, en esta misma tabla tambien se crean los botones para editar o eliminar un registro-->
<div class="card">
    <div class="card-header"> <strong> Lista de alumnos </strong> </div>
    <div class="card-body" style="background-color: #eae3ea;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <!--Columnas de la cabecera de la tabla-->
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Carrera</th>
                    <th>Situacion</th>
                    <th>Correo</th>
                    <th>Tutor</th>
                    <th>Foto</th>
                    <th>Ver</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    //La tabla es llenada dinamicamente creando una nueva fila por cada registro en la tabla, toda la ifnormacion que aqui se despliega se trajo desde el controler con el metodo anteriormente definido
                    for($i=0; $i < count($datosAlumnos); $i++ ){
                        echo '<tr>';
                            echo '<td>'. $datosAlumnos[$i]['matricula'] .'</td>';
                            echo '<td>'. $datosAlumnos[$i]['alumno'] .'</td>';
                            echo '<td>'. $datosAlumnos[$i]['carrera'] .'</td>';
                            echo '<td>'. $datosAlumnos[$i]['situacion'] .'</td>';
                            echo '<td>'. $datosAlumnos[$i]['correo'] .'</td>';
                            echo '<td>'. $datosAlumnos[$i]['tutor'] .'</td>';
                            echo '<td>'. $datosAlumnos[$i]['foto'] .'</td>';
                            //Estos dos de abajo son los botones, se puede observar que estan listos para redirigir el flujo de la app a una pagina que se ellama editar y eliminar, teniendo un parametro el cual es la matricula del alumno a administrar

                            echo '<td> <a href="index.php?action=ver_alumno&id='.$datosAlumnos[$i]['matricula'].'" type="button" class="btn btn-primary"> Ver </a> </td>';

                            echo '<td> <a href="index.php?action=editar_alumno&id='.$datosAlumnos[$i]['matricula'].'" type="button" class="btn btn-warning"> Modificar </a> </td>';
                            
                            echo '<td>  <a href="index.php?action=eliminar_alumno&id='.$datosAlumnos[$i]['matricula'].'" type="button"  class="btn btn-danger"> Eliminar  </a> </td>';
                        echo '<tr>';
                    }
                
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php

//Valida que se accion el metodo solo si se hace clic en el boton y no cuando se pagina
if(isset($_GET['action'])) {
    if( $_GET['action'] == "eliminar_alumno"){
        $Controlador -> eliminarAlumno();
    }
}

?>