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

DROP TABLE IF EXISTS Products;
CREATE TABLE Products (
    product_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    product_name VARCHAR(50) NOT NULL,
    product_desc VARCHAR(1000) NOT NULL,
    product_price DECIMAL(10,2) NOT NULL,
    product_inventory INT NOT NULL,
    product_featured_value INT
);

INSERT INTO Products (product_name, product_desc, product_price, product_inventory, product_featured_value)
  VALUES ('Platypus Crown', 'For the King of Platypi.', 999.99, 0, NULL);
INSERT INTO Products (product_name, product_desc, product_price, product_inventory, product_featured_value)
  VALUES ('Platypus Wax', 'Make your platypus shine with this product.', 3.42, 100, NULL);
INSERT INTO Products (product_name, product_desc, product_price, product_inventory, product_featured_value)
  VALUES ('Platypus Shoes', 'Protect your platypus feet with this product.', 42.42, 100, 80);
INSERT INTO Products (product_name, product_desc, product_price, product_inventory, product_featured_value)
  VALUES ('Platypus T-Shirt', 'Show your platypus pride with this product.', 14.42, 100, 100);
INSERT INTO Products (product_name, product_desc, product_price, product_inventory, product_featured_value)
  VALUES ('Platypus Swing', 'Enjoy fun outside with your platypus swinging in this product.', 280.00, 100, 90);
INSERT INTO Products (product_name, product_desc, product_price, product_inventory, product_featured_value)
  VALUES ('Platypus Chow', 'Feed your platypus this 2lb bag of product.', 5.00, 100, NULL);
INSERT INTO Products (product_name, product_desc, product_price, product_inventory, product_featured_value)
  VALUES ('Platypus Hat', 'Show your platypus pride with this product.', 11.44, 100, 95);