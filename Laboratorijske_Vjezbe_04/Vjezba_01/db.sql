DROP DATABASE IF EXISTS aplikacija;
CREATE DATABASE aplikacija;
USE aplikacija;

CREATE TABLE korisnici (
    id INT AUTO_INCREMENT PRIMARY KEY,
    korisnickoIme VARCHAR(50) UNIQUE NOT NULL,
    sifra VARCHAR(255) NOT NULL,
    razinaDozvole INT NOT NULL DEFAULT 1
);