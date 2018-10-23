<?php


class EnlacesPaginas{

    //Una funcion con el parametro $enlacesModel que se recibe a traves del controlador

    public function enlacesPaginasModel($enlacesModel){
        //Validamos
        if($enlacesModel == "nosotros" || $enlacesModel == "servicios" || $enlacesModel == "contacto" ){
            //Mostramos el URL concatenado con la variable $enlacesModel
            $module = "views/modules/".$enlacesModel.".php";
        }

        //Una vez que action vienen vacio (validnaod en el controlador) enctonces se consulta si la variable $enlacesModel es igual a la cadena index de ser asi se muestre index.php
        else if($enlacesModel == "index"){
            $module = "views/modules/inicio.php";
        }

        //Validar una LISTA BLANCA 
        else{
            $module = "views/modules/inicio.php";
        }

        return $module;
    }

}


?>