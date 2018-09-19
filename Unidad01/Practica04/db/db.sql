/* id, nombre ,email, password*/


/*Comando que crea la base de datos, si no existe la crea*/
CREATE DATABASE IF NOT EXISTS Practica04;

/*Se selecciona la bd*/
USE Practica04;

/*Y se crea una nueva tabla para almacenar a los usuario*/
CREATE TABLE usuario(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    correo VARCHAR(50) NOT NULL
)ENGINE=InnoDB;