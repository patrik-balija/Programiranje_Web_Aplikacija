DROP DATABASE IF EXISTS korisnici;

CREATE DATABASE korisnici;

USE korisnici;

DROP TABLE IF EXISTS korisnik;

CREATE TABLE korisnik (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    ime VARCHAR(32) NOT NULL,
    prezime VARCHAR(32) NOT NULL,
    spol VARCHAR(2) NOT NULL,
    telefon VARCHAR(32) NOT NULL,
    email VARCHAR(64) NOT NULL,
    godine INT(3) NOT NULL,
    hobi VARCHAR(64) NOT NULL
);

INSERT INTO korisnik (ime, prezime, spol, telefon, email, godine, hobi)
VALUES 
("Juraj", "Habdelić", "M", "555 4567", "jhabdelic@tvz.hr", 34, "planinarenje"),
("Marin", "Držić", "M", "555 4567", "mdrzic@tvz.hr", 22, "planinarenje"),
("August", "Harambašić", "M", "555 4567", "aharambasic@tvz.hr", 40, "planinarenje");