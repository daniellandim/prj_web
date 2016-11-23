<?php

	include_once '../config/conexao.php';


	if(isset($_POST["cadastrar"])){
	
			$nome     =  mysqli_real_escape_string($conexao, $_POST["nome"]);
			$email    =  mysqli_real_escape_string($conexao, $_POST["email"]);
			$login    =  mysqli_real_escape_string($conexao, $_POST["login"]);
			$senha    =  mysqli_real_escape_string($conexao, md5($_POST['senha']));
			$senha1   =  mysqli_real_escape_string($conexao, md5($_POST['senha1']));
			$perfil   =  mysqli_real_escape_string($conexao, $_POST["perfil"]);
	
	
	if($senha != $senha1){
		
		echo "
		<script>
		 alert('Senha diferente!'); location.href='index.php'
		</script>";
			return true;
		
		}
	
	
	$sql = " INSERT INTO login (nome,email,login,senha,perfil,datacadastro) VALUES ('".$nome."','".$email."','".$login."','".$senha."','".$perfil."', NOW());";
	
	
	
	$result = mysqli_query($conexao,$sql);
	
		
	if($result){
		
		echo "
		<script>
		 alert('Usuário cadastrado com sucesso!'); location.href='../painel/index.php'
		</script>";
			return true;
		
		}else{
			
			echo "
		<script>
		 alert('Erro ao efetuar o cadastro!'); location.href='cadUsuario.php'
		</script>";
			return true;
		
		}	

}	


?>