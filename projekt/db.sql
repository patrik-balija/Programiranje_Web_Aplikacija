DROP DATABASE IF EXISTS cnc_webshop;
CREATE DATABASE cnc_webshop;
USE cnc_webshop;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE carts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE cart_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cart_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL DEFAULT 1,

    FOREIGN KEY (cart_id) REFERENCES carts(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    short_description VARCHAR(255) NOT NULL,
    long_description TEXT NOT NULL,
    type VARCHAR(50) NOT NULL,
    main_image VARCHAR(255) DEFAULT "placeholder.png"
);

CREATE TABLE product_materials (
    material_id INT AUTO_INCREMENT PRIMARY KEY,
    material_name VARCHAR(50) NOT NULL,
    id INT,
    FOREIGN KEY (id) REFERENCES products(id) ON DELETE CASCADE
);

CREATE TABLE product_applications (
    application_id INT AUTO_INCREMENT PRIMARY KEY,
    application_name VARCHAR(50) NOT NULL,
    id INT,
    FOREIGN KEY (id) REFERENCES products(id) ON DELETE CASCADE
);

CREATE TABLE product_industries (
    industry_id INT AUTO_INCREMENT PRIMARY KEY,
    industry_name VARCHAR(50) NOT NULL,
    id INT,
    FOREIGN KEY (id) REFERENCES products(id) ON DELETE CASCADE
);

-- EuroMod

INSERT INTO products (name, short_description, long_description, type, main_image) 
VALUES 
("EuroMod", 
"Kvaliteta koja pokreće. Stabilno. Kompaktno. Precizno.", 
"EuroMod CNC glodalica je CNC sustav spreman za povezivanje s visokom razinom jednostavnosti upravljanja za širok raspon zadataka i primjena. Mehaničku osnovu čine stabilne komponente s niskim vibracijama, izrađene od aluminijsko-čeličnih spojeva. Kuglična vretena bez zazora, korištena u linearnim osima, osiguravaju visoku preciznost. Pri razvoju EuroMod CNC glodalice poseban je naglasak stavljen na minimiziranje potrebnog prostora. Korišteni servomotori bez potrebe za održavanjem optimalno su usklađeni s mehanikom, energetskom elektronikom i upravljačkim sustavom. Za EuroMod je dostupna serija visokoučinkovitih glodalačkih vretena iz naše ponude. Glodalačka vretena koriste se za standardne 3-osne primjene, no obrada u 3+2 osi uz rotacijsko-nagibnu jedinicu također ne predstavlja problem za EuroMod.", 
"CNC stroj" ,
"euromod.png");

INSERT INTO product_materials (material_name, id)
VALUES 
("Mjed", 1), 
("Pjene", 1), 
("EVA pjena", 1), 
("Pjene", 1), 
("Aluminij", 1), 
("Plastika", 1), 
("Drvo", 1);

INSERT INTO product_applications (application_name, id)
VALUES 
("Automatizacija", 1), 
("Glodanje", 1), 
("Laserska obrada", 1);

INSERT INTO product_industries (industry_name, id)
VALUES 
("Istraživanje i razvoj", 1), 
("Obrazovanje i osposobljavanje", 1), 
("Izrada kalupa i prototipova", 1), 
("Medicinska tehnologija", 1);

-- OverHead

INSERT INTO products (name, short_description, long_description, type, main_image) 
VALUES 
("Overhead", 
"Nova dimenzija obradnog prostora. Slobodna radna površina zahvaljujući nadzemnim osima.", 
"Imate ograničen prostor, ali vam je i dalje potreban maksimalan hod? Onda imamo rješenje za vas. Serija nadzemnih strojeva omogućuje maksimalne hodove uz kompaktan otisak. Svi pogoni smješteni su u gornjem dijelu stroja. Time radni stol stroja ostaje potpuno slobodan za vaše individualne primjene.", 
"CNC stroj", 
"overhead.png");

INSERT INTO product_materials (material_name, id)
VALUES 
("Mjed", 2), 
("Pjene", 2), 
("EVA pjena", 2), 
("Aluminij", 2), 
("Plastika", 2), 
("Drvo", 2);

INSERT INTO product_applications (application_name, id)
VALUES 
("Automatizacija", 2), 
("Doziranje", 2), 
("Glodanje", 2), 
("Laserska obrada", 2);

INSERT INTO product_industries (industry_name, id)
VALUES 
("Automobilska industrija", 2), 
("Istraživanje i razvoj", 2), 
("Obrazovanje i osposobljavanje", 2), 
("Izrada kalupa i prototipova", 2), 
("Medicinska tehnologija", 2);
