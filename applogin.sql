# Host: localhost  (Version 5.5.5-10.4.32-MariaDB)
# Date: 2024-11-05 04:23:03
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "flower"
#

DROP TABLE IF EXISTS `flower`;
CREATE TABLE `flower` (
  `stock` double NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `ukuran` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`stock`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "flower"
#

INSERT INTO `flower` VALUES (40,'Daisy','Sedang','Rp.60.000'),(50,'Aster','Sedang','Rp.40.000'),(35,'Mawar','Besar','Rp.80.000'),(25,'Tulip','Besar','Rp.95.000'),(45,'Peony','Besar','Rp.70.000');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` double NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `pass` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'admin',123),(2,'user1',123),(3,'user2',123);
