# Host: localhost  (Version 5.7.17)
# Date: 2017-11-17 10:33:29
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "cliente"
#

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "cliente"
#

INSERT INTO `cliente` VALUES (2,'Evan Marinho','(079)9 9885-4921','Av Hermes Fontes','Aracaju','SE','evan_ms@hotmail.com'),(3,'Luan Kisaki','(079)9 9191-6350','Rua Gararu','Aracaju','SE','luankisaki@hotmail.com');

#
# Structure for table "livros"
#

CREATE TABLE `livros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(80) DEFAULT NULL,
  `autor` varchar(80) DEFAULT NULL,
  `dt_lancamento` date DEFAULT NULL,
  `sinopse` text,
  `img_livro` varchar(255) DEFAULT NULL,
  `qtd` double(9,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "livros"
#

INSERT INTO `livros` VALUES 
(2,'INSEGURANÇA ALIMENTAR','JUSENILDES','2017-07-13','O livro ajuda as pessoas que possuem problemas na alimentação.',NULL,2.00),(3,'IT: A COISA','STEPHEN KING','1984-11-11','Uma maldição honda a cidade de townsville.','',1.00),(4,'SONIC NEGRO','LEONARDO MACÊDO','1996-06-13','Retrata sobre a aparição de alienigenas.','',1.00),(5,'GAME OF THRONES','MONTEIRO LOBATO','1985-06-10','A estória entre o encontro de João das Neves e Danadas Tarantella.','',1.00),(7,'VIKINGS','PAULO COELHO','2001-08-05','A historia de uns cabra brabo fazendo brabice com tudo que respira.','',1.00),(8,'COMIGO É MAIS EMBAIXO','CATARINA EMILLY','2017-01-13','Narra uma intença história de uma garota estressada.','',1.00);

#
# Structure for table "login"
#

CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "login"
#

INSERT INTO `login` VALUES (1,'EVAN','EVAN321654'),(2,'VINICIUS','321'),(3,'JUSENILDES','123'),(4,'LUAN','KISAKI');
