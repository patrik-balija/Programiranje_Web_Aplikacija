DROP DATABASE IF EXISTS app;
CREATE DATABASE app;
USE app;

CREATE TABLE countries(
    id INT PRIMARY KEY AUTO_INCREMENT,
    country_name VARCHAR(64)
);

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(64),
    last_name VARCHAR(64),
    country_id INT,

    CONSTRAINT user_country FOREIGN KEY (country_id) REFERENCES countries(id)
);

INSERT INTO countries (country_name) VALUES 
('United States'),
('Canada'),
('United Kingdom'),
('Germany'),
('Australia'),
('Croatia');

INSERT INTO users (first_name, last_name, country_id) VALUES 
('Alice', 'Smith', 1),
('Bob', 'Jones', 2),
('Charlie', 'Brown', 3),
('Diana', 'Prince', 4),
('Ethan', 'Hunt', 5),
('Fiona', 'Gallagher', 6);