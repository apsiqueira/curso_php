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

$emailCliente=date('d/m/Y H:i:s');





if(!is_numeric($cpfCliente) or strlen($cpfCliente)!=11){
echo "VEJA BEM, CPF &Eacute; N&Uacute;MERO E TEM QUE TER 11 DIGITOS!!!!";
exit();
}

//QUERY EM STRING PARA ENVIO AO MySQLi
$sql_edit = "UPDATE `minicurso`.`clientes` SET 
    `cliente`='$nomeCliente',
    `cpf`='$cpfCliente',
    `email`='$emailCliente',
    `nascimento`='$nascimentoCliente'
        WHERE id='$id_cliente';";


//EXECUCAO DA QUERY MYSQL
$MySQLi->query($sql_edit) OR trigger_error($MySQLi->error, E_USER_ERROR);

//SE PASSAR PELA LINHA ACIMA, A MENSAGEM ABAIXO SERÁ EXIBIDA
echo "<i class='alert alert-success'>EDI&Ccedil;&Atilde;O FEITA COM SUCESSO!</i>";

?>


<!-- REDIRECIONAMENTO APOS 2 SEGUNDOS-->
<meta http-equiv="refresh" content="2; url=consulta_dados.php">
