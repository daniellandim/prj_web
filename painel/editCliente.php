<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta content="text/html"; charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  
  
  <title>Editar de Clientes</title>

</head>

<body>


 <div class="container theme-showcase" role="main">

	<?php include 'topo.php'; 
	
	
		$id = intval($_GET['id']);
	

	
	$editar = $conexao->query (" SELECT * FROM clientes WHERE id = $id");
	$mostar = @$conexao->query($editar);
	
	
	
	
	
	if(isset($_POST['salvar'])){
		
		
		
		
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
		
		
						
		
		$sql = " UPDATE clientes SET
			 tPessoa     = '".$tPessoa."',
			 nome        = '".$nome."', 
			 email       = '".$email."', 
			 sexo        = '".$sexo."', 
			 cpf         = '".$cpf."', 
			 telFixo     = '".$telFixo."' ,
			 telCel      = '".$telCel."', 
			 conjugue    = '".$conjugue."', 
			 sComprador  = '".$sComprador."', 
			 status      = '".$status."', 
			 obs         = '".$obs."',
			 cep         = '".$cep."', 
			 largadouro  = '".$largadouro."', 
			 numero      = '".$numero."', 
			 cidade      = '".$cidade."', 
			 bairro      = '".$bairro."', 
			 estado      = '".$estado."'  
			 
			 WHERE 
			 
			 id = '$id' ";
		
		
		
		
		if (mysqli_query($conexao, $sql)) {
   			 
			 echo "
			<script>
		 	alert('Cliente editado com sucesso!'); location.href='listarCliente.php'
			</script>";
			return true;
			 
			 
		} else {
   				
		
			echo "
			<script>
		 	alert('Erro ao Editar!'); location.href='listarCliente.php'
			</script>" . mysqli_error($conexao);
			return true;
						
				}
		
		
	}
	
	
	?>


<div class="row">
  <div class="col-xs-12 col-md-8">
    <div class="page-header">
      <h1>Editar Clientes</h1>
    </div>
  </div>
  
  <div class="col-xs-6 col-md-4">
    
    <div class="page-header">
      
      
    
      
    </div>

    
  </div>
  
</div>

