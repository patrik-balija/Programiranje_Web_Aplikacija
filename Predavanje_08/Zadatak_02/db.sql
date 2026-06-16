DROP DATABASE IF EXISTS ispit_vjezba;
CREATE DATABASE ispit_vjezba;
USE ispit_vjezba;

CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(64) NOT NULL,
    last_name VARCHAR(64) NOT NULL,
    country VARCHAR(64) NOT NULL
);
