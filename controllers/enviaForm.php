<?
// aqui come�a o script
//pega as variaveis por POST
$nome      = $_POST["nome"];
$email   = $_POST["email"];
$assunto   = $_POST["assunto"];
$mensagem  = $_POST["mensagem"];

global $email; //fun��o para validar a vari�vel $email no script todo

$data      = date("d/m/y");                     //fun��o para pegar a data de envio do e-mail
$ip        = $_SERVER['REMOTE_ADDR'];           //fun��o para pegar o ip do usu�rio
$navegador = $_SERVER['HTTP_USER_AGENT'];       //fun��o para pegar o navegador do visitante
$hora      = date("H:i");                       //para pegar a hora com a fun��o date

//aqui envia o e-mail do form para voc�
mail ("contato@hebromdf.com.br",                       //email aonde o php vai enviar os dados do form
      "$assunto",
      "Nome: $nome\nData: $data\nIp: $ip\nNavegador: $navegador\nHora: $hora\nE-mail: $email\n Mensagem: $mensagem\nAssunto: $assunto",
      "From: $email"
     );

//aqui s�o as configura��es para enviar o e-mail para o visitante
$site   = "teste@gmail.com";                    //o e-mail que aparecer� na caixa postal do visitante
$titulo = "FNI Financiamento ";                  //titulo da mensagem enviada para o visitante
$msg    = "$nome, obrigado por entrar em contato conosco, em breve entraremos em contato";

//aqui envia o e-mail de auto-resposta para o visitante
mail("$email",
     "$titulo",
     "$msg",
     "From: $site"
    );
?>
<script language="JavaScript" type="text/javascript">
alert("Sua mensagem foi enviada com sucesso!\n Agrade�emos o contato.")
window.location.href="../index.php"
</script> 