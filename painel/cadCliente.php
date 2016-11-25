<?php
	session_start();

				if(!$_SESSION['perfil'] == 1 || !$_SESSION['perfil'] == 2){ 
	
				header("Location: ../index.php");
				exit();
				
			}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta content="text/html"; charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   
  <title>Cadastro de Clientes</title>

</head>

<body>

  <script>
    function alterna(tipo) {

     if (tipo == 1) {
       document.getElementById("tipo1").style.display = "block";
       document.getElementById("tipo2").style.display = "none";
     } else {
       document.getElementById("tipo1").style.display = "none";
       document.getElementById("tipo2").style.display = "block";
     }

   }
 </script>

 <div class="container theme-showcase" role="main">



			<?php include 'topo.php';
			
				
if(isset($_POST["cadastrar"])){
	
	
	$tPessoa    =  mysqli_real_escape_string($conexao, $_POST["tPessoa"]);
	$nome       =  mysqli_real_escape_string($conexao, $_POST["nome"]);
	$email      =  mysqli_real_escape_string($conexao, $_POST["email"]);
	$sexo       =  mysqli_real_escape_string($conexao, $_POST["sexo"]);
	$cpf        =  mysqli_real_escape_string($conexao, $_POST['cpf']);
	$telFixo    =  mysqli_real_escape_string($conexao, $_POST['telFixo']);
	$telCel     =  mysqli_real_escape_string($conexao, $_POST["telCel"]);
	$conjugue   =  mysqli_real_escape_string($conexao, $_POST["conjugue"]);
	$sComprador =  mysqli_real_escape_string($conexao, $_POST["sComprador"]);
	$status     =  mysqli_real_escape_string($conexao, $_POST["status"]);
	$obs        =  mysqli_real_escape_string($conexao, $_POST["obs"]);
	
	$cep         =  mysqli_real_escape_string($conexao, $_POST['cep']);
	$largadouro  =  mysqli_real_escape_string($conexao, $_POST['largadouro']);
	$numero      =  mysqli_real_escape_string($conexao, $_POST["numero"]);
	$cidade      =  mysqli_real_escape_string($conexao, $_POST['cidade']);
	$bairro      =  mysqli_real_escape_string($conexao, $_POST['bairro']);
	$estado	     =  mysqli_real_escape_string($conexao, $_POST["estado"]);
	
					
	$sql = " INSERT INTO clientes (tPessoa,nome,email,sexo,cpf,telFixo,telCel,conjugue,sComprador,status,obs,cep,largadouro,numero,cidade,bairro,estado) 
	VALUES ('".$tPessoa."','".$nome."','".$email."','".$sexo."','".$cpf."','".$telFixo."','".$telCel."','".$conjugue."','".$sComprador."','".$status."','".$obs."','".$cep."','".$largadouro."','".$numero."','".$cidade."','".$bairro."','".$estado."');";
	
	
	
	$result = mysqli_query($conexao,$sql);
	
			
	if($result){
		
		echo "
		<script>
		 alert('Cliente cadastrado com sucesso!'); location.href='index.php'
		</script>";
			return true;
		
		}else{
			
			echo "
		<script>
		 alert('Erro ao efetuar o cadastro!'); location.href='cadCliente.php'
		</script>";
			return true;
		
		}	

}


if(isset($_POST["cadastrar2"])){
	
	
	$tPessoa    =  mysqli_real_escape_string($conexao, $_POST["tPessoa"]);
	$cpf        =  mysqli_real_escape_string($conexao, $_POST["cpf"]);
	$rSocial    =  mysqli_real_escape_string($conexao, $_POST["rSocial"]);
	$nome       =  mysqli_real_escape_string($conexao, $_POST["nome"]);
	$email      =  mysqli_real_escape_string($conexao, $_POST["email"]);
	$telFixo    =  mysqli_real_escape_string($conexao, $_POST['telFixo']);
	$telCel     =  mysqli_real_escape_string($conexao, $_POST["telCel"]);
	
	
	$cep         =  mysqli_real_escape_string($conexao, $_POST['cep']);
	$largadouro  =  mysqli_real_escape_string($conexao, $_POST['largadouro']);
	$numero      =  mysqli_real_escape_string($conexao, $_POST["numero"]);
	$cidade      =  mysqli_real_escape_string($conexao, $_POST['cidade']);
	$bairro      =  mysqli_real_escape_string($conexao, $_POST['bairro']);
	$estado	     =  mysqli_real_escape_string($conexao, $_POST["estado"]);
	
					
	$sql = " INSERT INTO clientes (tPessoa,cpf,rSocial,nome,email,telFixo,telCel,cep,largadouro,numero,cidade,bairro,estado) 
	VALUES ('".$tPessoa."','".$cpf."','".$rSocial."','".$nome."','".$email."','".$telFixo."','".$telCel."','".$cep."','".$largadouro."','".$numero."','".$cidade."','".$bairro."','".$estado."');";
	
	
	
	$result = mysqli_query($conexao,$sql);
	
			
	if($result){
		
		echo "
		<script>
		 alert('Cliente cadastrado com sucesso!'); location.href='index.php'
		</script>";
			return true;
		
		}else{
			
			echo "
		<script>
		 alert('Erro ao efetuar o cadastro!'); location.href='cadCliente.php'
		</script>";
			return true;
		
		}	

}


			
?>

