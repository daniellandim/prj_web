<?php

	$servidor = "localhost";
	$user     = "root";
	$senha    = "";
	$banco    = "sistemaMvc";
	
	// Conecta-se ao banco de dados MySQLi
	$conexao = new mysqli($servidor, $user, $senha, $banco);
	
	// Caso algo tenha dado errado, exibe uma mensagem de erro
	
	if($conexao->connect_error){
		
		echo ("Erro na conexão" . $conexao->connect_error);
	
	}
	
?>