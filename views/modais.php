<!-- Perfil usuario -->

<div class="modal fade" id="myModal<?php echo $_SESSION['id'] ;?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Perfil do Usuário</h4>
      </div>
      <div class="modal-body">
        <p> 
        
        <?php if ($_SESSION['perfil'] ==1){
			
			echo "Sr.(a) ".$_SESSION['nome'] ." Você é Administrator do sitema";
		
		}else{
			
			echo "Sr.(a)".$_SESSION['nome'] ." Você é usuario do sitema";
			
			}?>
       
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->







<!-- Cadastrar usuário -->

<div class="modal fade" id="cadUsuario" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Cadastrar do Usuários</h4>
      </div>
     
     
      <div class="modal-body">
        <p> 
       	
        	<?php //include '../painel/cadUsuario.php';?>
       
        </p>
      </div>
      
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->