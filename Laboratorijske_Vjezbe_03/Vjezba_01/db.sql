DROP DATABASE IF EXISTS fakultet;

CREATE DATABASE fakultet;
USE fakultet;

DROP TABLE IF EXISTS Student;

CREATE TABLE Student (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    ime_studenta VARCHAR(32) NOT NULL,
    prezime_studenta VARCHAR(32) NOT NULL,
    JMBAG INT(10) NOT NULL,
    e_mail VARCHAR(32) NOT NULL
);