<?php
$MySQL = array(
	'servidor' => '127.0.0.1',	// Endereço do servidor
	'usuario' => 'minicurso',		// Usuário
	'senha' => 'LH45H59ihUTRRdW5',				// Senha
	'banco' => 'minicurso'		// Nome do banco de dados
);

$MySQLi = new MySQLi($MySQL['servidor'], $MySQL['usuario'], $MySQL['senha'], $MySQL['banco']);

// Verifica se ocorreu um erro e exibe a mensagem de erro
if (mysqli_connect_errno())
    trigger_error(mysqli_connect_error(), E_USER_ERROR);

//CREATE USER 'minicurso'@'localhost' IDENTIFIED BY 'LH45H59ihUTRRdW5';
//GRANT ALL PRIVILEGES ON minicurso.* TO 'minicurso'@'localhost';
//FLUSH PRIVILEGES;
//

?>

