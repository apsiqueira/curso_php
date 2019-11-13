<?php

include_once("errmsg.php"); //INCLUSAO DE MSG DE ERROS
include_once("config.db.php"); //CONFIGURACAO DO BD

//MONTA A SQL QUERY
$sql_cria = "		CREATE TABLE IF NOT EXISTS `minicurso`.`clientes` (	
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`cliente` varchar(255) NOT NULL, 
		`cpf` varchar(11) NOT NULL,
		`email` varchar(255) NOT NULL,
		`nascimento` date NOT NULL,
			PRIMARY KEY (`id`)
		) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";

//EXECUTA A SQL QUERY
$MySQLi->query($sql_cria) OR trigger_error($MySQLi->error, E_USER_ERROR);



