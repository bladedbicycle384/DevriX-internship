DROP DATABASE IF EXISTS JobsBoard;
CREATE DATABASE JobsBoard;
USE JobsBoard;

CREATE TABLE Admins(
  id int PRIMARY KEY NOT NULL auto_increment,
  username varchar(50) NOT NULL,
  password varchar(64) NOT NULL
);

CREATE TABLE Offers(
  id int PRIMARY KEY NOT NULL auto_increment,
  title varchar(150) NOT NULL,
  description varchar(1000) DEFAULT NULL,
  company varchar(100) NOT NULL,
  salary int NOT NULL
);
