<?php	
	session_start();
	include_once '../config/conexao.php'; 
	
	
	
	if(isset($_POST["logar"])){
		
		$usuarios = mysqli_real_escape_string($conexao, $_POST["usuario"]);
		$senha    = mysqli_real_escape_string($conexao, md5($_POST["senha"]));
		
		if($usuarios == "" || $senha == ""){
			
			echo "<script> alert('Preecha todos os campos!'); location.href='../index.php' </script>";
			return true;
					
		}
		
		
		
		
		$select = $conexao->query("SELECT * FROM login WHERE login = '$usuarios' AND senha = '$senha' OR email = '$usuarios' AND senha = '$senha'");
		
				
		$row    = $select->num_rows;
		$get    = $select->fetch_array();
		$login  = $get['login'];
		$senha  = $get['senha'];		
		$perfil = $get['perfil'];
		$nome   = $get['nome'];
		$id     = $get['id'];
					
		
		if($row > 0){
			
			
			
			$_SESSION['perfil']= $perfil;
			$_SESSION['nome']= $nome;
			$_SESSION['id']= $id;
			$_SESSION['login']= $login;
			$_SESSION['senha']= $senha;
			
		
			header('Location: ../painel/index.php');
		
		}else{
			
			echo "<script> alert('Usuário ou senha invalido!'); location.href='../index.php' </script>";
			return true;
									
		}
	
	}


	
	
?>