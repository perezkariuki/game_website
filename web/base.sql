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

CREATE TABLE `Gameupload`(
`gameid` int(255) NOT NULL auto_increment,
`GameName` varchar(100) NOT NULL,
`Mainimage` varchar(100) NOT NULL,
`category` text(255) NOT NULL,
`company` text(255) NOT NULL,
`language` text(255) NOT NULL,
`totalSize` text(255) NOT NULL,
`compressedSize` text(255) NOT NULL,
`image1` text(255) NOT NULL,
`image2` text(255) NOT NULL,
`image3` text(255) NOT NULL,
`Gameabout` text(255) NOT NULL,
`require` text(255) NOT NULL,
`account_id` int(11) NOT NULL,
PRIMARY KEY  (`gameid`),
CONSTRAINT FK_Gameupload_1
FOREIGN KEY (account_id) REFERENCES account(Id)
ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;
