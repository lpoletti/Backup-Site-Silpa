<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<div id="page_content">
<div id="page">
    <h1>Fale Conosco</h1>
  
  <form method="post" action="" name="contato" onsubmit="showCarga();">
   
    <fieldset>
    <legend>Entre em Contato</legend>
    <?php
	if(isset($_POST['envio']) && $_POST['envio'] == 'send'){

	$nome =     strip_tags(trim($_POST['nome']));
	$email =    strip_tags(trim($_POST['email']));
        $telefone = strip_tags(trim($_POST['telefone']));
	$assunto =  strip_tags(trim($_POST['assunto']));
	$mensagem = strip_tags(trim($_POST['mensagem']));
	
	//<input type="hidden" name="enviar" value="send" />

$date = date("d/m/Y h:i");

// ****** ATENÃ‡ÃƒO ********
// ABAIXO ESTÃ A CONFIGURAÃ‡ÃƒO DO SEU FORMULÃRIO.
// ****** ATENÃ‡ÃƒO ********

//CABEÃ‡ALHO - ONFIGURAÃ‡Ã•ES SOBRE SEUS DADOS E SEU WEBSITE
$nome_do_site="Silpa Pe�as e Equipamentos";
$email_para_onde_vai_a_mensagem = "silpa@silpa.com.br";
$email_de_envio = "silpa@silpa.com.br";
$nome_de_quem_recebe_a_mensagem = "Silpa Pe�as e Equipamentos";
$exibir_apos_enviar='index.php?topicos=nav/enviado';

//MAIS - CONFIGURAÃ‡OES DA MENSAGEM ORIGINAL
$header = "MIME-Version: 1.0\n"; 
$header .= "Content-type: text/html; charset=iso-8859-1\n"; 
$header .= "From: $nome <$email_de_envio>\n";
$cabecalho_da_mensagem_original="$header";
$assunto_da_mensagem_original="Fale com Silpa Pe�as e Equipamentos";

// FORMA COMO RECEBERÃ O E-MAIL (FORMULÃRIO)
// ******** OBS: SE FOR ADICIONAR NOVOS CAMPOS, ADICIONE OS CAMPOS NA VARIÃVEL ABAIXO *************
$configuracao_da_mensagem_original="

ENVIADO POR:<br>
Nome: $nome<br>
E-mail: $email<br>
Telefone: $telefone<br>
Assunto: $assunto<br><br><br>
Mensagem: $mensagem<br><br>

ENVIADO EM: $date";

//CONFIGURAÃ‡Ã•ES DA MENSAGEM DE RESPOSTA
// CASO $assunto_digitado_pelo_usuario="s" ESSA VARIAVEL RECEBERA AUTOMATICAMENTE A CONFIGURACAO
// "Re: $assunto"
$assunto_da_mensagem_de_resposta = "Confirma��o";
$header_resp = "MIME-Version: 1.0\n"; 
$header_resp .= "Content-type: text/html; charset=iso-8859-1\n"; 
$header_resp .= "From: $nome_do_site <$email_de_envio>\n";
$cabecalho_da_mensagem_de_resposta = "$header_resp";

$configuracao_da_mensagem_de_resposta="<b>Essa � uma mensagem autom�tica n�o responda este e-mail</b>
                                       <br>Obrigado por entrar em contato!
                                       <br>Estaremos respondendo em breve...
									   <br>Atenciosamente,
									   <br>$nome_do_site
									   <br><br><br>Enviado em: $date";

// ****** IMPORTANTE ********
// A PARTIR DE AGORA RECOMENDA-SE QUE NÃƒO ALTERE O SCRIPT PARA QUE O  SISTEMA FINCIONE CORRETAMENTE
// ****** IMPORTANTE ********

//ESSA VARIAVEL DEFINE SE Ã‰ O USUARIO QUEM DIGITA O ASSUNTO OU SE DEVE ASSUMIR O ASSUNTO DEFINIDO
//POR VOCÃŠ CASO O USUARIO DEFINA O ASSUNTO PONHA "s" NO LUGAR DE "n" E CRIE O CAMPO DE NOME
//'assunto' NO FORMULARIO DE ENVIO
$assunto_digitado_pelo_usuario="s";

//ENVIO DA MENSAGEM ORIGINAL
$headers = "$cabecalho_da_mensagem_original";
if ($assunto_digitado_pelo_usuario=="s")
{
$assunto = "$assunto_da_mensagem_original";
};
$seuemail = "$email_para_onde_vai_a_mensagem";
$mensagem = "$configuracao_da_mensagem_original";
mail($seuemail,$assunto,$mensagem,$headers);

//ENVIO DE MENSAGEM DE RESPOSTA AUTOMATICA
$headers = "$cabecalho_da_mensagem_de_resposta";
if ($assunto_digitado_pelo_usuario=="s")
{
$assunto = "$assunto_da_mensagem_de_resposta";
}
else
{
$assunto = "Re: $assunto";
};
$mensagem = "$configuracao_da_mensagem_de_resposta";
mail($email,$assunto,$mensagem,$headers);

echo "<script>window.location='$exibir_apos_enviar'</script>";
}
?>
    <span id="sprytextfield1">
    <label> <span>Nome/Empresa:</span>
      <input type="text" name="nome" />
    </label>
    <span class="textfieldRequiredMsg">Informe seu Nome ou Empresa.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span><span id="sprytextfield2">
    <label> <span>E-mail:</span>
      <input type="text" name="email" />
    </label>
    <span class="textfieldRequiredMsg">Informe seu E-mail.</span><span class="textfieldInvalidFormatMsg">Formato <?php echo utf8_decode('inválido');?>. Por favor verifique o e-mail digitado.</span></span><span id="sprytextfield3">
    <label> <span>Telefone:</span>
      <input type="text" name="telefone" />
    </label>
    <span class="textfieldRequiredMsg">Informe seu Telefone.</span><span class="textfieldInvalidFormatMsg">Formato <?php echo utf8_decode('inválido');?>. Por favor verifique o telefone digitado.</span></span><span id="sprytextfield4">
    <label> <span>Assunto:</span>
      <input type="text" name="assunto" />
    </label>
    <span class="textfieldRequiredMsg">Informe o Assunto.</span></span><span id="sprytextarea1">
    <label> <span>Mensagem:</span>
      <textarea name="mensagem" rows="5"></textarea>
      <span id="countsprytextarea1">&nbsp;</span></label>
    <span class="textareaRequiredMsg">Informe a mensagem.</span><span class="textareaMaxCharsMsg">O maximo de caracteres é 500.</span></span>
    <input type="hidden" name="envio" value="send" />
    <input type="submit" name="Enviar" value="Enviar" class="contato_btn" />
    
    </fieldset>
    
  </form> 
  <div id="social">
   <a href="https://www.facebook.com/pages/Silpa-Pe%C3%A7as-e-Equipamentos-Ltda/342096482469299" target="_blank"><img src="images/icones/facebook.png" title="Curta Nossa Pagina" /></a>
   <a href="http://www.youtube.com/watch?v=M5tWxq7XKfk" target="_blank"><img src="images/icones/youtube.png" title="Assita a Apresentação da Silpa" /></a>
  </div>
  <iframe style="margin-left:25px" width="350" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?ie=UTF8&amp;cid=18219771759623467524&amp;q=Silpa+Pe%C3%A7as+e+Equipamentos+LTDA&amp;gl=BR&amp;hl=pt-BR&amp;t=h&amp;ll=-29.12536,-51.190817&amp;spn=0.006561,0.00751&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.br/maps?ie=UTF8&amp;cid=18219771759623467524&amp;q=Silpa+Pe%C3%A7as+e+Equipamentos+LTDA&amp;gl=BR&amp;hl=pt-BR&amp;t=h&amp;ll=-29.12536,-51.190817&amp;spn=0.006561,0.00751&amp;z=16&amp;iwloc=A&amp;source=embed" target="_blank" style="color:#0000FF;text-align:left; margin-left:25px;">Exibir mapa ampliado</a></small>
     
  </div><!--page-->
</div><!--Page Content-->
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "custom", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email", {useCharacterMasking:true, validateOn:["blur"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "custom", {pattern:"(00)0000-0000", useCharacterMasking:true, validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {maxChars:500, counterId:"countsprytextarea1", counterType:"chars_remaining"});
</script>
