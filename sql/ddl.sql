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