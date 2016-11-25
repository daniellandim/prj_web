<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

 
<title>Editar Usuário</title>
</head>

<body>
 

<div class="container theme-showcase" role="main">
  
   <?php
	
		 include 'topo.php';
	
	
	
	$id = intval($_GET['id']);
	
	

	
	$editar = $conexao->query (" SELECT * FROM login WHERE id = $id");
	$mostar = @$conexao->query($editar);
	
	
	
	
	
	if(isset($_POST['salvar'])){
		
		
		
		
		$nome     =  mysqli_real_escape_string($conexao, $_POST['nome']);
		$email    =  mysqli_real_escape_string($conexao, $_POST["email"]);
		$login    =  mysqli_real_escape_string($conexao, $_POST["login"]);
		$senha    =  mysqli_real_escape_string($conexao, md5($_POST['senha']));
		$senha1   =  mysqli_real_escape_string($conexao, md5($_POST['senha1']));
		$perfil   =  mysqli_real_escape_string($conexao, $_POST["perfil"]);
		
		
		
		if($senha != $senha1){
		
		echo "
		<script>
		 alert('Senha diferente!'); location.href='listarUsuario.php'
		</script>";
			return true;
		
		}
			
				
		
		$sql = " UPDATE login SET
			 nome   = '".$nome."', 
			 email  = '".$email."', 
			 login  = '".$login."', 
			 senha  = '".$senha."', 
			 perfil = '".$perfil."' 
			 
			 WHERE 
			 
			 id = '$id' ";
		
		
		
		if (mysqli_query($conexao, $sql)) {
   			 
			 echo "
			<script>
		 	alert('Usuário editado com sucesso!'); location.href='listarUsuario.php'
			</script>";
			return true;
			 
			 
		} else {
   				
		
			echo "
			<script>
		 	alert('Erro ao Editar!'); location.href='listarUsuario.php'
			</script>" . mysqli_error($conexao);
			return true;
						
				}
		
		
	}	
?>
  
 
  <div class="page-header">
    <h1>Editar Usuários</h1>
  </div>
 <?php while ($editar = @mysqli_fetch_array ($editar)){ ?>
 
<fieldset>
  <form class="form-horizontal" action="editUsuario.php?id=<?php echo $id;?>" method="post">
    <div class="form-group">
      <label class="col-sm-2 control-label">Nome Completo</label>
      <div class="col-sm-10">
        <input name="nome" type="text" class="form-control" id="nome"  placeholder="Digite seu nome completo" value="<?php echo $editar["nome"];?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">E-mail</label>
      <div class="col-sm-10">
        <input name="email" type="email" class="form-control" id="email"  placeholder="Digite seu nome e-mail mais usado" value="<?php echo $editar["email"];?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Login / Usuário</label>
      <div class="col-sm-10">
        <input name="login" type="text" class="form-control" id="login"  placeholder="Digite seu Login / usuário" value="<?php echo $editar["login"];?>">
      </div>
    </div>
   
   
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
      <div class="col-sm-10">
        <input name="senha" type="password" class="form-control" id="inputPassword3" placeholder="Digite uma senha">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Confirmar senha</label>
      <div class="col-sm-10">
        <input name="senha1" type="password" class="form-control" id="inputPassword3" placeholder="Confirma a senha">
      </div>
    </div>
   
   
   
   
    <div class="form-group">
      <label class="col-sm-2 control-label">Perfil</label>
      <div class="col-sm-10">
        <select class="form-control" name="perfil">
          <option value="0">Selecione</option>
          <option value="1" <?php if ($editar["perfil"] == 1) { echo'selected';}?>>Administrador</option>
          <option value="2" <?php if ($editar["perfil"] == 2) { echo'selected';}?>>Usuário</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success"  name="salvar" id="salvar" value="salvar">
        <input type="reset" class="btn btn-warning"  name="resetar" id="resetar" value="resetar">
      </div>
    </div>
  </form>
</div>
</fieldset>
<?php }

	 include 'footer.php';

?>
    
</body>
</html>