<?php
	session_start();

				if(!$_SESSION['perfil'] == 1 || !$_SESSION['perfil'] == 2){ 
	
				header("Location: ../index.php");
				exit();
				
			}



	if(isset($_POST["calcular"])){
		
	$tipoF   = $_POST["tipoF"];
	$valor   = $_POST["valor"];
	$entrada = $_POST["entrada"];
	$periodo = $_POST["nPrestacoes"]; 
	$taxa = 3;
	$taxa /= 100;
	
	
}

	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


 
<title>Simulação de Financiamento</title>
</head>


<div class="container theme-showcase" role="main">



			<?php include 'topo.php';?>

<body>
<form action="simulacaoForm.php" class="calculator-form form-horizontal"  id="form0" method="post">

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

<br>
<br>
<br>

<?php  if(isset($_POST["calcular"])){
	
	if($tipoF == 2){
	
	?>
    
<fieldset>
	
<table class="table table-hover"  border="0">

 <tr>
  	<td colspan="5" class="text-center"><h3> <strong>Financiamento PRICE</strong></h3></td>
 	</tr>

  <tr class="bg-info">
    <td width="20%">Nº da Parcela</td>
    <td width="18%">Amortização</td>
    <td width="24%">Juros</td>
    <td width="21%">Prestação</td>
    <td width="17%">Saldo Devedor</td>
  </tr>
  
  
  <tr>
    <td>0</td>
    <td>0,00</td>
    <td>0,00</td>
     <td>0,00</td>
    <td><?php echo number_format($saldo = ($valor - $entrada) ,2,",",".");?></td>
  </tr>
  
  <?php 
  $sDevedor = $valor - $entrada;
  
  	
	$prestacao = $sDevedor * (pow(1 + $taxa,$periodo) * $taxa) / (pow(1 + $taxa, $periodo) - 1);
	
	$juros       = array ($periodo);
	$amortizacao = array ($periodo);
	$sDevedor    = array ($periodo);
	
	$saldoAux = $saldo;	
 
  
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
<?php }?>
</fieldset>


<!--  SAC -->

<?php  if(isset($_POST["calcular"])){
	
		if($tipoF == 1){
	
	?>
<fieldset>
	
<table class="table table-hover"  border="0">
	<tr>
  	<td colspan="5" class="text-center"><h3> <strong>Financiamento SAC</strong></h3></td>
 	</tr>


  <tr class="bg-info">
    <td>Nº da Parcela</td>
    <td>Juros</td>
    <td>Prestação</td>
     <td>Amortização</td>
    <td>Saldo Devedor</td>
  </tr>
  <tr>
    <td>0</td>
    <td>0,00</td>
    <td>0,00</td>
     <td>0,00</td>
    <td><?php echo number_format($sDevedor1 = ($valor - $entrada) ,2,",",".");?></td>
  </tr>
  
  <?php 
    
	$sDevedor1 = $valor - $entrada;
	
	$amortizacao = ($sDevedor1 / $periodo); 
	
	$juros     = array ($periodo);
	$sDevedor  = array ($periodo);
	$prestacao = array ($periodo);

	$saldoAux = $sDevedor1;
	
	
 	
  
  for ($i = 1; $i <= $periodo; $i++) {
          
 			$juros[$i] = $saldoAux * $taxa;
			
			
            
			$sDevedor[$i] = $saldoAux - $amortizacao;
            
						
			$saldoAux = $sDevedor[$i];
            
			$prestacao[$i] = $amortizacao + $juros[$i];
	
	
  
  
  ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo number_format($juros[$i] ,2,",",".");?></td>
    <td><?php echo number_format($prestacao[$i],2,",",".");?></td>
    <td><?php echo number_format($amortizacao,2,",",".");?></td>
    <td><?php echo number_format($sDevedor[$i] ,2,",",".");?></td>
  </tr>
  <?php } }?>
</table>
</fieldset>




	<?php } include 'footer.php';?>

</div>

 </body>
</html>