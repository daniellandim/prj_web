    
<div class="container theme-showcase" role="main">

 			
            <?php include 'topo.php';?>


 
            
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
    			
                	<a href="#" class="thumbnail"><img src="../img/simula.png" >
                    
                    <p align="center">Simulador de Financiamento</p>
                    
                    </a>
 				 
                 </div>
                 
  
			</div>
			
             <?php include 'footer.php';?>
            
        </div>
