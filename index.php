<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/jumbotron.css" rel="stylesheet" type="text/css">
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
          <form class="navbar-form navbar-right" action="config/logar.php" method="post">
            <div class="form-group">
              <input type="text" name="usuario" placeholder="E-mail / usuário " class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="senha" placeholder="Digite sua Senha!" class="form-control">
            </div>
            <input type="submit" name="logar" class="btn btn-success" value="Entrar">
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
    
    

<!-- Imicio Modal -->

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
    
    
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Simulador</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">Ver Detalhes &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Simulador 2</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">Ver Detalhes &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Simulador 3</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver Detalhes &raquo;</a></p>
        </div>
      </div>

      <hr>

    <?php include 'footer.php' ;?>
     </div>
</body>
</html>