<?php
if(isset($_POST["cadastrar"])){


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
<script>

	$('#myModal').modal('show')

</script>	

<title>::. Sistema FNI .::</title>
</head>

<body>


<!-- Imicio Modal Simulação-->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Simulação de financiamento</h4>
      </div>
      <div class="modal-body">
       
      
     	<table class="table table-hover" width="100%" border="1">
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
  <?php } ?>
</table>
       
       
      </div>
      
    </div>
  </div>
</div>
    
     <!-- Fim do Modal -->

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário --> 
<script src="js/bootstrap.min.js"></script>


</body>
</html>





