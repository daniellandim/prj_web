<?php
	session_start();

				if(!$_SESSION['perfil'] == 1 || !$_SESSION['perfil'] == 2){ 
	
				header("Location: ../index.php");
				exit();
				
			}


?>
<div class="container theme-showcase" role="main">

 			
            <?php include_once 'topo.php';?>
            
            

            
            <?php  if($_SESSION['perfil'] == 1){ ?>
            
            <div class="row" >
            
 				 <div class="col-xs-6 col-md-6">
    			
                	<a href="cadUsuario.php"  class="thumbnail"><img src="../img/user.png" >  <p align="center">Cadastrar Usuário</p></a>
                   
 				 
                 </div>
                 
                 <?php }?>
                 
                 
                  <div class="col-xs-6 col-md-6">
    			
                	<a href="cadCliente.php" class="thumbnail"><img src="../img/icone-reputacao.png" > <p align="center">Cadastrar Cliente</p>
                    
                    </a>
 				 
                 </div>
                 
               <?php  if($_SESSION['perfil'] == 1){ ?>
             
              <div class="col-xs-6 col-md-6">
    			
                	<a href="listarUsuario.php" class="thumbnail"><img src="../img/listar.png" >
                    <p align="center">Listar Usuário</p>
                    </a>
 				 
                 </div>
                 
                 <?php } ?>
                 
              <div class="col-xs-6 col-md-6">
    			
                	<a href="ListarCliente.php" class="thumbnail"><img src="../img/listcliente.png" >
                    <p align="center">Listar Cliente</p>
                    </a>
 				 
                 </div>
                 
              <div class="col-xs-6 col-md-12">
    			
                	<a href="#" class="thumbnail" data-toggle="modal" data-target="#simulacao"><img src="../img/simula.png" >
                    
                    <p align="center">Simulador de Financiamento</p>
                    
                    </a>
 				 
                 </div>
                 
                 
                 
                 
                 
                 <!-- Modal simulação -->

<div class="modal fade" id="simulacao" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Alterar Minha Senha</h4>
      </div>
      <div class="modal-body">
    
        
		<p>Simulacao</p>
        
                   
     
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

                 
                 
                 
  
			</div>
			
             <?php include_once 'footer.php';?>
            
        </div>
