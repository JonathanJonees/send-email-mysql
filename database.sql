/*
@Jonathan Jones
MySQL Backup
Source Server Version: 5.6.16
Source Database: teste
Date: 28/01/2015 01:14:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
--  Table structure for `contato`
-- ----------------------------
DROP TABLE IF EXISTS `contato`;
CREATE TABLE `contato` (
  `id` int(35) NOT NULL AUTO_INCREMENT,
  `nome` varchar(35) NOT NULL,
  `email` varchar(25) NOT NULL,
  `tel` varchar(35) NOT NULL,
  `celular` varchar(35) NOT NULL,
  `cidade` varchar(35) NOT NULL,
  `empresa` varchar(35) NOT NULL,
  `mensagem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `contato` VALUES ('1','Jonathan Jones da Silva','j@hotmail.com','46546','954511','MauÃ¡/SP','A45','sdasdsadaddnsadasÃ§dsjdnsadoÂ´snadoiaÂ´sd'), ('2','','','','','','',''), ('3','Jonathan Jones da Silva 1','jonap@hotmail.com','1145451','965451','MauÃ¡/SP','MultiaÃ d','AJIOAJOIAHOSHOUAHSABSVSYUVBAOÃ‡SNHAIPOSJAps\r\nSIJASOIJAOISJAois'), ('4','joni','jonp@hotmail.com','451549','454545','MauÃ¡','Sucessso','sdasdasdasdasd');
