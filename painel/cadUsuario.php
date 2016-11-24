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
			
			
			if($_SESSION['perfil'] == 2){ 
	
				echo "<script> alert('Você não tem permissão para acessar esta página!'); location.href='index.php' </script>";
				return true;
				
			}
			
			
		
?>

  <div class="page-header">
    <h1>Cadastrar Usuários</h1>
  </div>

  <form class="form-horizontal" action="../controllers/cadUsuario.php" method="post">
   
    <div class="form-group">
    	<label class="col-sm-2 control-label">Nome Completo</label>
    		<div class="col-sm-5">
        <input name="nome" type="text" class="form-control" id="nome" required placeholder="Digite seu nome completo">
      		</div>
    </div>
    
    
    <div class="form-group">
    	<label class="col-sm-2 control-label">E-mail</label>
     	   <div class="col-md-5">
        		<input name="email" type="email" class="form-control" required id="email"  placeholder="Digite seu nome e-mail mais usado">
     	   </div>
    </div>
    
    <div class="form-group">
    	<label class="col-sm-2 control-label">Login / Usuário</label>
    		<div class="col-md-5">
        		<input name="login" type="text" required class="form-control" id="login"  placeholder="Digite seu Login / usuário">
      		</div>
    </div>
   
   
    <div class="form-group">
    	<label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
      	  <div class="col-md-5">
          	<input name="senha" type="password" required class="form-control" id="inputPassword3" placeholder="Digite uma senha">
     	  </div>
    </div>
   
   
    <div class="form-group">
    	<label for="inputPassword3" class="col-sm-2 control-label">Confirmar senha</label>
      	  <div class="col-md-5">
        		<input name="senha1" type="password" required class="form-control" id="inputPassword3" placeholder="Digite uma senha">
      	  </div>
    </div>
   
   
   
    <div class="form-group">
      <label class="col-sm-2 control-label">Perfil</label>
      <div class="col-md-5">
        <select class="form-control" required name="perfil">
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

	<?php  include 'footer.php';?>

</div>

 </body>
</html>