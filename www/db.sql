-- Active: 1713182230776@@127.0.0.1@3306
DROP DATABASE IF EXISTS equipjardin;
CREATE DATABASE equipjardin;

USE equipjardin;
CREATE TABLE user (
    id INT UNSIGNED AUTO_INCREMENT,
    email VARCHAR(50) UNIQUE NOT NULL,
    secret VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE product (
    id INT AUTO_INCREMENT,
    name VARCHAR(50) UNIQUE NOT NULL,
    price FLOAT NOT NULL,
    picture VARCHAR(250) NOT NULL,
    PRIMARY KEY(id) 
);

INSERT INTO product (name, price, picture) VALUES
('Tondeuse à gazon électrique', 199.99, 'tondeuse-electrique.jpg'),
('Taille-haie thermique', 299.99, 'taille-haie-thermique.jpg'),
('Débroussailleuse à essence', 249.99, 'debroussailleuse-essence.jpg'),
('Tracteur-tondeuse', 1999.99, 'tracteur-tondeuse.jpg'),
('Souffleur de feuilles à batterie', 149.99, 'souffleur-batterie.jpg');