</div>




  <h3 class="text-success">Dados Pessoais </h3>
  
  		<?php while ($editar = @mysqli_fetch_array ($editar)){ ?>

  <form id="formulario" name="form1" class="form-horizontal" action="editCliente.php?id=<?php echo $id;?>" method="post">
   
   	<input type="hidden" value="1" name="tPessoa">
   
    <div class="form-group">
      <label class="col-sm-2 control-label">Nome</label>
      <div class="col-sm-10">
        <input name="nome" type="text" class="form-control" id="nome" value="<?php echo $editar["nome"];?>" placeholder="Digite seu nome completo">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">E-mail</label>
      <div class="col-sm-10">
        <input name="email" type="email" class="form-control" id="email" value="<?php echo $editar["email"];?>" placeholder="Digite seu nome e-mail mais usado">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label">Sexo</label>
      <div class="col-sm-10">
        <select class="form-control" name="sexo">
          <option value="0">Selecione</option>
          <option value="1"  <?php if ($editar["sexo"] == 1) { echo'selected';}?>>Masculino</option>
          <option value="2"  <?php if ($editar["sexo"] == 2) { echo'selected';}?>>Feminino</option>
        </select>
      </div>
    </div>
    
   
    
    <div class="form-group">
      <label for="cpf" class="col-sm-2 control-label">CPF</label>
      <div class="col-sm-10">
        <input name="cpf"  type="text" class="form-control" id="cpf" value="<?php echo $editar["cpf"];?>" placeholder="Digite o CPF">
      </div>
    </div>
    
    
    <div class="form-group">
      <label for="telFixo" class="col-sm-2 control-label">Telefone Fixo</label>
      <div class="col-sm-10">
        <input name="telFixo" type="text" class="form-control" id="telFixo" value="<?php echo $editar["telFixo"];?>" placeholder="Digite o telefone fixo!">
      </div>
    </div>
    
    <div class="form-group">
      <label for="telCel" class="col-sm-2 control-label">Telefone Celular</label>
      <div class="col-sm-10">
        <input name="telCel" type="text" class="form-control" id="telCel" value="<?php echo $editar["telCel"];?>" placeholder="Digite o telefone celular!">
      </div>
    </div>
    
    
    
     <div class="form-group">
      <label for="conjugue" class="col-sm-2 control-label">Conjugue</label>
      <div class="col-sm-10">
        <input name="conjugue" type="text" class="form-control" id="telCel" value="<?php echo $editar["conjugue"];?>" placeholder="Digite o nome do conjugue!">
      </div>
    </div>
    
    
     <div class="form-group">
      <label for="sComprador" class="col-sm-2 control-label">Segundo Comprador</label>
      <div class="col-sm-10">
        <input name="sComprador" type="text" class="form-control" id="telCel" value="<?php echo $editar["sComprador"];?>" placeholder="Digite o Segundo comprador!">
      </div>
    </div>
    
    
    
     <div class="form-group">
      <label for="status" class="col-sm-2 control-label">Status</label>
      <div class="col-sm-10">
        <input name="status" type="text" class="form-control" id="status" value="<?php echo $editar["status"];?>" placeholder="Digite o status!">
      </div>
    </div>
    
     <div class="form-group">
      <label for="obs" class="col-sm-2 control-label">Observações</label>
      <div class="col-sm-10">
      <textarea name="obs" type="text" class="form-control"  placeholder="Observações!"> <?php echo $editar["obs"];?></textarea>
      </div>
    </div>
    
   
    
    <h3 class="text-success">Endereço</h3>
    
    
    <div class="form-group">
      <label for="cep" class="col-sm-2 control-label">Cep</label>
      <div class="col-sm-10">
        <input name="cep" type="text" class="form-control" id="cep" value="<?php echo $editar["cep"];?>"   placeholder="Digite o CEP!">
      </div>
    </div>
    
    <div class="form-group">
      <label for="largadouro" class="col-sm-2 control-label">Largadouro</label>
      <div class="col-sm-10">
        <input name="largadouro" type="text" class="form-control" id="largadouro" value="<?php echo $editar["largadouro"];?>" placeholder="Digite o Lagardouro!">
      </div>
    </div>
    
    <div class="form-group">
      <label for="numero" class="col-sm-2 control-label">Numero</label>
      <div class="col-sm-10">
        <input name="numero" type="text" class="form-control" id="numero" value="<?php echo $editar["numero"];?>" placeholder="Digite o numero!">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 control-label">Cidade</label>
      <div class="col-sm-10">
        <input name="cidade" type="text" class="form-control" id="cidade" value="<?php echo $editar["cidade"];?>" placeholder="Digite a cidade!">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-sm-2 control-label">Bairro</label>
      <div class="col-sm-10">
        <input name="bairro" type="text" class="form-control" id="bairro" value="<?php echo $editar["bairro"];?>"  placeholder="Digite o bairro">
      </div>
    </div>
    
    
    
    <div class="form-group">
      <label class="col-sm-2 control-label">Estado</label>
      <div class="col-sm-10">
        <select class="form-control" name="estado">
          <option value=""> Selecione </option>
          <option value="AC" <?php if ($editar["estado"] == "AC") { echo'selected';}?>>Acre</option>
          <option value="AL" <?php if ($editar["estado"] == "AL") { echo'selected';}?>>Alagoas</option>
          <option value="AP" <?php if ($editar["estado"] == "AP") { echo'selected';}?>>Amapá</option>
          <option value="AM" <?php if ($editar["estado"] == "AM") { echo'selected';}?>>Amazonas</option>
          <option value="BA" <?php if ($editar["estado"] == "BA") { echo'selected';}?>>Bahia</option>
          <option value="CE" <?php if ($editar["estado"] == "CE") { echo'selected';}?>>Ceará</option>
          <option value="DF" <?php if ($editar["estado"] == "DF") { echo'selected';}?>>Distrito Federal</option>
          <option value="ES" <?php if ($editar["estado"] == "ES") { echo'selected';}?>>Espirito Santo</option>
          <option value="GO" <?php if ($editar["estado"] == "GO") { echo'selected';}?>>Goiás</option>
          <option value="MA" <?php if ($editar["estado"] == "MA") { echo'selected';}?>>Maranhão</option>
          <option value="MS" <?php if ($editar["estado"] == "MS") { echo'selected';}?>>Mato Grosso do Sul</option>
          <option value="MT" <?php if ($editar["estado"] == "MT") { echo'selected';}?>>Mato Grosso</option>
          <option value="MG  <?php if ($editar["estado"] == "MG") { echo'selected';}?>">Minas Gerais</option>
          <option value="PA" <?php if ($editar["estado"] == "PA") { echo'selected';}?>>Pará</option>
          <option value="PB" <?php if ($editar["estado"] == "PB") { echo'selected';}?>>Paraíba</option>
          <option value="PR" <?php if ($editar["estado"] == "PR") { echo'selected';}?>>Paraná</option>
          <option value="PE" <?php if ($editar["estado"] == "PE") { echo'selected';}?>>Pernambuco</option>
          <option value="PI" <?php if ($editar["estado"] == "PI") { echo'selected';}?>>Piauí</option>
          <option value="RJ" <?php if ($editar["estado"] == "RJ") { echo'selected';}?>>Rio de Janeiro</option>
          <option value="RN" <?php if ($editar["estado"] == "RN") { echo'selected';}?>>Rio Grande do Norte</option>
          <option value="RS" <?php if ($editar["estado"] == "RS") { echo'selected';}?>>Rio Grande do Sul</option>
          <option value="RO" <?php if ($editar["estado"] == "RO") { echo'selected';}?>>Rondônia</option>
          <option value="RR" <?php if ($editar["estado"] == "RR") { echo'selected';}?>>Roraima</option>
          <option value="SC" <?php if ($editar["estado"] == "SC") { echo'selected';}?>>Santa Catarina</option>
          <option value="SP" <?php if ($editar["estado"] == "SP") { echo'selected';}?>>São Paulo</option>
          <option value="SE" <?php if ($editar["estado"] == "SE") { echo'selected';}?>>Sergipe</option>
          <option value="TO" <?php if ($editar["estado"] == "TO") { echo'selected';}?>>Tocantins</option>
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
<?php

		}
		
 include 'footer.php'; ?>
</div>







</div>

</div>

	

</div>

</body>
</html>