<script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/jquery.maskedinput.js" type="text/javascript"></script>
 
<script>
jQuery(function($){
 
   $("#telefone").mask("(99) 9999-9999");
   $("#telefonej").mask("(99) 9999-9999");
   $("#celular").mask("(99) 9 9999-9999");
   $("#celularj").mask("(99) 9 9999-9999");
   $("#cpf").mask("999.999.999-99");
   $("#cnpj").mask("999.999.999/9999-99");
   $("#cep").mask("99.999-999");
   $("#cepj").mask("99.999-999");
});

</script>            


<div class="row">
  
  	<div class="col-xs-12 col-md-8">
	     <div class="page-header">
    	  <h1>Cadastrar Clientes</h1>
         </div>
 	</div>
  
  <div class="col-xs-6 col-md-4">
    
    <div class="page-header">
      
      
    			 <div class="radio-inline">
     				 <label><input type="radio" name="tipo" value="1" onClick="alterna(this.value);">Fisica</label>
   				 </div>
    
    
    			<div class="radio-inline">
      				<label><input type="radio" name="tipo" value="2" onClick="alterna(this.value);">Juridica</label>
    			</div>

    
  </div>
  
</div>

</div>


<div id="tipo1" style="display:none;">


  <h3 class="text-success">Dados Pessoais </h3>

  <form id="formulario" name="form1" class="form-horizontal" action="" method="post">
   
   	<input type="hidden" value="1" name="tPessoa">
   
    <div class="form-group">
      <label class="col-sm-2 control-label">Nome</label>
      <div class="col-sm-10">
        <input name="nome" type="text" class="form-control" id="nome" required placeholder="Digite seu nome completo">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">E-mail</label>
      <div class="col-sm-10">
        <input name="email" type="email" class="form-control" id="email" required placeholder="Digite seu nome e-mail mais usado">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Sexo</label>
      <div class="col-sm-10">
        <select class="form-control" required name="sexo">
          <option value="0">Selecione</option>
          <option value="1">Masculino</option>
          <option value="2">Feminino</option>
        </select>
      </div>
    </div>
    
    
    <div class="form-group">
      <label for="cpf" class="col-sm-2 control-label">CPF</label>
      <div class="col-sm-10">
        <input name="cpf"  type="text" class="form-control" required id="cpf" onBlur="ValidarCPF(form1.cpf);" placeholder="Digite o CPF">
      </div>
    </div>
    
    
    <div class="form-group">
      <label for="telFixo" class="col-sm-2 control-label">Telefone Fixo</label>
      <div class="col-sm-10">
        <input name="telFixo" type="text" class="form-control" required id="telefone" placeholder="Digite o telefone fixo!">
      </div>
    </div>
    
    <div class="form-group">
      <label for="telCel" class="col-sm-2 control-label">Telefone Celular</label>
      <div class="col-sm-10">
        <input name="telCel" type="text" class="form-control" required id="celular" placeholder="Digite o telefone celular!">
      </div>
    </div>
    
    
    
     <div class="form-group">
      <label for="conjugue" class="col-sm-2 control-label">Conjugue</label>
      <div class="col-sm-10">
        <input name="conjugue" type="text" class="form-control" required id="telCel" placeholder="Digite o nome do conjugue!">
      </div>
    </div>
    
    
     <div class="form-group">
      <label for="sComprador" class="col-sm-2 control-label">Segundo Comprador</label>
      <div class="col-sm-10">
        <input name="sComprador" type="text" class="form-control" required id="telCel" placeholder="Digite o Segundo comprador!">
      </div>
    </div>
    
    
    
     <div class="form-group">
      <label for="status" class="col-sm-2 control-label">Status</label>
      <div class="col-sm-10">
        <input name="status" type="text" class="form-control" id="status" required placeholder="Digite o status!">
      </div>
    </div>
    
     <div class="form-group">
      <label for="obs" class="col-sm-2 control-label">Observações</label>
      <div class="col-sm-10">
      <textarea name="obs" type="text" class="form-control" id="obs" required placeholder="Observações!"></textarea>
      </div>
    </div>
    
    <h3 class="text-success">Endereço</h3>
    
    
    <div class="form-group">
      <label for="cep" class="col-sm-2 control-label">Cep</label>
      <div class="col-sm-10">
        <input name="cep" type="text" class="form-control" id="cep" required  placeholder="Digite o CEP!">
      </div>
    </div>
    
    <div class="form-group">
      <label for="largadouro" class="col-sm-2 control-label">Largadouro</label>
      <div class="col-sm-10">
        <input name="largadouro" type="text" class="form-control" required id="largadouro" placeholder="Digite o Lagardouro!">
      </div>
    </div>
    
    <div class="form-group">
      <label for="numero" class="col-sm-2 control-label">Numero</label>
      <div class="col-sm-10">
        <input name="numero" type="text" class="form-control" id="numero" required placeholder="Digite o numero!">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 control-label">Cidade</label>
      <div class="col-sm-10">
        <input name="cidade" type="text" class="form-control" id="cidade" placeholder="Digite a cidade!">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 control-label">Bairro</label>
      <div class="col-sm-10">
        <input name="bairro" type="text" class="form-control" id="bairro" required  placeholder="Digite o bairro">
      </div>
    </div>
    
    
    
    <div class="form-group">
      <label class="col-sm-2 control-label">Estado</label>
      <div class="col-sm-10">
        <select class="form-control" required name="estado">
          <option value=""> Selecione </option>
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espirito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MT">Mato Grosso</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
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

