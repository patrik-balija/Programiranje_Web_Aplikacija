DROP DATABASE IF EXISTS ispit_vjezba;
CREATE DATABASE ispit_vjezba;
USE ispit_vjezba;

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(64) NOT NULL,
    last_name VARCHAR(64) NOT NULL
);

INSERT INTO users(first_name, last_name) VALUES
("Patrik", "Balija"),
("Marina", "Mohović");