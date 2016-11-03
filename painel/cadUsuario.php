<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

 
<title>Cadastrar Usuário</title>
</head>

<body>
 

<div class="container theme-showcase" role="main">
  
      
          	<?php  include 'topo.php';
			
			
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
		 alert('Usuário cadastrado com sucesso!'); location.href='index.php'
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

		
  			
          
 
  <div class="page-header">
    <h1>Cadastrar Usuários</h1>
  </div>

  <form class="form-horizontal" action="cadUsuario.php" method="post">
    <div class="form-group">
      <label class="col-sm-2 control-label">Nome Completo</label>
    
      <div class="col-md-5">
        <input name="nome" type="text" class="form-control" id="nome"  placeholder="Digite seu nome completo">
      </div>
    
    
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">E-mail</label>
     
      <div class="col-md-5">
        <input name="email" type="email" class="form-control" id="email"  placeholder="Digite seu nome e-mail mais usado">
      </div>
    
    
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Login / Usuário</label>
    
    
      <div class="col-md-5">
        <input name="login" type="text" class="form-control" id="login"  placeholder="Digite seu Login / usuário">
      </div>
    
    
    </div>
   
   
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
      
      <div class="col-md-5">
        <input name="senha" type="password" class="form-control" id="inputPassword3" placeholder="Digite uma senha">
      </div>
    
    </div>
   
   
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Confirmar senha</label>
      
      <div class="col-md-5">
        <input name="senha1" type="password" class="form-control" id="inputPassword3" placeholder="Digite uma senha">
      </div>
    
    </div>
   
   
   
    <div class="form-group">
      <label class="col-sm-2 control-label">Perfil</label>
      <div class="col-md-5">
        <select class="form-control" name="perfil">
          <option value="0">Selecione</option>
          <option value="1">Administrador</option>
          <option value="2">Usuário</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success"  name="cadastrar" id="Cadastrar" value="Cadastrar">
        <input type="reset" class="btn btn-warning"  name="resetar" id="resetar" value="resetar">
      </div>
    </div>
  </form>

	<?php include 'footer.php';?>

</div>

 </body>
</html>