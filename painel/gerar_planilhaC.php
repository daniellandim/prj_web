<?php

	session_start();

	include '../config/conexao.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Usuários</title>
	<head>
	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'usuarios.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="5">Lista de clientes do sistema!</tr>';
		$html .= '</tr>';
		
		
		$html .= '<tr>';
		$html .= '<td><b>ID</b></td>';
		$html .= '<td><b>Nome</b></td>';
		$html .= '<td><b>E-mail</b></td>';
		$html .= '<td><b>CPF / CNPJ</b></td>';
		$html .= '<td><b>Telefone</b></td>';
		$html .= '<td><b>Celular</b></td>';
		$html .= '<td><b>Conjugue</b></td>';
		$html .= '<td><b>2º Comprador</b></td>';
		$html .= '<td><b>status</b></td>';
		$html .= '<td><b>Observações</b></td>';
		$html .= '<td><b>CEP</b></td>';
		$html .= '<td><b>Largadouro</b></td>';
		$html .= '<td><b>Numero</b></td>';
		$html .= '<td><b>Cidade</b></td>';
		$html .= '<td><b>Bairro</b></td>';
		$html .= '<td><b>UF</b></td>';
		$html .= '</tr>';
		
		//Selecionar todos os itens da tabela 
		$result_msg_contatos = "SELECT * FROM clientes";
		$resultado_msg_contatos = mysqli_query($conexao , $result_msg_contatos);
		
		   
		
		while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){
			$html .= '<tr>';
			$html .= '<td>'.$row_msg_contatos["id"].'</td>';
			$html .= '<td>'.$row_msg_contatos["nome"].'</td>';
			$html .= '<td>'.$row_msg_contatos["email"].'</td>';
			$html .= '<td>'.$row_msg_contatos["cpf"].'</td>';
			$html .= '<td>'.$row_msg_contatos["telFixo"].'</td>';
			$html .= '<td>'.$row_msg_contatos["telCel"].'</td>';
			$html .= '<td>'.$row_msg_contatos["conjugue"].'</td>';
			$html .= '<td>'.$row_msg_contatos["sComprador"].'</td>';
			$html .= '<td>'.$row_msg_contatos["status"].'</td>';
			$html .= '<td>'.$row_msg_contatos["obs"].'</td>';
			$html .= '<td>'.$row_msg_contatos["cep"].'</td>';
			$html .= '<td>'.$row_msg_contatos["largadouro"].'</td>';
			$html .= '<td>'.$row_msg_contatos["numero"].'</td>';
			$html .= '<td>'.$row_msg_contatos["cidade"].'</td>';
			$html .= '<td>'.$row_msg_contatos["bairro"].'</td>';
			$html .= '<td>'.$row_msg_contatos["estado"].'</td>';
			
			
			//$data = date('d/m/Y H:i:s',strtotime($row_msg_contatos["created"]));
			//$html .= '<td>'.$data.'</td>';
			$html .= '</tr>';
			;
		}
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>