  <?php
  
  		session_start();
  
 		 include '../config/conexao.php';

	
	$id = intval($_GET['id']);
	
	
	
	

	
	$editar = $conexao->query (" SELECT * FROM login WHERE id = $id");
	$mostar = @$conexao->query($editar);
	
		
	
	if(isset($_POST['salvar'])){
		

		
		$senha    =  mysqli_real_escape_string($conexao, md5($_POST['senha']));
		$senha1   =  mysqli_real_escape_string($conexao, md5($_POST['senha1']));
		
		
		
		if($senha != $senha1){
		
		echo "
		<script>
		 alert('Senha diferente!'); location.href='../painel/index.php'
		</script>";
			return true;
		
		}
			
				
		
		$sql = " UPDATE login SET
			 
			 senha  = '".$senha."'			 
			 
			 WHERE 
			 
			 id = '$id' ";
		
		
		
		if (mysqli_query($conexao, $sql)) {
   			 
			 echo "
			<script>
		 	alert('Senha Alterada com sucesso!'); location.href='../painel/index.php'
			</script>";
			return true;
			 
			 
		} else {
   				
		
			echo "
			<script>
		 	alert('Erro ao Editar!'); location.href='../painel/index.php'
			</script>" . mysqli_error($conexao);
			return true;
						
				}
		
		
	}	
?>