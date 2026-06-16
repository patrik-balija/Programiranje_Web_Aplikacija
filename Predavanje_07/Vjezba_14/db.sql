CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ime VARCHAR(64),
    prezime VARCHAR(64),
    korisnicko_ime VARCHAR(64) UNIQUE,
    lozinka VARCHAR(64),
    drzava VARCHAR(64),
    opis TEXT,
    vrijeme_kreiranja TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);