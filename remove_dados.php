<?php

include_once("header.php"); //INCLUSAO DE CABECALHO
include_once("errmsg.php"); //INCLUSAO DE MSG DE ERROS
include_once("config.db.php"); //CONFIGURACAO DO BD


//ATRIBUI O PARAMETRO DE URL ID A UMA VARIAVEL
$id_cliente=$_GET['id'];

//MONTA A SQL QUERY
$sql_remove = "DELETE FROM `minicurso`.`clientes` WHERE id='$id_cliente';";

//EXECUTA A SQL QUERY
$MySQLi->query($sql_remove) OR trigger_error($MySQLi->error, E_USER_ERROR);

//SE PASSAR PELA LINHA ACIMA, A MENSAGEM ABAIXO SER√Å EXIBIDA
echo "<i class='alert alert-success'>REMO«√O FEITA COM SUCESSO!</i>";

?>

<!-- REDIRECIONAMENTO APOS 2 SEGUNDOS-->
<meta http-equiv="refresh" content="2; url=consulta_dados.php">
