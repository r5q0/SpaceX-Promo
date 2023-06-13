DROP DATABASE IF EXISTS SpaceX;
CREATE DATABASE SpaceX;
USE SpaceX;

CREATE TABLE `CSFP` (
  `id` int(11) unique NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `weight`  float NOT NULL,
  `motion-sick` boolean not NULL,
  `training` boolean not NULL,
  `criminal` boolean not NULL,

  PRIMARY KEY (`id`)
);









