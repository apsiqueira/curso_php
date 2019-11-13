<?php

include_once("header.php"); //INCLUSAO DE CABECALHO
include_once("errmsg.php"); //INCLUSAO DE MSG DE ERROS
include_once("config.db.php"); //CONFIGURACAO DO BD



// echo $nome;

?>





<!-- CADASTRO DE NOVO CLIENTE -->
<a class='btn btn-info' href='cadastrar.php'>NOVO</a><br><br>

<!-- CONTAINER INICIAL DO BOOTSTRAP -->
<div class="container-fluid">
 
    

<?php 


//MONTA SQL QUERY
$sql_read = "SELECT * FROM `minicurso`.`clientes` ORDER BY nascimento DESC, cliente ASC";

//EXECUTA SQL QUERY
$saida_sql=$MySQLi->query($sql_read) OR trigger_error($MySQLi->error, E_USER_ERROR);


while ($coluna = $saida_sql->fetch_object()) {
	
    //ATRIBUI VALORES S VARIAVEIS
	$id_cliente=$coluna->id;
	$nome[$id_cliente]=$coluna->cliente;
	$cpf[$id_cliente]=$coluna->cpf;
	$email[$id_cliente]=$coluna->email;
	$nascimento[$id_cliente]=$coluna->nascimento;

	
	
	//ESCREVE OS DADOS EM DIV PARA FORMATACAO DO LAYOUT
	//OS BOTOES TAMBEM RECEBEM O LAYOUT DO BOOTSTRAP 4
    echo "
     <div class='row'>
        <div class='col-2'>$nome[$id_cliente]</div>
        <div class='col-2'>$cpf[$id_cliente]</div>
        <div class='col-2'>$email[$id_cliente]</div>
        <div class='col-2'>$nascimento[$id_cliente]</div>

        <div class='col-4'>
            <a class='btn btn-success' href='editar.php?id=$id_cliente'>EDITAR</a>
            <a class='btn btn-danger' href='remove_dados.php?id=$id_cliente'>REMOVER</a>
        </div>
     </div>
     <hr>
    ";

}

?>

  
 
</div>

</body>
</html>
