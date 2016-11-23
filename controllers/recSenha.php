<?php
	include_once '../config/conexao.php';

	
//pega a variavel via post

	if(isset($_POST['recuperar'])){
	
		$email    =  mysqli_real_escape_string($conexao, $_POST["email"]);
	
	}

//busca no db o usuario com o email 
$result = $conexao->query ("SELECT * FROM login WHERE email = '$email'");
//conta quantos tem
$row = $result->num_rows;



//se tiver  + de 1 cadastrado
if($row > 0){
	
	//faz um while para vc coloar os dados nas variavels
	while ($linha = mysqli_fetch_array($result)){
		
		$rowemail = $linha['email'];
		$rowsenha = $linha['senha'];
	

	}
	

//enviar um email para variavel email juntamente com a variável senha;
$mensage ="Você solicitou a recuperação de senhha confira seu dados.";
$mensage .="E-mail= " . $rowemail;
$mensage .="Senha:" . $rowsenha;
mail($rowemail, "FNI, recuperação de senha", $mensage);

echo"<script>alert(Sua senha foi enviada para o e-mail indicado.),window.open('recuperar_senha_enviado.php','_self')</script>";


}else{
	
	
	echo"<script>alert('E-mail não cadastrado em nosso sistema'),window.open('../index.php','_self')</script>";
	
}


?>