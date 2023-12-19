CREATE DATABASE habbitracker;
USE habittracker;

CREATE TABLE `habits` (
  `id` int(9) NOT NULL UNIQUE AUTO_INCREMENT,
  `titel` varchar(100) NOT NULL,
  `bezeichnung` TEXT,
  `is_published` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `v_id` int(9),
  PRIMARY KEY(id),
  FOREIGN KEY(v_id) REFERENCES validation(v_id)
)

CREATE TABLE `validation` (
  `v_id` int(9) UNIQUE AUTO_INCREMENT,
  `is_executed` BOOLEAN NOT NULL,
  `not_executed` BOOLEAN NOT NULL,
  `datetime` DATETIME NOT NULL,
  PRIMARY KEY(v_id)
)

INSERT INTO habits (id, titel, bezeichnung)
VALUES 
(1, "meditation", "Meditieren, um mehr Gelassenheit zu bekommen"),
(2, "gym", "Ins Fitnessstudio gehen, um das Selbstvertrauen zu stärken"),
(3, "cold shower", "Kaltduschen, um Glückshormone auszuschütten"),
(4, "eat healthy", "Gesund essen, um den Körper mit den richtigen Nährstoffen zu versorgen")