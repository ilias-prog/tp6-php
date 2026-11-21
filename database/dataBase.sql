CREATE DATABASE tp_php;

USE tp_php;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    prix DECIMAL(10, 2) NOT NULL,
    quantite INT 
);

INSERT INTO products (name, prix, quantité)
VALUES ('tv', 5000.00, 5);

INSERT INTO products (name, prix, quantité)
VALUES ('ps5', 7000, 2);

INSERT INTO products (name, prix, quantité)
VALUES ('ipad', 4500.00, 5);
INSERT INTO products (name, prix, quantité)
VALUES ('fan', 200.00, 15);