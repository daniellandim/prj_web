<?
// aqui começa o script
//pega as variaveis por POST
$nome      = $_POST["nome"];
$email   = $_POST["email"];
$assunto   = $_POST["assunto"];
$mensagem  = $_POST["mensagem"];

global $email; //função para validar a variável $email no script todo

$data      = date("d/m/y");                     //função para pegar a data de envio do e-mail
$ip        = $_SERVER['REMOTE_ADDR'];           //função para pegar o ip do usuário
$navegador = $_SERVER['HTTP_USER_AGENT'];       //função para pegar o navegador do visitante
$hora      = date("H:i");                       //para pegar a hora com a função date

//aqui envia o e-mail do form para você
mail ("contato@hebromdf.com.br",                       //email aonde o php vai enviar os dados do form
      "$assunto",
      "Nome: $nome\nData: $data\nIp: $ip\nNavegador: $navegador\nHora: $hora\nE-mail: $email\n Mensagem: $mensagem\nAssunto: $assunto",
      "From: $email"
     );

//aqui são as configurações para enviar o e-mail para o visitante
$site   = "teste@gmail.com";                    //o e-mail que aparecerá na caixa postal do visitante
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
alert("Sua mensagem foi enviada com sucesso!\n Agradeçemos o contato.")
window.location.href="../index.php"
</script> 