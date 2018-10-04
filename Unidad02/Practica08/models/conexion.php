<?php

class Conexion{

    public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=practica07", "root", "");
        return $link;
    }

}