</div>





<div id="tipo2" style="display:none;">



  <h3 class="text-success">Dados da empresa </h3>

  <form id="formulario2" name="form2" class="form-horizontal" action="" method="post">
  
  <input type="hidden" value="2" name="tPessoa">
    
    <div class="form-group">
      <label class="col-sm-2 control-label">CNPJ</label>
      <div class="col-sm-10">
        <input name="cpf" type="text" class="form-control" required id="cnpj"  placeholder="Digite o CNPJ">
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="col-sm-2 control-label">Razão Social</label>
      <div class="col-sm-10">
        <input name="rSocial" type="text" class="form-control" required id="nome"  placeholder="Digite a razão social">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 control-label">Nome Responsável</label>
      <div class="col-sm-10">
        <input name="nome" type="text" class="form-control" id="nomeR" required placeholder="Digite seu nome do responsavel">
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="col-sm-2 control-label">E-mail</label>
      <div class="col-sm-10">
        <input name="email" type="text" class="form-control" id="email" required  placeholder="Digite o email ">
      </div>
    </div>
    
    
    
    
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Telefone Fixo</label>
      <div class="col-sm-10">
        <input name="telFixo" type="text" class="form-control" id="telefonej"  required placeholder="Digite o telefone fixo!">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Telefone Celular</label>
      <div class="col-sm-10">
        <input name="telCel" type="text" class="form-control" id="celularj" required placeholder="Digite o telefone celular!">
      </div>
    </div>
    
    
    
    <h3 class="text-success">Endereço</h3>
    
    
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Cep</label>
      <div class="col-sm-10">
        <input name="cep" type="text" class="form-control" id="cepj" required placeholder="Digite o CEP!">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Largadouro</label>
      <div class="col-sm-10">
        <input name="largadouro" type="text" class="form-control" required id="largadouro" placeholder="Digite o Lagardouro!">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Numero</label>
      <div class="col-sm-10">
        <input name="numero" type="text" class="form-control" id="numero" required placeholder="Digite o numero!">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 control-label">Cidade</label>
      <div class="col-sm-10">
        <input name="cidade" type="text" class="form-control" required id="cidade" placeholder="Digite a cidade!">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 control-label">Bairro</label>
      <div class="col-sm-10">
        <input name="bairro" type="text" class="form-control" id="bairro" required  placeholder="Digite o bairro">
      </div>
    </div>
    
    
    
    <div class="form-group">
      <label class="col-sm-2 control-label">Estado</label>
      <div class="col-sm-10">
        <select class="form-control" required name="estado">
          <option value=""> Selecione </option>
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espirito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MT">Mato Grosso</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
        </select>
      </div>
    </div>

    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success"  name="cadastrar2" id="cadastrar2" value="cadastrar">
        <input type="reset" class="btn btn-warning"  name="resetar" id="resetar" value="resetar">
      </div>
    </div>
    
  </form>

</div>

</div>
<?php include 'footer.php';?>
</div>




</body>
</html>