DROP DATABASE IF EXISTS `bobvance`;

CREATE DATABASE `bobvance`;

USE `bobvance`;

CREATE TABLE `koelkasten` (
id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  naam VARCHAR(255) NOT NULL,
  prijs VARCHAR (255) NOT NULL,
  beschrijving TEXT NOT NULL,
  gewicht VARCHAR(255) NOT NULL,
   foto VARCHAR(6000) NOT NULL
);

CREATE TABLE `contact` (
id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  naam VARCHAR(255) NOT NULL,
  mail VARCHAR(255) NOT NULL,
  bericht TEXT NOT NULL

);