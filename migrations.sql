CREATE DATABASE blog;
USE blog;

CREATE TABLE posts(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT , 
content VARCHAR(1000)
);

INSERT INTO posts(content)
VALUES 
("Pirmais bloga ieraksts"),
("Otrais bloga ieraksts");

USE blog;

CREATE TABLE categories(
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT , 
category_name VARCHAR(25)
);

INSERT INTO categories(category_name)
VALUES 
("Muzika"),
("Sports"),
("Svetki");
