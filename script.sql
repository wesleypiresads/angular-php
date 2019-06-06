/* CREANDO O BANCO DE DADOS */
CREATE DATABASE IF NOT EXISTS gerenciador;

/* CRIANDO A TABELA DE NOTICIAS */
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(32) NOT NULL,
  `corpo` varchar(100) NOT NULL,
  `imagem` varchar(32) NOT NULL,
  `data_da_noticia` datetime NOT NULL,
  `hora_da_notica` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

/* INSERINDO UMA NOTICIAS */
INSERT INTO `noticias` (`id`, `titulo`, `corpo`, `data_da_noticia`, `hora_da_notica`) VALUES
(1, 'Aprender é sempre bom', 'Nuca deixe de estudar, pois so assim você vencerá', '2014-06-01 01:12:26', '2014-05-31 17:12:26');