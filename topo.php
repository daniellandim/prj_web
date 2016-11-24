<?php

	
	if(!isset($_SESSION)){
 	
		session_start();
		
	}	
	
	include '../config/conexao.php';
	include '../views/modais.php';
	
	

		if(isset($_GET['logout']) || !$_SESSION['perfil']){
  			
			session_destroy();
  
  			header('Location: ../index.php');
		}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/morris.css" rel="stylesheet">
    
     <link href="../css/estilo.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
 
    
<title>::. Dashboard .::</title>
</head>
<body>
	
    
<div class="container theme-showcase" role="main">

 


<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SisFNI Admin </a>
            </div>
           
          	
  			
          	
          
          
           
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a  href="index.php">
                        <i class="glyphicon glyphicon-home"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-th-large"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-toggle">
                        
                      <?php  if($_SESSION['perfil'] == 1){ ?>
                      
                        <li>
                        <a href="cadUsuario.php"><i class="glyphicon glyphicon-plus-sign"></i> Cadastar Usuários</a>
                        </li>
                        
                        
                        <li>
                        <a href="listarUsuario.php"><i class="glyphicon glyphicon-list-alt"></i> Listar Usuários</a>
                        </li>
                        
                         <?php  } ?>
                        
                        <li>
                        <a href="cadCliente.php"><i class="glyphicon glyphicon-plus"></i> Cadastar Cliente</a>
                        </li>
                        
                        <li>
                        <a href="ListarCliente.php"><i class="glyphicon glyphicon-th-list"></i> Listar Cliente</a>
                        </li>
                        
                        <li>
                        <a href="simulacaoForm.php"><i class="glyphicon glyphicon-usd"></i> Simulador de Financiamento</a>
                        </li>
                            
                      
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
               
               
               <?php if (1 ==3){?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-bell"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="glyphicon glyphicon-globe"></i> Novo Comentario 
                                    <span class="pull-right text-muted small">4 minutos atras</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="glyphicon glyphicon-user"></i> 3 Novos seguidores
                                    <span class="pull-right text-muted small">12 minutos atras</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="glyphicon glyphicon-envelope"></i> Mensagem enviada
                                    <span class="pull-right text-muted small">4 minutos atras</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="glyphicon glyphicon-briefcase"></i> Nova tarefa
                                    <span class="pull-right text-muted small">4 minutes atras</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="glyphicon glyphicon-blackboard"></i> Servidor Reiniciado
                                    <span class="pull-right text-muted small">4 minutos atras</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Ver todos os Alertas</strong>
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
               
                <?php }?>
               
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-user"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       
                        <li><a href="#"  data-toggle="modal" data-target="#altSenha<?php echo $_SESSION['id'] ;?>"><i class="glyphicon glyphicon-cog"></i> Alterar senha!</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="?logout"><i class="glyphicon glyphicon-share"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            
            </nav>
            
            
           
            
            <div class="jumbotron">
            	<h2>Olá, <?php echo $_SESSION['nome'];?></h2>
            	<p>Bem vindo a área administracional do sistema..</p>
            </div>

   
</body>
</html>



