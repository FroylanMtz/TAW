<?php

require_once("conexion.php");

class Datos extends Conexion{
        
    #Registro de usuarios
    public function registroUsuarioModel($datosModel, $tabla){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(usuario, password, email) VALUES(:usuario, :password, :email) ");
        
        $stmt->bindParam(":usuario", $datosModel["usuario"] , PDO::PARAM_STR);
        $stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "success";
        }else{
            return "error";
        }

        $stmt->close();

    }

    //Ingreso del usuario

    public function ingresoDeUsuarios($datosModel, $tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE usuario = :usuario AND password = :password");

        $stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);

        $stmt->bindParam(":password", $datosModel['password'], PDO::PARAM_STR);

        $stmt->execute();

        $r = array();

        $r = $stmt->fetch(PDO::FETCH_ASSOC);

        return $r;
        
    }

    //Function que retorna el password del usuario, con el fin de que lo valide cuando se va a eliminar un ususrio

    public function passDeUsuario($id, $tabla){
        
        $stmt = Conexion::conectar()->prepare("SELECT password FROM $tabla WHERE id = :id");

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        $r = array();

        $r = $stmt->fetch(PDO::FETCH_ASSOC);

        return $r;

    }

    //Traer todos los datos de la tabla

    public function traerDatos($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt->execute();

        $r = array();

        $r = $stmt->FetchAll();
        
        return $r;

    }

    //Traer los datos de un usuario en especifico pasandole el id
    public function traerDatosDeUsuario($id, $tabla){


        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");

        $stmt->bindParam(":id", $id , PDO::PARAM_STR);

        $stmt->execute();

        $r = array();

        $r = $stmt->FetchAll();
        
        return $r;

    }

    //Actualizar los datos de un usuario

    public function actualizarDatos($datosModel, $tabla){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET usuario = :usuario, password = :password, email = :email WHERE id = :id ");

        //$stmt = Conexion::conectar()->prepare("SELECT usuario = :usuario, password = :password, email = :email FROM $tabla WHERE id = :id ");

        $stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);

        $stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);

        $stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);

        $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);

        $stmt->execute();

        $filasAfectadas = $stmt->rowCount();

        return $filasAfectadas;

    }


    //Eliminar datos de un usuario

    //Aqui en lugar de pasarle un array, solo se le pasa una variable tipo int para que sepa el id del usuari a eliminar
    public function eliminarDatos($idUsuario, $tabla){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

        $stmt->bindParam(":id", $idUsuario, PDO::PARAM_INT);

        $stmt->execute();

        $filasAfectadas = $stmt->rowCount();

        return $filasAfectadas;
    }

}