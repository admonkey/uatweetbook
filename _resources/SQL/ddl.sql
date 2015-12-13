-- CREATE DATABASE example_database;

-- CREATE USER 'username'@'localhost' IDENTIFIED BY 'p@55W0rd';

-- GRANT ALL PRIVILEGES ON example_database.* TO 'username'@'localhost';

DROP TABLE IF EXISTS Members;
CREATE TABLE Members (
  creation_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  user_name VARCHAR(50) NOT NULL PRIMARY KEY,
  first_name VARCHAR(50) NOT NULL,
  last_name VARCHAR(50) NOT NULL,
  email_address VARCHAR(50) NOT NULL,
  password CHAR(128) NOT NULL,
  salt CHAR(128) NOT NULL 
);

DROP TABLE IF EXISTS Groups;
CREATE TABLE Groups (
  user_name VARCHAR(50) NOT NULL PRIMARY KEY,
  group_type VARCHAR(10) NOT NULL,
  FOREIGN KEY (user_name) REFERENCES Members(user_name)
);

DROP TABLE IF EXISTS Login_Attempts;
CREATE TABLE Login_Attempts (
    user_id INT(11) NOT NULL,
    time VARCHAR(30) NOT NULL
);