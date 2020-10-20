CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `id_condominio` int(10) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `cpf` varchar(11),
  `unidade` varchar(10),
  `ddd` int(2) DEFAULT NULL,
  `telefone` varchar(10) DEFAULT NULL,
  `data_inclusao` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  CONSTRAINT `FK_UsuCondom` FOREIGN KEY (`id_condominio`) REFERENCES `condominios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;