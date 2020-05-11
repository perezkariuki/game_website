CREATE DATABASE IF NOT EXISTS Daysons;
USE Daysons;

CREATE TABLE account(
  Id int(255) not null auto_increment,
  email varchar(255) NOT NULL DEFAULT '',
  username varchar(255) NOT NULL DEFAULT '',
  password varchar(255) NOT NULL DEFAULT '',
  primary key (Id),
  UNIQUE KEY (username)
);
