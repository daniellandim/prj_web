<?php
if(isset($_POST["calcular"])){
	
$tipoF = $_POST["tipoF"];
$valor = $_POST["valor"];
$entrada = $_POST["entrada"];
$periodo = $_POST["nPrestacoes"]; 
$taxa = 0.015;

$sDevedor = $valor - $entrada;

$prestacao = $sDevedor * (pow(1 + $taxa,$periodo) * $taxa) / (pow(1 + $taxa, $periodo) - 1);

$juros       = array ($periodo);
$amortizacao = array ($periodo);
$sDevedor    = array ($periodo);

$saldoAux = $valor;
	
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/jumbotron.css" rel="stylesheet" type="text/css">
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet" type="text/css">
	

<title>::. Sistema FNI .::</title>
</head>
<body>
 
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SIMULADOR ON-LINE</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" action="controllers/login.php" method="post">
            <div class="form-group">
              <input type="text" name="usuario" placeholder="E-mail / usuário " class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="senha" placeholder="Digite sua Senha!" class="form-control">
            </div>
            <input type="submit" name="logar" class="btn btn-success" value="Entrar">
         	
             <a class="navbar-link" href="#" role="button" data-toggle="modal" data-target="#myModalSenha">Esqueceu sua senha?</a>
          </form>
         
        
         
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
 

<div class="jumbotron">
      <div class="container">
        <h1>Bem vindo ao simulador On-Line</h1>
        <p>Aqui voçê podera simular o financiamento de imóvel. Caso precise de mais informações favor entrar em contato.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button" data-toggle="modal" data-target="#myModal">Fale Conosco</a></p>
      </div>
    </div>
    
    

<!-- Imicio Modal Fale Conosco -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Fale Conosco</h4>
      </div>
      <div class="modal-body">
       
       <form class="form-horizontal" action="" method="post">
       
    <div class="form-group">
    	<label class="col-sm-2 control-label">Nome:</label>
      		<div class="col-sm-10">
        		<input name="nome" type="text" class="form-control" id="nome"  placeholder="Digite seu nome">
      		</div>
    </div>
    
    <div class="form-group">
    	<label class="col-sm-2 control-label">E-mail</label>
      		<div class="col-sm-10">
        		<input name="email" type="email" class="form-control" id="email"  placeholder="Digite seu nome e-mail mais usado">
      		</div>
    </div>
    
    
    <div class="form-group">
    	<label class="col-sm-2 control-label">Assunto</label>
    		<div class="col-sm-10">
        		<input name="assunto" type="text" class="form-control" id="assunto"  placeholder="Digite o assunto">
      		</div>
    </div>
    
    
    <div class="form-group">
    	<label  class="col-sm-2 control-label">Mensagem</label>
    		<div class="col-sm-10">
        		<textarea for="textarea" name="mensagem" class="form-control " type="textarea" class="mensagem" id="mensagem" placeholder="Digite sua mensagem"></textarea>
      		</div>
    </div>
    
    
    <div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
        	<input type="submit" class="btn btn-success"  name="cadastrar" id="Cadastrar" value="Enviar">
        	<input type="reset" class="btn btn-warning"  name="resetar" id="resetar" value="Apagar">
      	</div>
    </div>
  
  </form>
       
       
      </div>
      
    </div>
  </div>
</div>
    
     <!-- Fim do Modal -->
     
     
     
     
     
     
     
     <!-- Imicio Modal Esqueceu sua senha-->

<div class="modal fade" id="myModalSenha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Recuperar Senha</h4>
      </div>
      <div class="modal-body">
       
       <form class="form-horizontal" action="controllers/recSenha.php" method="post">
       
    
    
    <div class="form-group">
    	<label class="col-sm-2 control-label">E-mail</label>
      		<div class="col-sm-10">
        		<input name="email" type="email" class="form-control" id="email"  placeholder="Digite o E-mail castrado">
      		</div>
    </div>
    
    
        
    
    <div class="form-group">
    	<div class="col-sm-offset-2 col-sm-10">
        	<input type="submit" class="btn btn-success"  name="recuperar" id="recuperar" value="Recuperar">
        	<input type="reset" class="btn btn-warning"  name="resetar" id="resetar" value="Apagar">
      	</div>
    </div>
  
  </form>
       
       
      </div>
      
    </div>
  </div>
</div>
    
     <!-- Fim do Modal -->
    

     
    
    
 
        
       
       
       
       <div class="container">
       

       
           <!--area calculadora-->
  
        

	<form action="index.php" class="calculator-form form-horizontal"  id="form0" method="post">

		<fieldset>
                
     <div class="form-group"><legend> Dados da Simulação </legend></div>
     
     
            
           
           <div class="form-group">
           
                <label class="col-sm-4 control-label">Tipo de Financiamento</label>
                <div class="input-group col-sm-4">
                <select class="form-control" name="tipoF">
                  <option value="0">Selecione</option>
                  <option value="1">SAC</option>
                  <option value="2">PRICE</option>
                </select>
                
                </div>
			
           </div>
           
           
           
            <div class="form-group">
                <label class="col-sm-4 control-label">Valor</label>
                <div class="input-group col-sm-4"><div class="input-group-addon ">R$</div><input class="money form-control text-right" maxlength="14" name="valor" required type="number" value="" />
                </div>
			</div>
            
            
            
            <div class="form-group">
                <label class="col-sm-4 control-label">Entrada</label>
                <div class="input-group col-sm-4"><div class="input-group-addon ">R$</div><input class="money form-control text-right"  id="Entrada" maxlength="14" name="entrada" required type="number" value="" />
                </div>
			</div>
           
           
           
            <div class="form-group">
                <label class="col-sm-4 control-label">N&#250;mero de presta&#231;&#245;es</label>
                	<div class="input-group col-sm-4"><div class="input-group-addon addon-invisible">Nº</div><input class="int form-control text-right" id="nPrestacoes" maxlength="14" name="nPrestacoes" required type="number" value="" />
                    </div>
			</div>
            
            
            
            <div class="form-group">
            	<div class="col-sm-offset-4 col-sm-8">
                        <input class="btn btn-success" name="calcular" type="submit" value="Calcular">
                </div>    
           </div>
</fieldset>

</form>
    </div>





       
       
       <br>
       <br>
       
        
<div class="container">

	<?php  if(isset($_POST["calcular"])){?>

<table class="table table-hover"  border="0">
  <tr>
    <td width="20%">Nº da Parcela</td>
    <td width="18%">Amortização</td>
    <td width="24%">Juros</td>
    <td width="21%">Prestação</td>
    <td width="17%">Saldo Devedor</td>
  </tr>
  
  <?php 
  
 
  
  for($i = 1 ; $i <= $periodo; $i++){
	 
	
	
	$juros['$i'] = ($saldoAux * $taxa);
	$jurosAux = $juros['$i'];
	
	$amortizacao['$i'] = $prestacao - $jurosAux;
	
	$sDevedor['$i'] = $saldoAux - $amortizacao['$i'];
	
	$saldoAux = $sDevedor['$i'];
	
	
  
  
  ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo number_format($amortizacao['$i'] ,2,",",".");?></td>
    <td><?php echo number_format($juros['$i'] ,2,",",".");?></td>
    <td><?php echo number_format($prestacao,2,",",".");?></td>
    <td><?php echo number_format($sDevedor['$i'] ,2,",",".");?></td>
  </tr>
  <?php } }?>
</table>

</div>

    <?php include 'footer.php' ;?>
    
    
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário --> 
<script src="js/bootstrap.min.js"></script>

    
     </div>
</body>
</html>


