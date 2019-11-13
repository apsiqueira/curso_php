<?php

include_once("header.php"); //INCLUSAO DE CABECALHO
include_once("errmsg.php"); //INCLUSAO DE MSG DE ERROS
include_once("config.db.php"); //CONFIGURACAO DO BD

//DADOS EXTRAIDOS DO FORMULARIO VIA POST
$id_cliente=$_POST['id'];
$nomeCliente=$_POST['nome'];
$cpfCliente=$_POST['cpf'];
$emailCliente=$_POST['email'];
$nascimentoCliente=$_POST['nascimento'];

//MONTA A SQL QUERY
$sql_input = "INSERT INTO `minicurso`.`clientes` (`id`, `cpf`, `cliente`, `email`,`nascimento`) 			
		VALUES (NULL ,'$cpfCliente','$nomeCliente','$emailCliente','$nascimentoCliente')";

//EXECUTA A SQL QUERY
$MySQLi->query($sql_input) OR trigger_error($MySQLi->error, E_USER_ERROR);

//SE PASSAR PELA LINHA ACIMA, A MENSAGEM ABAIXO SERÁ EXIBIDA
echo "<i class='alert alert-success'>CADASTRO FEITO COM SUCESSO FEITA COM SUCESSO!</i>";

?>


<!-- REDIRECIONAMENTO APOS 2 SEGUNDOS -->
<meta http-equiv="refresh" content="2; url=consulta_dados.php">
