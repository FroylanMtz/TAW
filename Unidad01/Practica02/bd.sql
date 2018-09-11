/*id, nombre, apellidos, genero*/

DROP DATABASE IF EXISTS Practica02;

CREATE DATABASE IF NOT EXISTS Practica02;

USE Practica02;

CREATE TABLE usuarios(
    usuario_id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(30) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    genero ENUM('Masculino', 'Femenino') NOT NULL
);