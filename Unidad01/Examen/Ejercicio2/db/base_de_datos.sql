/*
Alumnos:
    Matricula.
    Carrera.
    Nombre.
    Tutor (ID)
Tutores:
    No.Empleado.
    Nombre.
    Carrera.
Carrera:
    Id.
    Nombre.
*/

DROP DATABASE IF EXISTS examen;

CREATE DATABASE IF NOT EXISTS examen;

USE examen;

CREATE TABLE carrera(
    carrera_id int primary key auto_increment,
    nombre varchar(50)
);

CREATE TABLE tutores(
    tutor_id int unique auto_increment,
    nombre varchar(100) not null,
    carrera_id int unique not null,

    foreign key(carrera_id) references carrera(carrera_id)
);

CREATE TABLE alumnos(

    matricula varchar(10) primary key,
    carrera varchar(50) not null,
    nombre varchar(100) not null,
    tutor_id int not null unique,

    foreign key (tutor_id) references tutores(tutor_id)
);