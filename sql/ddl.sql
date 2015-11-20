-- CREATE DATABASE uoasa05;

-- CREATE USER 'uoasa05'@'localhost' IDENTIFIED BY 'userpass';

-- GRANT ALL PRIVILEGES ON uoasa05.* TO 'uoasa05'@'localhost';

DROP TABLE IF EXISTS Contacts;
CREATE TABLE Contacts (
    contact_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    address VARCHAR(50) NOT NULL,
    city VARCHAR(50) NOT NULL,
    state VARCHAR(50) NOT NULL,
    zip VARCHAR(10) NOT NULL
);

DROP TABLE IF EXISTS Product_Photos;
DROP TABLE IF EXISTS Products;
CREATE TABLE Products (
    product_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    product_name VARCHAR(50) NOT NULL,
    product_desc VARCHAR(1000) NOT NULL,
    product_price DECIMAL(10,2) NOT NULL,
    product_inventory INT NOT NULL,
    product_featured_value INT
);

CREATE TABLE Product_Photos (
    photo_filename VARCHAR(50) NOT NULL,
    product_id INT NOT NULL,
    FOREIGN KEY (product_id) REFERENCES Products(product_id),
    PRIMARY KEY(product_id,photo_filename)
);

-- Products
INSERT INTO Products (product_name, product_desc, product_price, product_inventory, product_featured_value)
  VALUES ('Platypus Crown', 'For the King of Platypi.', 999.99, 0, NULL);
INSERT INTO Products (product_name, product_desc, product_price, product_inventory, product_featured_value)
  VALUES ('Platypus Wax', 'Make your platypus shine with this product.', 3.42, 100, NULL);
INSERT INTO Products (product_name, product_desc, product_price, product_inventory, product_featured_value)
  VALUES ('Platypus Swimsuit', 'Hit the beach in style!', 28.95, 100, 80);
INSERT INTO Products (product_name, product_desc, product_price, product_inventory, product_featured_value)
  VALUES ('Platypus T-Shirt', 'Show your platypus pride with this product.', 14.42, 100, 100);
INSERT INTO Products (product_name, product_desc, product_price, product_inventory, product_featured_value)
  VALUES ('Platypus Hammer', 'Enjoy fun outside with your platypus swinging this product.', 280.00, 100, 90);
INSERT INTO Products (product_name, product_desc, product_price, product_inventory, product_featured_value)
  VALUES ('Platypus Worksuit', 'Get your platypus to work in the right gear.', 500.00, 100, NULL);
INSERT INTO Products (product_name, product_desc, product_price, product_inventory, product_featured_value)
  VALUES ('Platypus Hat', 'Show your platypus pride with this product.', 11.44, 100, 95);

-- Product Photos
INSERT INTO Product_Photos (photo_filename, product_id)
  VALUES ('Platypuseidon.png', 1);
INSERT INTO Product_Photos (photo_filename, product_id)
  VALUES ('Crest_Platypus.gif', 2);
INSERT INTO Product_Photos (photo_filename, product_id)
  VALUES ('68d9d626994ae27c2172c1aa1b733367-d95av8q.png', 3);
INSERT INTO Product_Photos (photo_filename, product_id)
  VALUES ('Platypus-T-Shirt.png', 4);
INSERT INTO Product_Photos (photo_filename, product_id)
  VALUES ('QScVqjo.png', 5);
INSERT INTO Product_Photos (photo_filename, product_id)
  VALUES ('paddy_platypus_colour.png', 6);
INSERT INTO Product_Photos (photo_filename, product_id)
  VALUES ('tumblr_nro2d6zvAs1uahb7no1_1280.png', 7);