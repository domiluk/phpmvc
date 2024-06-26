CREATE DATABASE product_db;

USE product_db;

CREATE TABLE product (
	id INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(128) NOT NULL,
    description TEXT NULL DEFAULT NULL,
    PRIMARY KEY (id)
);

CREATE USER product_db_user@localhost IDENTIFIED BY 'secret';

GRANT ALL PRIVILEGES ON product_db.* TO product_db_user@localhost;

INSERT INTO product (name, description) VALUES
('Product One', 'This is product one'),
('Second Product', 'A second product here'),
('Product #3', ''),
('The 4th One', 'Some <b>HTML</b> in the description');