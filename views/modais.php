
<!-- Alterar Senha do Usuario -->

<div class="modal fade" id="altSenha<?php echo $_SESSION['id'] ;?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Alterar Minha Senha</h4>
      </div>
      <div class="modal-body">
    
        

  <form class="form-horizontal" action="../controllers/alterarSenhaUser.php?id=<?php echo $_SESSION['id'];?>" method="post">
      
     
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Nome</label>
      <div class="col-sm-10">
        <input name="usuario" type="text" class="form-control" id="inputPassword3" disabled="true" value="<?php echo $_SESSION['nome'];?>">
      </div>
    </div>
    
    
    
    
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
      <div class="col-sm-10">
        <input name="senha" type="password" class="form-control" id="inputPassword3" placeholder="Digite sua nova senha">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Confirmar senha</label>
      <div class="col-sm-10">
        <input name="senha1" type="password" class="form-control" id="inputPassword3" placeholder="Confirme sua nova senha">
      </div>
    </div>
   
      
   
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success"  name="salvar" id="salvar" value="salvar">
        <input type="reset" class="btn btn-warning"  name="resetar" id="resetar" value="resetar">
      </div>
    </div>
  </form>
</div>
        
                   
     
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->







  







