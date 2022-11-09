<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pesquisa de Satisfacao Silpa</title>
<link href="style_pesquisa.css" rel="stylesheet" type="text/css" />
</head>
<style>
*{
	font:"Courier New", Courier, monospace;"
}
.table{
	float:left;
	margin-right:25px;
	border:3px solid #999;
}
.ok{
	background:#DFFFBF;
	border:1px solid #80FF00;
	padding:5px;
	font:16px Verdana, Geneva, sans-serif;
	font-weight:bold;
	margin:5px 0;
}
.no{
	background:#FBB;
	border:1px solid #F00;
	padding:5px;
	font:16px Verdana, Geneva, sans-serif;
	font-weight:bold;
}
.btn_env:hover{
        background:#fff;
        cursor:pointer;
}
#pesquisa form table tr td {
	color: #000;
}
</style>

<body>
<?php
if(isset($_POST['env_pesq'])&&$_POST['env_pesq'] == 'env_pesq'){
	
	$cliente = $_POST['cliente'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$atendimento_eng = $_POST['at_eng'];
	$atendimento_vendas = $_POST['at_ven'];
	$atendimento_cq = $_POST['at_cq'];
	$atendimento_prod = $_POST['at_prod'];
	$qualidade_eng = $_POST['qua_eng'];
	$qualidade_vendas = $_POST['qua_ven'];
	$qualidade_cq = $_POST['qua_cq'];
	$qualidade_prod = $_POST['qua_prod'];
	$entrega_eng = $_POST['en_eng'];
	$entrega_vendas = $_POST['en_ven'];
	$entrega_cq = $_POST['en_cq'];
	$entrega_prod = $_POST['en_prod'];
	$observacao = $_POST['obs'];
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Silpa Pesquisa <silpa@silpa.com.br>' . "\r\n";
	$mensagem_email = '
	<html>
	<body>
	Pesquisa de Satisfação Silpa
	<table cellspacing="1" cellpadding="1" border="5px" bordercolor="#999">
	<tr>
	 <td colspan="5" bgcolor="#999999">Informações</td>
	</tr>
	<tr>
	 <td colspan="1" bgcolor="#CCCCCC">Nome do Cliente:</td><td colspan="4">'.$cliente.'</td>
	</tr>
	<tr>
	 <td colspan="1" bgcolor="#CCCCCC">Email:</td><td colspan="4">'.$email.'</td>
	</tr>
	<tr>
	 <td colspan="1" bgcolor="#CCCCCC">Telefone:</td><td colspan="4">'.$telefone.'</td>
	</tr>
	<tr>
	 <td colspan="1" bgcolor="#CCCCCC">Cidade:</td><td colspan="4">'.$cidade.'</td>
	</tr>
	<tr>
	 <td colspan="1" bgcolor="#CCCCCC">Estado:</td><td colspan="4">'.$estado.'</td>
	</tr>
	<tr>
	 <td colspan="5" bgcolor="#999999">Notas da Pesquisa</td>
	</tr>
	<tr>
	 <td colspan="1" bgcolor="#CCCCCC">Itens da Pesquisa:</td>
	 <td colspan="1" bgcolor="#CCCCCC">Engenharia:</td>
	 <td colspan="1" bgcolor="#CCCCCC">Vendas:</td>
	 <td colspan="1" bgcolor="#CCCCCC">CQ:</td>
	 <td colspan="1" bgcolor="#CCCCCC">Produto:</td> 
	</tr>
	<tr>
	 <td colspan="1" bgcolor="#CCCCCC">Atendimento:</td>
	 <td colspan="1">'.$atendimento_eng.'</td>
	 <td colspan="1">'.$atendimento_vendas.'</td>
	 <td colspan="1">'.$atendimento_cq.'</td>
	 <td colspan="1">'.$atendimento_prod.'</td> 
	</tr>
	<tr>
	 <td colspan="1" bgcolor="#CCCCCC">Qualidade:</td>
	 <td colspan="1">'.$qualidade_eng.'</td>
	 <td colspan="1">'.$qualidade_vendas.'</td>
	 <td colspan="1">'.$qualidade_cq.'</td>
	 <td colspan="1">'.$qualidade_prod.'</td> 
	</tr>
	<tr>
	 <td colspan="1" bgcolor="#CCCCCC">Entrega:</td>
	 <td colspan="1">'.$entrega_eng.'</td>
	 <td colspan="1">'.$entrega_vendas.'</td>
	 <td colspan="1">'.$entrega_cq.'</td>
	 <td colspan="1">'.$entrega_prod.'</td> 
	</tr>
	<tr>
	 <td colspan="1" bgcolor="#CCCCCC">Observações:</td>
	 <td colspan="5">'.$observacao.'</td>
	</tr>
	</table>
	</body>
	</html>
	';
	if($cliente==''||$email==''||$telefone==''||$cidade==''||$estado==''||$atendimento_eng==''||$atendimento_vendas==''||$atendimento_cq==''||$atendimento_prod==''||$qualidade_eng==''||$qualidade_vendas==''||$qualidade_cq==''||$qualidade_prod==''||$entrega_eng==''||$entrega_vendas==''||$entrega_cq==''||$entrega_prod==''){
		echo "<div class=\"no\">Preencha todos os campos do Formulário!!!</div>";
	}else{
	echo "<div class=\"ok\">Obrigado por sua colaboração sua opinião é muito importante para nós!!!</div>";
	if(mail('satisfacao@silpa.com.br','Pesquisa Satisfacao '.$cliente,$mensagem_email,$headers)){
		echo "<div class=\"ok\">Email enviado com sucesso</div>";
		}else{
			echo "<div class=\"no\">Erro ao enviar o email</div>";
		}
	}
}
?>
<div id="pesquisa" style="padding:10px; text-align: center; margin:0 auto; color: #FFF;">
<form method="post" action="">
  <table width="700px;" cellspacing="1" cellpadding="1" border="5px" bordercolor="#999" class="table">
  <tr bgcolor="#999">
    <td colspan="5" align="right" style="text-align: center; background:#999; color:#000; font-weight:bold;">Informações</td>
    </tr>
  <tr>
    <td width="35%" align="right" bgcolor="#ccccccccc">Nome do Cliente:</td>
    <td colspan="4" style="text-align: left"><input type="text" name="cliente" style="border:1px solid #999; width:300px;" /></td>
    </tr>
  <tr>
    <td align="right" bgcolor="#cccccc">Email:</td>
    <td colspan="4" style="text-align: left"><input type="text" name="email" style="border:1px solid #999; width:300px;" /></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#cccccc">Telefone:</td>
    <td colspan="4" style="text-align: left"><input type="text" name="telefone" style="border:1px solid #999; width:300px;" /></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#cccccc">Cidade:</td>
    <td colspan="4" style="text-align: left"><input type="text" name="cidade" style="border:1px solid #999; width:300px;" /></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#cccccc">Estado:</td>
    <td colspan="4" style="text-align: left"><input type="text" name="estado" style="border:1px solid #999; width:300px;" /></td>
  </tr>
  <tr>
    <td colspan="5" style="text-align: center; background:#999; color:#000; font-weight:bold;">Notas da Pesquisa</td>
    </tr>
  <tr>
    <td bgcolor="#cccccc" style="text-align: center; color: #000; font-weight: bold; font-size: 24px;">Itens Pesquisa</td>
    <td width="13%" bgcolor="#cccccc" style="text-align: center">Engenharia</td>
    <td width="14%" bgcolor="#cccccc" style="text-align: center">Vendas</td>
    <td width="19%" bgcolor="#cccccc" style="text-align: center">Controle de Qualidade</td>
    <td width="19%" bgcolor="#cccccc" style="text-align: center">Produtos</td>
  </tr>
  <tr>
    <td bgcolor="#cccccc" style="text-align: center"><u><strong>Atendimento</strong></u> - os problemas são resolvidos com rapidez e as reclamações, sugestões são ouvidas e resolvidas.</td>
    <td style="text-align: center"><select name="at_eng" class="select">
    <option>06</option>
    <option>07</option>
    <option>08</option>
    <option>09</option>
    <option>10</option>
    </select></td>
    <td style="text-align: center"><select name="at_ven" class="select">
    <option>06</option>
    <option>07</option>
    <option>08</option>
    <option>09</option>
    <option>10</option>
    </select></td>
    <td style="text-align: center"><select name="at_cq" class="select">
    <option>06</option>
    <option>07</option>
    <option>08</option>
    <option>09</option>
    <option>10</option>
    </select></td>
    <td style="text-align: center"><select name="at_prod" class="select">
    <option>06</option>
    <option>07</option>
    <option>08</option>
    <option>09</option>
    <option>10</option>
    </select></td>
  </tr>
  <tr>
    <td bgcolor="#cccccc" style="text-align: center"><strong><u>Qualidade</u></strong> - os produtos entregues atendem seus requisitos.</td>
    <td style="text-align: center"><select name="qua_eng" class="select">
      <option>06</option>
      <option>07</option>
      <option>08</option>
      <option>09</option>
      <option>10</option>
    </select></td>
    <td style="text-align: center"><select name="qua_ven" class="select">
      <option>06</option>
      <option>07</option>
      <option>08</option>
      <option>09</option>
      <option>10</option>
    </select></td>
    <td style="text-align: center"><select name="qua_cq" class="select">
      <option>06</option>
      <option>07</option>
      <option>08</option>
      <option>09</option>
      <option>10</option>
    </select></td>
    <td style="text-align: center"><select name="qua_prod" class="select">
      <option>06</option>
      <option>07</option>
      <option>08</option>
      <option>09</option>
      <option>10</option>
    </select></td>
  </tr>
  <tr>
    <td bgcolor="#cccccc" style="text-align: center"><u><strong>Entrega</strong></u> - as entregas atendem sua necessidade, conforme análise crí­tica da Silpa.</td>
    <td style="text-align: center"><select name="en_eng" class="select">
      <option>06</option>
      <option>07</option>
      <option>08</option>
      <option>09</option>
      <option>10</option>
    </select></td>
    <td style="text-align: center"><select name="en_ven" class="select">
      <option>06</option>
      <option>07</option>
      <option>08</option>
      <option>09</option>
      <option>10</option>
    </select></td>
    <td style="text-align: center"><select name="en_cq" class="select">
      <option>06</option>
      <option>07</option>
      <option>08</option>
      <option>09</option>
      <option>10</option>
    </select></td>
    <td style="text-align: center"><select name="en_prod" class="select">
      <option>06</option>
      <option>07</option>
      <option>08</option>
      <option>09</option>
      <option>10</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="5" style="text-align: center; background:#999; color:#000; font-weight:bold;">Observações(Crí­ticas/Sugestões):</td>
    </tr>
  <tr>
    <td colspan="5"><textarea class="text_area" name="obs" rows="3" cols="50" style="border:2px solid #999; width:675px;"></textarea>
      <span style="text-align: center"></span></td>
    </tr>
  <tr>
    <td colspan="5" style="text-align: center">
    <input type="hidden" name="env_pesq" value="env_pesq" />
    <input type="submit" name="enviar" class="btn_env" value="Enviar Pesquisa" style="width:200px; border:#FFF; background:#999; color:#000; padding:20px; font-weight:bold;" /></td>
    </tr>
</table>
   
</form>
</div><!--Pesquisa-->
</body>
</html>