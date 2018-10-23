<?php


class Model{

    //Una funcion con el parametro $enlacesModel que se recibe a traves del controlador

    public function enlacesPaginasModel($enlacesModel){
        //Validamos
        if($enlacesModel == "agregar_alumno" || $enlacesModel == "alumnos" || $enlacesModel == "editar_alumno" || $enlacesModel == "ver_alumno" ){
            //Mostramos el URL concatenado con la variable $enlacesModel
            $module = "views/modulos/".$enlacesModel.".php";
        }

        //Una vez que action vienen vacio (validnaod en el controlador) enctonces se consulta si la variable $enlacesModel es igual a la cadena index de ser asi se muestre index.php
        else if($enlacesModel == "index"){
            $module = "views/modulos/alumnos.php";
        }
        //Validar una LISTA BLANCA 
        else{
            $module = "views/modulos/alumnos.php";
        }

        return $module;
    }


   

}


?>