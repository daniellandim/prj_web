<?php

	 session_start();
	
		if(isset($_GET['logout']) || !$_SESSION['perfil']){
		session_destroy();
		
		header('Location: ../index.php');
		}
	 
	 include '../config/conexao.php';
 
	 $id = intval($_GET['id']);
	
		
	$sql = $conexao->query (" DELETE FROM login WHERE id = '".$id."'");
	
	$excluir = $conexao->query($sql);
	
	if(!$excluir){
		
		echo "
		<script>
		 alert('Usuário deletado com sucesso!'); 
		 location.href='listarUsuario.php'
		</script>";
		return true;
		
	}else{
		
		echo "
		<script>
		 alert('Não foi possivel deletar usúario!');
		 location.href='listarUsuario.php'
		</script>";
		return true;
	
	
		}

?>