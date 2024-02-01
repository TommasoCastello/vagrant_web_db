drop database if exists todo;
create database todo;
use todo;

CREATE TABLE `attivita` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `data` date NOT NULL,
  `titolo` varchar(100) NOT NULL,
  `descrizione` varchar(500) NOT NULL
);

