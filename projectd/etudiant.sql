CREATE DATABASE IF NOT EXISTS test CHARACTER SET utf8;
CREATE USER IF NOT EXISTS 'test'@'localhost' IDENTIFIED BY 'test';
GRANT ALL PRIVILEGES ON test.* TO 'test'@'localhost';


USE test;

CREATE TABLE IF NOT EXISTS etudiant (
    id INT(11)  NOT NULL AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100)  NOT NULL,
    specialite VARCHAR(100)  NOT NULL ,
    PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `etudiant` ( `id`,`nom`, `prenom`,`specialite`) 
VALUES 
(1,'Thiam', 'Dial', 'Developeur'),

(2,'Diallo', 'Mariama', 'Ad BDD'),

(3,'Balde', 'Ibrahima', 'Architecte Logiciel'),

(4,'Boukari', 'Fadel', 'Ad Reseaux'),

(5,'Hambili', 'Raouf', 'Dev');



