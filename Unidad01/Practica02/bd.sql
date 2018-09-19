/*id, nombre, apellidos, genero*/


/*Comando que crea la base de datos, si no existe la crea*/
CREATE DATABASE IF NOT EXISTS Practica02;

/*SE selecciona la bd*/
USE Practica02;

/*Y se crea una nueva tabla para almacenar a los usuario*/
CREATE TABLE usuarios(
    usuario_id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(30) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    genero ENUM('Masculino', 'Femenino') NOT NULL
);