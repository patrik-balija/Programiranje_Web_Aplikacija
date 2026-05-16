DROP DATABASE IF EXISTS cnc_webshop;
CREATE DATABASE cnc_webshop;
USE cnc_webshop;

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

CREATE TABLE product_images (
    image_id INT AUTO_INCREMENT PRIMARY KEY,
    image_path VARCHAR(255) NOT NULL,
    id INT,
    FOREIGN KEY (id) REFERENCES products(id) ON DELETE CASCADE
);

CREATE TABLE product_highlights (
    highlight_id INT AUTO_INCREMENT PRIMARY KEY,
    highlight_text VARCHAR(255) NOT NULL,
    id INT,
    FOREIGN KEY (id) REFERENCES products(id) ON DELETE CASCADE
);

CREATE TABLE product_features (
    feature_id INT AUTO_INCREMENT PRIMARY KEY,
    feature_text VARCHAR(255) NOT NULL,
    id INT,
    FOREIGN KEY (id) REFERENCES products(id) ON DELETE CASCADE
);

CREATE TABLE product_options (
    option_id INT AUTO_INCREMENT PRIMARY KEY,
    option_text VARCHAR(255) NOT NULL,
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

INSERT INTO product_images (image_path, id)
VALUES 
("euromod1.png", 1), 
("euromod2.png", 1), 
("euromod3.png", 1), 
("euromod4.png", 1);

INSERT INTO product_highlights (highlight_text, id)
VALUES 
("Visoka stabilnost u X-osi", 1),
("Velika visina prolaza", 1),
("Pomična Y-os, optimalna izmjena materijala", 1),
("Dostupno u tri veličine", 1);

INSERT INTO product_features (feature_text, id)
VALUES
("Snažan isel upravljački sustav s održavanja oslobođenim servomotorima", 1),
("Pouzdane LES jedinice sa čeličnim kugličnim vretenima koriste se kao pogoni", 1),
("Jednostavno rukovanje zahvaljujući CNC upravljačkoj ploči podesivoj po visini", 1),
("Upravljačko računalo kompatibilno s mrežom s operativnim sustavom WINDOWS", 1),
("Paralelna klizna vrata", 1),
("Stezanje obradaka pomoću T-utorne ploče", 1);

INSERT INTO product_options (option_text, id)
VALUES
("iSA glodalačka vretena i vodom hlađena HF vretena", 1),
("Rotacijske i linearne stanice za izmjenu alata", 1),
("Sustav za raspršivanje rashladnog sredstva", 1),
("Cool-Min sustav hlađenja hladnim zrakom", 1),
("Automatsko mjerenje duljine alata", 1),
("Kontrola loma alata", 1),
("Elektronički ručni kotač", 1),
("Pneumatska klizna vrata", 1),
("Rotacijske jedinice", 1),
("Sigurnosna svjetlosna zavjesa", 1),
("Zatvorena ili svjetlosno nepropusna zaštitna hauba za laserske primjene", 1),
("Nadogradnja zaštitne haube za povećani prolaz portala", 1),
("Sustavi za stezanje obradaka (ručna poluga, vakuumski stolovi itd.)", 1),
("Sustavi za odsis", 1),
("LED rasvjeta radnog prostora stroja", 1),
("Odabir RAL boje", 1),
("PC upravljačka jedinica s slobodnim PCI utorima (za korištenje vanjskog PCI hardvera)", 1),
("Prilagodbe sučelja", 1),
("CAD/CAM softver", 1);

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

INSERT INTO product_images (image_path, id)
VALUES 
("overhead1.png", 2), 
("overhead2.png", 2), 
("overhead3.png", 2), 
("overhead4.png", 2);

INSERT INTO product_highlights (highlight_text, id)
VALUES 
("Optimalno iskorištenje prostora, slobodna zona obrade", 2),
("Optimalna zaštita od strugotine zahvaljujući nadzemnim osima", 2),
("Posebno pogodno za visoke i glomazne komponente", 2),
("Dostupno u pet veličina", 2);

INSERT INTO product_features (feature_text, id)
VALUES
("Potpuno slobodna površina stola za stezanje", 2),
("Snažan isel upravljački sustav s održavanja oslobođenim servomotorima", 2),
("Pouzdane LES jedinice sa čeličnim kugličnim vretenima koriste se kao pogoni", 2),
("Jednostavno rukovanje zahvaljujući CNC upravljačkoj ploči podesivoj po visini", 2),
("Upravljačko računalo kompatibilno s mrežom s operativnim sustavom WINDOWS", 2),
("Paralelna klizna vrata", 2),
("Stezanje obradaka pomoću T-utorne ploče", 2),
("Varijabilni otvori portala, ovisno o primjeni kupca", 2);

INSERT INTO product_options (option_text, id)
VALUES
("iSA glodalačka vretena i vodom hlađena HF vretena", 2),
("Rotacijske i linearne stanice za izmjenu alata", 2),
("Sustav za raspršivanje rashladnog sredstva", 2),
("Cool-Min sustav hlađenja hladnim zrakom", 2),
("Automatsko mjerenje duljine alata", 2),
("Kontrola loma alata", 2),
("Elektronički ručni kotač", 2),
("Pneumatska klizna vrata", 2),
("Rotacijske jedinice", 2),
("Maksimalno 6 interpolirajućih osi + 6 manipulacijskih osi", 2),
("Sigurnosna svjetlosna zavjesa", 2),
("Zatvorena ili svjetlosno nepropusna zaštitna hauba za laserske primjene", 2),
("Nadogradnja haube s povećanim otvorom portala", 2),
("Sustavi za stezanje obradaka (ručna poluga, vakuumski stolovi itd.)", 2),
("Sustavi za odsis", 2),
("Bočno utovarivanje za integraciju u proizvodne linije", 2),
("LED rasvjeta radnog prostora stroja", 2),
("PC upravljačka jedinica s slobodnim PCI utorima (za korištenje vanjskog PCI hardvera)", 2),
("Prilagodbe sučelja", 2),
("CAD/CAM softver", 2);
