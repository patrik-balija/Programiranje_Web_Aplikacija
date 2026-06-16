DROP DATABASE IF EXISTS fakultet;
CREATE DATABASE fakultet;
USE fakultet;

CREATE TABLE predmeti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sifra INT,
    naziv VARCHAR(255),
    ects INT
);
