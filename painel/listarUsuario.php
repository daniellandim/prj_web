<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Lista de Usúarios</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


<head>
<body>




<div class="container theme-showcase" role="main">
  
   <?php include 'topo.php';
   
  			if($_SESSION['perfil'] == 2){ 
	
				echo "<script> alert('Você não tem permissão para acessar esta página!'); location.href='index.php' </script>";
				return true;
				
			}
   
   
   if(isset($_POST['nome'])){
				$pesquisar = $_POST['nome'];
				//Selecionar  os itens da página
				$result_msg_contatos = "SELECT * FROM login WHERE nome LIKE '%$pesquisar%' LIMIT 30";
				$resultado_msg_contatos = mysqli_query($conexao , $result_msg_contatos);				
			}else{
				//Verificar se esta sendo passado na URL a página atual, senão é atribuido a pagina
				$pagina=(isset($_GET['pagina'])) ? $_GET['pagina'] : 1;
				
				//Selecionar todos os itens da tabela 
				$result_msg_contato = "SELECT * FROM login";
				$resultado_msg_contato = mysqli_query($conexao , $result_msg_contato);
				
				//Contar o total de itens
				$total_msg_contatos = mysqli_num_rows($resultado_msg_contato);
				
				//Seta a quantidade de itens por página
				$quantidade_pg = 20;
				
				//calcular o número de páginas 
				$num_pagina = ceil($total_msg_contatos/$quantidade_pg);
				
				//calcular o inicio da visualizao	
				$inicio = ($quantidade_pg*$pagina)-$quantidade_pg;
				
				//Selecionar  os itens da página
				$result_msg_contatos = "SELECT * FROM login limit $inicio, $quantidade_pg";
				$resultado_msg_contatos = mysqli_query($conexao , $result_msg_contatos);
				$total_msg_contatos = mysqli_num_rows($resultado_msg_contatos);
			}
			
			$perfil[1] = "Admin";
			$perfil[2] = "Usuário";
			
   
   
   ?>
 
  <form class="form-horizontal" method="POST" action="">
    <div class="form-group">
      <label class="col-sm-2 control-label">Nome</label>
      <div class="col-sm-8">
        <input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome do Usuários" value="">
      </div>
      <div class="col-sm-2">
        <button type="submit" class="btn btn-info"> <span class="glyphicon glyphicon-search"> Pesquisar</button>
      </div>
    </div>
  </form>
  <hr>
  <form method="POST" action="gerar_planilha_especifica.php">
    <div class="row espaco">
      <div class="pull-right"> <a href="cadUsuario.php">
     
        <button type='button' class='btn btn-sm btn-success'>  <span class="glyphicon glyphicon-floppy-saved"></span> Cadastrar</button>
        </a> <a href="gerar_planilha.php">
        <button type='button' class='btn btn-sm btn-danger'><span class="glyphicon glyphicon-duplicate"> Gerar Excel</button>
        </a>
        
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
      
        <table class="table">
          <thead>
            <tr>
              <th class="text-center">Nome</th>
              <th class="text-center">E-mail</th>
              <th class="text-center">Login</th>
              <th class="text-center">Perfil</th>
              <th class="text-center">Data de Cadastro</th>
              <th class="text-center">Ação</th>
            </tr>
          </thead>
          <tbody>
            <?php while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){?>
            <tr>
              <?php $id = $row_msg_contatos["id"]; ?>
              <td class="text-center"><?php echo $row_msg_contatos["nome"]; ?></td>
              <td class="text-center"><?php echo $row_msg_contatos["email"]; ?></td>
              <td class="text-center"><?php echo $row_msg_contatos["login"]; ?></td>
              <td class="text-center"><?php echo $perfil[$row_msg_contatos["perfil"]]; ?></td>
              <td class="text-center"><?php 
										
					$d = explode(" ", $row_msg_contatos["datacadastro"]); // separa a data da hora
		
					$data = explode("-",$d[0]); // separa a data

					echo $data[2] . " / " . $data[1] ." / ". $data[0] ." às ". $d[1];  // imprimi data e hora na pocição correta
		
		?></td>
   
<td class="text-center">
	<a href="#"> <span class="glyphicon glyphicon-eye-open text-primary" aria-hidden="true" data-toggle="modal" data-target="#meuModal<?php echo $row_msg_contatos["id"]; ?>"></span> 
    </a>

<a href="editUsuario.php?id=<?php echo $row_msg_contatos["id"];?>"> <span class="glyphicon glyphicon-pencil text-warning" aria-hidden="true"></span> </a> 


<a href="javascript: if(confirm ('Tem certeza que deseja deletar o usúario <?php echo $row_msg_contatos["nome"]; ?> ')) location.href = 'deletarUsuario.php?p=deletarUsuario&id=<?php echo $row_msg_contatos["id"];?>'"> <span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span> </a></td>
            
            
</tr>
            

<!-- Visualizar usuário -->

<div class="modal fade" id="meuModal<?php echo $row_msg_contatos["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel" >Cadastro do Usuário</h4>
      </div>
      <div class="modal-body">
      
      <fieldset>
      <div class="alert alert-info" role="alert">Nome:<?php echo $row_msg_contatos["nome"]; ?></div>
      <div class="alert alert-info" role="alert">E-mail: <?php echo $row_msg_contatos["email"]; ?></div>
      <div class="alert alert-info" role="alert">Login: <?php echo $row_msg_contatos["login"]; ?></div>
      <div class="alert alert-info" role="alert">Perfil: <?php echo $perfil[$row_msg_contatos["perfil"]]; ?></div>
      <div class="alert alert-info" role="alert">Data de Cadastro: <?php 
										
										$d = explode(" ", $row_msg_contatos["datacadastro"]); // separa a data da hora
		
										$data = explode("-",$d[0]); // separa a data
		
										echo $data[2] . " / " . $data[1] ." / ". $data[0] ." às ". $d[1];  // imprimi data e hora na pocição correta
		
		
		
										
										
										?></div>
       
      </div>
		</fieldset>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
            
          <!-- fim  do Modal visualizar usuário-->          
            
                
                      
            
            
            
            <?php } ?>
          
                     <a  href="javascript:history.back(-1)">
                        <i class="glyphicon glyphicon-arrow-left"></i> 
                     </a>
        				
         
        
        
         </tbody>
         
        
        
        </table>
      </div>
    </div>
  </form>
  <?php
			if(!isset($_POST['nome'])){
				//Verificar pagina anterior e posterior
				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;
				?>
  <nav class="text-center">
    <ul class="pagination">
      <li>
        <?php 
								if($pagina_anterior != 0){
									?>
        <a href="listarUsuario.php?link=50&pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a>
        <?php
								}else{
									?>
        <span aria-hidden="true">&laquo;</span>
        <?php
								}
							?>
      </li>
      <?php
							//Apresentar a paginação
							for($i = 1; $i < $num_pagina + 1; $i++){
								?>
      <li><a href="listarUsuario.php?link=50&pagina=<?php echo $i; ?>"> <?php echo $i; ?> </a></li>
      <?php
							}
						?>
      <li>
        <?php 
								if($pagina_posterior <= $num_pagina){
									?>
        <a href="listarUsuario.php?link=50&pagina=<?php echo $pagina_posterior; ?>" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a>
        <?php
								}else{
									?>
        <span aria-hidden="true">&raquo;</span>
        <?php
								}
							?>
      </li>
    </ul>
  </nav>
  <?php } 
  
  	include 'footer.php';
  
  ?>

	
    
</div>

</body>
</html>
