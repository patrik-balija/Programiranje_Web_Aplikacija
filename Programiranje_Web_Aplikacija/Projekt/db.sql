CREATE DATABASE test;
USE test;

-- proizvodi
CREATE TABLE proizvodi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    naziv VARCHAR(100),
    cijena DECIMAL(10,2)
);

-- features (1 proizvod → više featurea)
CREATE TABLE features (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proizvod_id INT,
    tekst VARCHAR(255),
    FOREIGN KEY (proizvod_id) REFERENCES proizvodi(id)
);

-- proizvodi (CNC strojevi)
INSERT INTO proizvodi (naziv, cijena) VALUES
('CNC Basic', 2000),
('CNC Pro', 4000),
('CNC Ultra', 6000);

-- features
INSERT INTO features (proizvod_id, tekst) VALUES
(1, 'Radna površina 500x500'),
(1, 'Aluminijska konstrukcija'),

(2, 'Radna površina 1000x1000'),
(2, 'Automatska izmjena alata'),

(3, 'Industrijska snaga'),
(3, 'Visoka preciznost'),
(3, 'Hlađenje alata');