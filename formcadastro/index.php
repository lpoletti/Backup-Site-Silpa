<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include"Connections/site_dinamico.php";
$db = mysql_select_db("$database_site_dinamico")
      or die(mysql_error());
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastro/Atualiza&ccedil;&atilde;o de Cadastro</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/jquery.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
$(window).ready(function(){
	$("#tipo_de_cadastro").change(function(){
		if( $(this).val() == 'Cadastro Pessoa Fisica' ) {
			$("#cadastro_fisica").show("slow");
			$("#cadastro_juridica").hide("slow");
		}else{
			$("#cadastro_juridica").show("slow");
			$("#cadastro_fisica").hide("slow");
		}
	})
});
</script>
</head>

<body>
<?php
	//Campos Juridica
	include "campos_juridica.php";
	
	$fis_nome = (!empty($_POST['fis_nome'])) ? $_POST['fis_nome'] : '';
	$fis_rg = (!empty($_POST['fis_rg'])) ? $_POST['fis_rg'] : '';
	$fis_cpf = (!empty($_POST['fis_cpf'])) ? $_POST['fis_cpf'] : '';
	$fis_address = (!empty($_POST['fis_endereco'])) ? $_POST['fis_endereco'] : '';
	$fis_numero = (!empty($_POST['fis_numero'])) ? $_POST['fis_numero'] : '';
	$fis_city = (!empty($_POST['fis_city'])) ? $_POST['fis_city'] : '';	
	$fis_estado = (!empty($_POST['fis_estado'])) ? $_POST['fis_estado'] : '';
	$fis_cep = (!empty($_POST['fis_cep'])) ? $_POST['fis_cep'] : '';
	$fis_bairro = (!empty($_POST['fis_bairro'])) ? $_POST['fis_bairro'] : '';
	$fis_complemento = (!empty($_POST['fis_complemento'])) ? $_POST['fis_complemento'] : '';
	$fis_data_nasc = (!empty($_POST['fis_data_nasc'])) ? $_POST['fis_data_nasc'] : '';
	$fis_profissao = (!empty($_POST['fis_profissao'])) ? $_POST['fis_profissao'] : '';
	$fis_ddd = (!empty($_POST['fis_ddd'])) ? $_POST['fis_ddd'] : '';
	$fis_numero1 = (!empty($_POST['fis_numero1'])) ? $_POST['fis_numero1'] : '';
	$fis_numero2 = (!empty($_POST['fis_numero2'])) ? $_POST['fis_numero2'] : '';
	$fis_fax = (!empty($_POST['fis_fax'])) ? $_POST['fis_fax'] : '';
	$fis_email = (!empty($_POST['fis_email'])) ? $_POST['fis_email'] : '';
	$fis_end_cobranca = (!empty($_POST['fis_end_cobranca'])) ? $_POST['fis_end_cobranca'] : '';
	$fis_estado_cobranca = (!empty($_POST['fis_estado_cobranca'])) ? $_POST['fis_estado_cobranca'] : '';
	$fis_city_cobranca = (!empty($_POST['fis_city_cobranca'])) ? $_POST['fis_city_cobranca'] : '';
	$fis_cep_cobranca = (!empty($_POST['fis_cep_cobranca'])) ? $_POST['fis_cep_cobranca'] : '';
	$fis_emailxml = (!empty($_POST['fis_emailxml'])) ? $_POST['fis_emailxml'] : '';
	$fis_banco1 = (!empty($_POST['fis_banco1'])) ? $_POST['fis_banco1'] : '';
	$fis_agencia1 = (!empty($_POST['fis_agencia1'])) ? $_POST['fis_agencia1'] : '';
	$fis_conta1 = (!empty($_POST['fis_conta1'])) ? $_POST['fis_conta1'] : '';
	$fis_telefone_banco_1 = (!empty($_POST['fis_telefone_banco_1'])) ? $_POST['fis_telefone_banco_1'] : '';
	$fis_gerente_conta_1 = (!empty($_POST['fis_gerente_conta_1'])) ? $_POST['fis_gerente_conta_1'] : '';
	$fis_banco2 = (!empty($_POST['fis_banco2'])) ? $_POST['fis_banco2'] : '';
	$fis_agencia2 = (!empty($_POST['fis_agencia2'])) ? $_POST['fis_agencia2'] : '';
	$fis_conta2 = (!empty($_POST['fis_conta2'])) ? $_POST['fis_conta2'] : '';
	$fis_telefone_banco_2 = (!empty($_POST['fis_telefone_banco_2'])) ? $_POST['fis_telefone_banco_2'] : '';
	$fis_gerente_conta_2 = (!empty($_POST['fis_gerente_conta_2'])) ? $_POST['fis_gerente_conta_2'] : '';
	$fis_banco3 = (!empty($_POST['fis_banco3'])) ? $_POST['fis_banco3'] : '';
	$fis_agencia3 = (!empty($_POST['fis_agencia3'])) ? $_POST['fis_agencia3'] : '';
	$fis_conta3 = (!empty($_POST['fis_conta3'])) ? $_POST['fis_conta3'] : '';
	$fis_telefone_banco_3 = (!empty($_POST['fis_telefone_banco_3'])) ? $_POST['fis_telefone_banco_3'] : '';
	$fis_gerente_conta_3 = (!empty($_POST['fis_gerente_conta_3'])) ? $_POST['fis_gerente_conta_3'] : '';
	$fis_fornecedor1 = (!empty($_POST['fis_fornecedor1'])) ? $_POST['fis_fornecedor1'] : '';
	$fis_fornecedor_cnpj1 = (!empty($_POST['fis_fornecedor_cnpj1'])) ? $_POST['fis_fornecedor_cnpj1'] : '';
	$fis_fornecedor_telefone1 = (!empty($_POST['fis_fornecedor_telefone1'])) ? $_POST['fis_fornecedor_telefone1'] : '';
	$fis_fornecedor2 = (!empty($_POST['fis_fornecedor2'])) ? $_POST['fis_fornecedor2'] : '';
	$fis_fornecedor_cnpj2 = (!empty($_POST['fis_fornecedor_cnpj2'])) ? $_POST['fis_fornecedor_cnpj2'] : '';
	$fis_fornecedor_telefone2 = (!empty($_POST['fis_fornecedor_telefone2'])) ? $_POST['fis_fornecedor_telefone2'] : '';
	$fis_fornecedor3 = (!empty($_POST['fis_fornecedor3'])) ? $_POST['fis_fornecedor3'] : '';
	$fis_fornecedor_cnpj3 = (!empty($_POST['fis_fornecedor_cnpj3'])) ? $_POST['fis_fornecedor_cnpj3'] : '';
	$fis_fornecedor_telefone3 = (!empty($_POST['fis_fornecedor_telefone3'])) ? $_POST['fis_fornecedor_telefone3'] : '';
	
	if(isset($_POST['envia_juridica'])&& $_POST['envia_juridica'] == 'juridica'){
		$tipo_cadastro = $_POST['tipo_cadastro'];
		/*DADOS DA EMPRESA*/
		$razao_social = strip_tags(trim($_POST['razao_social']));
		$nome_fantasia = strip_tags(trim($_POST['nome_fantasia']));
		$cnpj = strip_tags(trim($_POST['cnpj']));
		$address = strip_tags(trim($_POST['address']));
		$numero = strip_tags(trim($_POST['numero']));
		$city = strip_tags(trim($_POST['city']));
		$estado_select = strip_tags(trim($_POST['estado']));
		$cep = strip_tags(trim($_POST['cep']));
		$bairro = strip_tags(trim($_POST['bairro']));
		$complemento = strip_tags(trim($_POST['complemento']));
		/*ATIVIDADES E DADOS FINANCEIROS*/
		$data_constituicao = strip_tags(trim($_POST['data_constituicao']));
		$cnae = strip_tags(trim($_POST['cnae']));
		$ie = strip_tags(trim($_POST['ie']));
		$im = strip_tags(trim($_POST['im']));
		$regime_fiscal = strip_tags(trim($_POST['regime_fiscal']));
		$beneficio_fiscal = $_POST['beneficio_fiscal'];
		$ramo = strip_tags(trim($_POST['ramo']));
		$trib_estimativa = $_POST['trib_estimativa'];
		if($trib_estimativa == 'Não'){
			$aliq_cnae = 'não se aplica';
		}else{
			$aliq_cnae = strip_tags(trim($_POST['aliq_cnae']));
		}
		/*COMUNICAÇÃO EMPRESA*/
		$ddd = strip_tags(trim($_POST['ddd']));
		$numero1 = strip_tags(trim($_POST['numero1']));
		$numero2 = strip_tags(trim($_POST['numero2']));
		$fax = strip_tags(trim($_POST['fax']));
		$site = strip_tags(trim($_POST['site']));
		$email = strip_tags(trim($_POST['email']));
		$endereco_cobranca = strip_tags(trim($_POST['endereco_cobranca']));
		/*CONTATOS EMPRESA*/
		$contato_compras = strip_tags(trim($_POST['contato_compras']));
		$telefone_compras = strip_tags(trim($_POST['telefone_compras']));
		$email_compras = strip_tags(trim($_POST['email_compras']));
		$contato_fiscal = strip_tags(trim($_POST['contato_fiscal']));
		$telefone_fiscal = strip_tags(trim($_POST['telefone_fiscal']));
		$email_fiscal = strip_tags(trim($_POST['email_fiscal']));
		$contato_financeiro = strip_tags(trim($_POST['contato_financeiro']));
		$telefone_financeiro = strip_tags(trim($_POST['telefone_financeiro']));
		$email_financeiro = strip_tags(trim($_POST['email_financeiro']));
		$email_xml = strip_tags(trim($_POST['email_xml']));
		/*REFERÊNCIAS BANCÁRIAS*/
		/*BANCO 1*/
		$banco1 = strip_tags(trim($_POST['banco1']));
		$agencia1 = strip_tags(trim($_POST['agencia1']));
		$conta1 = strip_tags(trim($_POST['conta1']));
		$telefone_conta_1 = strip_tags(trim($_POST['telefone_banco_1']));
		$gerente_conta_1 = strip_tags(trim($_POST['gerente_conta_1']));
		/*BANCO 2*/
		$banco2 = strip_tags(trim($_POST['banco2']));
		$agencia2 = strip_tags(trim($_POST['agencia2']));
		$conta2 = strip_tags(trim($_POST['conta2']));
		$telefone_conta_2 = strip_tags(trim($_POST['telefone_banco_2']));
		$gerente_conta_2 = strip_tags(trim($_POST['gerente_conta_2']));
		/*BANCO 3*/
		$banco3 = strip_tags(trim($_POST['banco3']));
		$agencia3 = strip_tags(trim($_POST['agencia3']));
		$conta3 = strip_tags(trim($_POST['conta3']));
		$telefone_conta_3 = strip_tags(trim($_POST['telefone_banco_3']));
		$gerente_conta_3 = strip_tags(trim($_POST['gerente_conta_3']));
		/*REFERÊNCIAS COMERCIAIS*/
		/*FORNECEDOR 1*/
		$fornecedor1 = strip_tags(trim($_POST['fornecedor1']));
		$fornecedor_cnpj1 = strip_tags(trim($_POST['fornecedor_cnpj1']));
		$fornecedor_telefone1 = strip_tags(trim($_POST['fornecedor_telefone1']));
		/*FORNECEDOR 2*/
		$fornecedor2 = strip_tags(trim($_POST['fornecedor2']));
		$fornecedor_cnpj2 = strip_tags(trim($_POST['fornecedor_cnpj2']));
		$fornecedor_telefone2 = strip_tags(trim($_POST['fornecedor_telefone2']));
		/*FORNECEDOR 3*/
		$fornecedor3 = strip_tags(trim($_POST['fornecedor3']));
		$fornecedor_cnpj3 = strip_tags(trim($_POST['fornecedor_cnpj3']));
		$fornecedor_telefone3 = strip_tags(trim($_POST['fornecedor_telefone3']));
		/*DECLARAÇÃO*/
		$declara = $_POST['declara'];
		/*ARQUIVOS*/
		
		$arquivo1 = $_FILES['contrato'];
		$name1 = $arquivo1['name'];
		$temp1 = $arquivo1['tmp_name'];
		
		$arquivo2 = $_FILES['cnpj_arq'];
		$name2 = $arquivo2['name'];
		$temp2 = $arquivo2['tmp_name'];
		
		
		$arquivo3 = $_FILES['tributos'];
		$name3 = $arquivo3['name'];
		$temp3 = $arquivo3['tmp_name'];
		
		$arquivo4 = $_FILES['joutros'];
		$name4 = $arquivo4['name'];
		$temp4 = $arquivo4['tmp_name'];
			
		
		if($trib_estimativa == 'Sim' && $aliq_cnae == ''){
			echo "<div id=\"no\">Você precisa digitar a Aliquota CNAE pois você selecionou \"Sim\" no regime de tributação por estimativa</div>";
		}else{
			chdir('uploads');
			if($beneficio_fiscal == 'Não'){
				if(move_uploaded_file($temp1,$name1) && move_uploaded_file($temp2,$name2)){
					if(!empty($arquivo3))move_uploaded_file($temp3,$name3);
					if(!empty($arquivo4))move_uploaded_file($temp4,$name4);
					require"phpmailer/function_phpmailer.php";
				}else{ echo "<div id=\"no\">CADASTRO NÃO ENVIADO TENTE NOVAMENTE<BR>VERIFIQUE SE OS
				ARQUIVOS OBRIGATÓRIOS FORAM ANEXADOS E SE OS CAMPOS OBRIGATÓRIOS CONTEM ALGO EM BRANCO
				</div>"; }
			}else{
				if(move_uploaded_file($temp1,$name1) && move_uploaded_file($temp2,$name2) && move_uploaded_file($temp3,$name3)){
					if(!empty($arquivo4))move_uploaded_file($temp4,$name4);
					require"phpmailer/function_phpmailer.php";
				}else{ 
				echo "<div id=\"no\">BENEFICIO FISCAL FOI MARCADO COMO SIM<BR>OBRIGATÓRIO O ENVIO DO ACORDO OU DA DECLARAÇÃO</div>"; 
				}
			}
		}
		
	}
	if(isset($_POST['envia_fisica'])&& $_POST['envia_fisica'] == 'fisica'){
		$tipo_cadastro = $_POST['tipo_cadastro'];
		$fis_nome = strip_tags(trim($_POST['fis_nome']));
		$fis_rg = strip_tags(trim($_POST['fis_rg']));
		$fis_cpf = strip_tags(trim($_POST['fis_cpf']));
		$fis_address = strip_tags(trim($_POST['fis_address']));
		$fis_numero = strip_tags(trim($_POST['fis_numero']));
		$fis_city = strip_tags(trim($_POST['fis_city']));	
		$fis_estado = strip_tags(trim($_POST['fis_estado']));
		$fis_cep = strip_tags(trim($_POST['fis_cep']));
		$fis_bairro = strip_tags(trim($_POST['fis_bairro']));
		$fis_complemento = strip_tags(trim($_POST['fis_complemento']));
		$fis_data_nasc = strip_tags(trim($_POST['fis_data_nasc']));
		$fis_profissao = strip_tags(trim($_POST['fis_profissao']));
		$fis_ddd = strip_tags(trim($_POST['fis_ddd']));
		$fis_numero1 = strip_tags(trim($_POST['fis_numero1']));
		$fis_numero2 = strip_tags(trim($_POST['fis_numero2']));
		$fis_fax = strip_tags(trim($_POST['fis_fax']));
		$fis_email = strip_tags(trim($_POST['fis_email']));
		$fis_end_cobranca = strip_tags(trim($_POST['fis_end_cobranca']));
		$fis_estado_cobranca = strip_tags(trim($_POST['fis_estado_cobranca']));
		$fis_city_cobranca = strip_tags(trim($_POST['fis_city_cobranca']));
		$fis_cep_cobranca = strip_tags(trim($_POST['fis_cep_cobranca']));
		$fis_emailxml = strip_tags(trim($_POST['fis_emailxml']));
		$fis_banco1 = strip_tags(trim($_POST['fis_banco1']));
		$fis_agencia1 = strip_tags(trim($_POST['fis_agencia1']));
		$fis_conta1 = strip_tags(trim($_POST['fis_conta1']));
		$fis_telefone_banco_1 = strip_tags(trim($_POST['fis_telefone_banco_1']));
		$fis_gerente_conta_1 = strip_tags(trim($_POST['fis_gerente_conta_1']));
		$fis_banco2 = strip_tags(trim($_POST['fis_banco2']));
		$fis_agencia2 = strip_tags(trim($_POST['fis_agencia2']));
		$fis_conta2 = strip_tags(trim($_POST['fis_conta2']));
		$fis_telefone_banco_2 = strip_tags(trim($_POST['fis_telefone_banco_2']));
		$fis_gerente_conta_2 = strip_tags(trim($_POST['fis_gerente_conta_2']));
		$fis_banco3 = strip_tags(trim($_POST['fis_banco3']));
		$fis_agencia3 = strip_tags(trim($_POST['fis_agencia3']));
		$fis_conta3 = strip_tags(trim($_POST['fis_conta3']));
		$fis_telefone_banco_3 = strip_tags(trim($_POST['fis_telefone_banco_3']));
		$fis_gerente_conta_3 = strip_tags(trim($_POST['fis_gerente_conta_3']));
		$fis_fornecedor1 = strip_tags(trim($_POST['fis_fornecedor1']));
		$fis_fornecedor_cnpj1 = strip_tags(trim($_POST['fis_fornecedor_cnpj1']));
		$fis_fornecedor_telefone1 = strip_tags(trim($_POST['fis_fornecedor_telefone1']));
		$fis_fornecedor2 = strip_tags(trim($_POST['fis_fornecedor2']));
		$fis_fornecedor_cnpj2 = strip_tags(trim($_POST['fis_fornecedor_cnpj2']));
		$fis_fornecedor_telefone2 = strip_tags(trim($_POST['fis_fornecedor_telefone2']));
		$fis_fornecedor3 = strip_tags(trim($_POST['fis_fornecedor3']));
		$fis_fornecedor_cnpj3 = strip_tags(trim($_POST['fis_fornecedor_cnpj3']));
		$fis_fornecedor_telefone3 = strip_tags(trim($_POST['fis_fornecedor_telefone3']));
		
		$arquivo1 = $_FILES['fis_arq_rg'];
		$name1 = $arquivo1['name'];
		$temp1 = $arquivo1['tmp_name'];
		
		$arquivo2 = $_FILES['fis_arq_cpf'];
		$name2 = $arquivo2['name'];
		$temp2 = $arquivo2['tmp_name'];
		
		$arquivo3 = $_FILES['fis_arq_compro_end'];
		$name3 = $arquivo3['name'];
		$temp3 = $arquivo3['tmp_name'];
		
		$arquivo4 = $_FILES['foutros'];
		$name4 = $arquivo4['name'];
		$temp4 = $arquivo4['tmp_name'];

		if(empty($name1) && empty($name2) && empty($name3)){
			echo "<div id=\"no\">Você precisa fornecer todos os arquivos necessários para continuar</div>";
		}else{
			chdir('uploads');
			if(move_uploaded_file($temp1,$name1) && move_uploaded_file($temp2,$name2) && move_uploaded_file($temp3,$name3)){
					if(!empty($arquivo4))move_uploaded_file($temp4,$name4);
					require"phpmailer/function_phpmailer.php";
				}else{ echo "<div id=\"no\">CADASTRO NÃO ENVIADO TENTE NOVAMENTE<BR>VERIFIQUE SE OS
				ARQUIVOS OBRIGATÓRIOS FORAM ANEXADOS E SE OS CAMPOS OBRIGATÓRIOS CONTEM ALGO EM BRANCO
				</div>"; 
				}
		}
	}
?>
<form action="" method="post" enctype="multipart/form-data" id="form_cadastro_jur">
<div id="content">
        <h2>Tipo de Cliente</h2>
        <select name="tipo_de_cadastro" id="tipo_de_cadastro">
            <option value="Cadastro Pessoa Fisica" id="cadastro_pessoa_fisica">Cadastro Pessoa Fisica</option>
            <option value="Cadastro Pessoa Juridica" id="cadastro_pessoa_juridica" selected>Cadastro Pessoa Juridica</option>
        </select>
	<div id="cadastro_juridica" class="cadastro">
        <b>Selecione o tipo de cadastro</b><br />
                <label>Cadastro Novo </label><input type="radio" name="tipo_cadastro" value="Novo" />
                <label>Atualização </label><input type="radio" name="tipo_cadastro" value="Atualização" checked="checked" autofocus="autofocus"/>
        <table>
          <tr>
            <td colspan="11" align="center"><img src="images/logo.jpg" width="200" height="60" /><br />
              <span>Silpa Pe&ccedil;as e Equipamentos LTDA</span></td>
          </tr>
          <tr>
            <td colspan="11" align="center" class="subtitulo">DADOS DA EMPRESA</td>
          </tr>
          <tr>
            <td colspan="5" bgcolor="#CCCCCC">Raz&atilde;o Social (Sem Abrevia&ccedil;&otilde;es)*:</td>
            <td colspan="6"><span id="razao_social">
              <input type="text" name="razao_social" value="<?php echo $razao_social ?>"/>
            <span class="textfieldRequiredMsg">Digite sua Razão Social</span></span></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">Nome Fantasia*:</td>
            <td colspan="9"><span id="nome_fantasia">
              <input type="text" name="nome_fantasia" value="<?php echo $nome_fantasia;?>" />
            <span class="textfieldRequiredMsg">Digite seu Nome Fantasia</span></span></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">CNPJ*:</td>
            <td colspan="9"><span id="cnpj">
              <input type="text" name="cnpj" value="<?php echo $cnpj;?>"/>
            <span class="textfieldRequiredMsg">Digite seu CNPJ</span></span></td>
          </tr>
          <tr>
            <td colspan="5" bgcolor="#CCCCCC">Endere&ccedil;o (Rua, Av, etc...)*:</td>
            <td colspan="3"><span id="sprytextfield4">
              <input type="text" name="address" value="<?php echo $address;?>"/>
            <span class="textfieldRequiredMsg">Digite seu endereço!!!</span></span></td>
            <td width="16%" bgcolor="#CCCCCC">N&ordm;*:</td>
            <td width="16%"><span id="sprytextfield5">
              <input type="text" name="numero" value="<?php echo $numero;?>"/>
            <span class="textfieldRequiredMsg" style="font:14px Verdana, Geneva, sans-serif;">Número Inválido!!!</span></span></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">Cidade*:</td>
            <td colspan="4"><span id="sprytextfield6">
              <input type="text" name="city" value="<?php echo $city;?>"/>
            <span class="textfieldRequiredMsg">Digite sua cidade</span></span></td>
            <td bgcolor="#CCCCCC">UF*:</td>
            <td><span id="spryselect1">
              <select name="estado" id="estado">
              	<option value="<?php echo $estado_select;?>"><?php echo strtoupper($estado_select);?></option>
                <?php
					$result= mysql_query("SELECT sigla,descricao FROM estados ORDER BY descricao");
				    while($rows = mysql_fetch_array($result)){
					   $sigla =  $rows[0];
					   $estado = $rows[1];
                             ?>
                <option value="<?php echo $estado;?>" id="<?php echo $sigla;?>"><?php echo strtoupper($estado);?></option>
                <?php
   					}
			?>
              </select>
            <span class="selectRequiredMsg">Selecione seu estado</span></span></td>
            <td bgcolor="#CCCCCC">CEP*:</td>
            <td colspan="5"><span id="sprytextfield8">
              <input type="text" name="cep" value="<?php echo $cep?>" />
            <span class="textfieldRequiredMsg">Digite seu CEP</span></span></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">Bairro*:</td>
            <td colspan="5"><span id="sprytextfield7">
              <input type="text" name="bairro" value="<?php echo $bairro?>" />
            <span class="textfieldRequiredMsg">Digite seu bairro</span></span></td>
            <td bgcolor="#CCCCCC">Complemento:</td>
            <td colspan="3"><input type="text" name="complemento" value="<?php echo $complemento?>" /></td>
          </tr>
          <tr>
            <td colspan="11" align="center" class="subtitulo">ATIVIDADES E DADOS FINANCEIROS</td>
          </tr>
          <tr>
            <td colspan="3" bgcolor="#CCCCCC"><p>Data Constitui&ccedil;&atilde;o*:</p></td>
            <td colspan="4"><span id="sprytextfield9">
              <input type="text" name="data_constituicao" value="<?php echo $data_constituicao;?>" />
            <span class="textfieldRequiredMsg">Data da fundação!!!</span></span></td>
            <td bgcolor="#CCCCCC">CNAE*<br>(Código de Atividade):</td>
            <td colspan="3"><span id="sprytextfield10">
              <input type="text" name="cnae" value="<?php echo $cnae;?>" />
            <span class="textfieldRequiredMsg">Digite seu CNAE</span></span></td>
          </tr>
          <tr>
            <td colspan="3" bgcolor="#CCCCCC">Inscri&ccedil;&atilde;o Estadual*<br>(Caso não se aplique escreva ISENTO):</td>
            <td colspan="4"><span id="sprytextfield11">
              <input type="text" name="ie" value="<?php echo $ie;?>"/>
            <span class="textfieldRequiredMsg">Digite sua Inscrição Estadual</span></span></td>
            <td bgcolor="#CCCCCC">Inscri&ccedil;&atilde;o Municipal:</td>
            <td colspan="3">
              <input type="text" name="im" value="<?php echo $im;?>"/>
            </td>
          </tr>
          <tr>
            <td colspan="3" bgcolor="#CCCCCC">Regime Fiscal*:</td>
            <td colspan="4"><span id="sprytextfield13">
              <input type="text" name="regime_fiscal" value="<?php echo $regime_fiscal;?>"/>
            <span class="textfieldRequiredMsg">Digite o Regime Fiscal</span></span></td>
            <td bgcolor="#CCCCCC">Benefício Fiscal*:</td>
            <td colspan="4"><span id="spryradio1">
              <input type="radio" name="beneficio_fiscal" value="Sim" id="beneficio_fiscal_0" />
              Sim
              <input type="radio" name="beneficio_fiscal" value="Não" id="beneficio_fiscal_1" checked="checked" />
              Não
            <br />
            <span class="radioRequiredMsg" style="font-size:14px;">Tem o Benefício?</span></span></td>
          </tr>
          <tr>
            <td colspan="3" bgcolor="#CCCCCC">Ramo Atividade*:</td>
            <td colspan="9"><span id="sprytextfield14">
              <input type="text" name="ramo" value="<?php echo $ramo;?>"/>
            <span class="textfieldRequiredMsg">Digite o Ramo de Atividade</span></span></td>
          </tr>
          <tr>
            <td colspan="7" bgcolor="#CCCCCC">Apenas estado MT cliente optou pelo regime de tributa&ccedil;&atilde;o por estimativa*:</td>
            <td><span id="spryradio2">
              <input type="radio" name="trib_estimativa" value="Sim" id="trib_estimativa_0" />
              Sim
            <input type="radio" name="trib_estimativa" value="Não" id="trib_estimativa_1" checked="checked"/>
              Não
            <br />
            <span class="radioRequiredMsg">Optou pelo Regime?</span></span></td>
            <td bgcolor="#CCCCCC">Alíquota CNAE:</td>
            <td colspan="2">
              <input type="text" name="aliq_cnae" value="<?php echo $aliq_cnae;?>" />
			</td>
          </tr>
          <tr>
            <td colspan="11" align="center" class="subtitulo">COMUNICA&Ccedil;&Atilde;O EMPRESA</td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">DDD*:</td>
            <td colspan="5" bgcolor="#CCCCCC">N&ordm; do Telefone 1*:</td>
            <td colspan="2" bgcolor="#CCCCCC">N&ordm; do Telefone 2:</td>
            <td colspan="2" bgcolor="#CCCCCC">Fax:</td>
          </tr>
          <tr>
            <td colspan="2"><span id="sprytextfield16">
              <input type="text" name="ddd" value="<?php echo $ddd;?>"/>
            <span class="textfieldRequiredMsg">Digite seu DDD</span></span></td>
            <td colspan="5"><span id="sprytextfield17">
              <input type="text" name="numero1" value="<?php echo $numero1;?>" />
            <span class="textfieldRequiredMsg">Telefone para contato</span></span></td>
            <td colspan="2"><input type="text" name="numero2" value="<?php echo $numero2;?>"/></td>
            <td colspan="2">
              <input type="text" name="fax" value="<?php echo $fax;?>" />
          	</td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">Site:</td>
            <td colspan="9"><input type="text" name="site" value="<?php echo $site;?>"/></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">E-mail*:</td>
            <td colspan="9"><span id="sprytextfield19">
              <input type="text" name="email" value="<?php echo $email;?>"/>
            <span class="textfieldRequiredMsg">Digite seu E-mail</span></span></td>
          </tr>
          <tr>
            <td colspan="3" bgcolor="#CCCCCC">Endere&ccedil;o de Cobran&ccedil;a*:</td>
            <td colspan="9"><span id="sprytextfield20">
              <input type="text" name="endereco_cobranca" value="<?php echo $endereco_cobranca;?>"/>
            <span class="textfieldRequiredMsg">Digite um endereço de cobrança</span></span></td>            
          </tr>
          <tr>
          	<td bgcolor="#CCCCCC">UF*:</td>
          	<td><span id="spryselect2">
          	  <select name="estado_cobranca" id="estado">
          	    <option value="<?php echo $estado_cobranca;?>"><?php echo strtoupper($estado_cobranca);?></option>
          	    <?php
                        $result= mysql_query("SELECT sigla,descricao FROM estados ORDER BY descricao");
                        while($rows = mysql_fetch_array($result))echo "<option value=\"$rows[1]\" id=\"$rows[0]\">$rows[1]</option>";
                ?>
       	    </select>
       	    <span class="selectRequiredMsg" style="font-size:12px;">Selecione o estado.</span></span></td>
            <td bgcolor="#CCCCCC">Cidade*:</td>
            <td colspan="4"><span id="sprytextfield12">
              <input type="text" name="city_cobranca" value="<?php echo $city_cobranca;?>"/>
            <span class="textfieldRequiredMsg">Digite a Cidade.</span></span></td>
            <td bgcolor="#CCCCCC">CEP*:</td>
            <td colspan="2"><span id="sprytextfield39">
            <input type="text" name="cep_cobranca" value="<?php echo $cep_cobranca;?>"/>
            <span class="textfieldRequiredMsg">Digite o CEP.</span></span></td>
          </tr>
          <tr>
            <td colspan="11" align="center" class="subtitulo">CONTATOS EMPRESA</td>
          </tr>
          <tr>
            <td colspan="11" bgcolor="#CCCCCC" class="subsub">SETOR DE COMPRAS:</td>
          </tr>
          <tr>
            <td colspan="4" bgcolor="#CCCCCC">Nome do Contato*</td>
            <td colspan="4" bgcolor="#CCCCCC">Telefone*</td>
            <td colspan="5" bgcolor="#CCCCCC">E-mail*</td>
          </tr>
          <tr>
            <td colspan="4"><span id="sprytextfield21">
              <input type="text" name="contato_compras" value="<?php echo $contato_compras;?>"/>
            <span class="textfieldRequiredMsg" style="font:14px Verdana, Geneva, sans-serif;">Contato de Compras?</span></span></td>
            <td colspan="4"><span id="sprytextfield22">
              <input type="text" name="telefone_compras" value="<?php echo $telefone_compras;?>" />
            <span class="textfieldRequiredMsg">Telefone do contato</span></span></td>
            <td colspan="5"><span id="sprytextfield23">
              <input type="text" name="email_compras"  value="<?php echo $email_compras;?>"/>
            <span class="textfieldRequiredMsg">E-mail do contato</span></span></td>
          </tr>
          <tr>
            <td colspan="11" bgcolor="#CCCCCC" class="subsub">SETOR FISCAL:</td>
          </tr>
          <tr>
            <td colspan="4" bgcolor="#CCCCCC">Nome do Contato*</td>
            <td colspan="4" bgcolor="#CCCCCC">Telefone*</td>
            <td colspan="5" bgcolor="#CCCCCC">E-mail*</td>
          </tr>
          <tr>
            <td colspan="4"><span id="sprytextfield24">
              <input type="text" name="contato_fiscal" value="<?php echo $contato_fiscal;?>"/>
            <span class="textfieldRequiredMsg" style="font:14px Verdana, Geneva, sans-serif;">Contato Fiscal</span></span></td>
            <td colspan="4"><span id="sprytextfield25">
              <input type="text" name="telefone_fiscal" value="<?php echo $telefone_fiscal;?>" />
            <span class="textfieldRequiredMsg">Telefone do contato</span></span></td>
            <td colspan="5"><span id="sprytextfield26">
              <input type="text" name="email_fiscal" value="<?php echo $email_fiscal;?>" />
            <span class="textfieldRequiredMsg">E-mail do contato</span></span></td>
          </tr>
          <tr>
            <td colspan="11" bgcolor="#CCCCCC" class="subsub">SETOR FINANCEIRO:</td>
          </tr>
          <tr>
            <td colspan="4" bgcolor="#CCCCCC">Nome do Contato*</td>
            <td colspan="4" bgcolor="#CCCCCC">Telefone*</td>
            <td colspan="5" bgcolor="#CCCCCC">E-mail*</td>
          </tr>
          <tr>
            <td colspan="4"><span id="sprytextfield27">
              <input type="text" name="contato_financeiro" value="<?php echo $contato_financeiro;?>" />
            <span class="textfieldRequiredMsg" style="font:14px Verdana, Geneva, sans-serif;">Contato Financeiro</span></span></td>
            <td colspan="4"><span id="sprytextfield28">
              <input type="text" name="telefone_financeiro" value="<?php echo $telefone_financeiro;?>" />
            <span class="textfieldRequiredMsg">Telefone do contato</span></span></td>
            <td colspan="5"><span id="sprytextfield29">
              <input type="text" name="email_financeiro" value="<?php echo $email_financeiro;?>"/>
            <span class="textfieldRequiredMsg">E-mail do contato</span></span></td>
          </tr>
          <tr>
            <td colspan="11" bgcolor="#CCCCCC">ENVIO ARQUIVO XML</td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">E-mail*:</td>
            <td colspan="9"><span id="sprytextfield30">
              <input type="text" name="email_xml" value="<?php echo $email_xml;?>"/><br />
            <span class="textfieldRequiredMsg">E-mail para envio do XML</span></span></td>
          </tr>
          <tr>
            <td colspan="11" align="center" class="subtitulo">REFER&Ecirc;NCIAS BANC&Aacute;RIAS</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3" align="center" bgcolor="#CCCCCC">Banco</td>
            <td align="center" bgcolor="#CCCCCC">Ag&ecirc;ncia</td>
            <td colspan="2" align="center" bgcolor="#CCCCCC">Conta</td>
            <td colspan="2" align="center" bgcolor="#CCCCCC">Telefone</td>
            <td colspan="2" align="center" bgcolor="#CCCCCC">Gerente</td>
          </tr>
          <tr>
            <td width="3%" bgcolor="#CCCCCC">1&ordm;</td>
            <td colspan="3"><input type="text" name="banco1" value="<?php echo $banco1;?>"/></td>
            <td><input type="text" name="agencia1" value="<?php echo $agencia1;?>"/></td>
            <td colspan="2"><input type="text" name="conta1" value="<?php echo $conta1;?>"/></td>
            <td colspan="2"><input type="text" name="telefone_banco_1" value="<?php echo $telefone_conta_1;?>"/></td>
            <td colspan="2"><input type="text" name="gerente_conta_1" value="<?php echo $gerente_conta_1;?>"/></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">2&ordm;</td>
            <td colspan="3"><input type="text" name="banco2" value="<?php echo $banco2;?>"/></td>
            <td><input type="text" name="agencia2"  value="<?php echo $agencia2;?>"/></td>
            <td colspan="2"><input type="text" name="conta2" value="<?php echo $conta2;?>"/></td>
            <td colspan="2"><input type="text" name="telefone_banco_2" value="<?php echo $telefone_conta_2;?>"/></td>
            <td colspan="2"><input type="text" name="gerente_conta_2" value="<?php echo $gerente_conta_2;?>"/></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">3&ordm;</td>
            <td colspan="3"><input type="text" name="banco3" value="<?php echo $banco3;?>"/></td>
            <td><input type="text" name="agencia3" value="<?php echo $agencia3;?>" /></td>
            <td colspan="2"><input type="text" name="conta3" value="<?php echo $conta3;?>"/></td>
            <td colspan="2"><input type="text" name="telefone_banco_3" value="<?php echo $telefone_conta_3;?>" /></td>
            <td colspan="2"><input type="text" name="gerente_conta_3" value="<?php echo $gerente_conta_3;?>"/></td>
          </tr>
          <tr>
            <td colspan="11" align="center" class="subtitulo">REFER&Ecirc;NCIAS COMERCIAIS</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="5" align="center" bgcolor="#CCCCCC">Fornecedores</td>
            <td colspan="3" align="center" bgcolor="#CCCCCC">CNPJ</td>
            <td colspan="2" align="center" bgcolor="#CCCCCC">Telefone</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">1&ordm;</td>
            <td colspan="5"><input type="text" name="fornecedor1" value="<?php echo $fornecedor1;?>" /></td>
            <td colspan="3"><input type="text" name="fornecedor_cnpj1" value="<?php echo $fornecedor_cnpj1;?>"/></td>
            <td colspan="2"><input type="text" name="fornecedor_telefone1" value="<?php echo $fornecedor_telefone1;?>"/></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">2&ordm;</td>
            <td colspan="5"><input type="text" name="fornecedor2" value="<?php echo $fornecedor2;?>"/></td>
            <td colspan="3"><input type="text" name="fornecedor_cnpj2" value="<?php echo $fornecedor_cnpj2;?>"/></td>
            <td colspan="2"><input type="text" name="fornecedor_telefone2" value="<?php echo $fornecedor_telefone2;?>"/></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">3&ordm;</td>
            <td colspan="5"><input type="text" name="fornecedor3" value="<?php echo $fornecedor3;?>"/></td>
            <td colspan="3"><input type="text" name="fornecedor_cnpj3" value="<?php echo $fornecedor_cnpj3;?>"/></td>
            <td colspan="2"><input type="text" name="fornecedor_telefone3" value="<?php echo $fornecedor_telefone3;?>"/></td>
          </tr>
          <tr>
            <td colspan="10" align="center">
                <div id="declaracao">
                	<h3>DECLARAÇÃO</h3>
                	<p>Declaramos estar cientes e expressamente de acordo que as informações e documentos adicionais anexados ao presente sejam utilizados para a abertura e manutenção de cadastro, análise e controles internos.</p><br />
                	<p>Declaramos que as informações prestadas são verídicas e estamos cientes de que a omissão ou declaração falsa configura-se "Crime de falsidade ideológica".</p><br />
                    <p>Comprometo-me de informar eventuais mudanças de endereço, contratuais e outras que ocorreram.</p>
                    <br /><br /><b><?php echo date("d/m/Y") ?></b>
                </div><!--Declaração-->
                <br />
              <span id="sprycheckbox1">
                <input type="checkbox" name="declara" value="Concordo" checked="checked"/><b> Aceito os termos acima descritos</b><br />
                <span class="checkboxRequiredMsg">Você concorda com os termos acima descritos?</span></span>
            </td>
          </tr>
          <tr>
            <td colspan="10" align="center"><h2>Upload de Arquivos <b>Obrigatórios</b></h2></td>
          </tr>
          <tr>
            <td colspan="7" align="right"><b>Contrato Social ou Estatuto Social*</b></td>
            <td colspan="5" align="left">
            	<input type="file" name="contrato" />
            </td>
          </tr>
          <tr>
            <td colspan="7" align="right"><b>CNPJ*</b></td>
            <td colspan="5" align="left"><input type="file" name="cnpj_arq" /></td>
          </tr>
          <tr>
            <td colspan="7" align="right"><b>Declaração de Isenção de Tributos<br />
            (*caso o cliente possua algum benefício fiscal)</b></td>
            <td colspan="5" align="left"><input type="file" name="tributos" /></td>
          </tr>
          <tr>
            <td colspan="7" align="right"><b>Outros</b></td>
            <td colspan="5" align="left"><input type="file" name="joutros" /></td>
          </tr>
          <tr>
            <td colspan="10" align="center"><input type="hidden" name="envia_juridica" value="juridica" /><input type="submit" name="enviar_juridica" value="Enviar cadastro" class="btncadastro" /></td>
          </tr>
        </table>
</form>
  <p>TODOS OS CAMPOS ASSINALADOS COM * SÃO OBRIGATÓRIOS</p>
    </div><!--Cadastro Juridica-->
    
    
    
<!-----------------------------CADASTRO FISICA-------------------------------------> 


    
    <div id="cadastro_fisica" class="cadastro" style="display:none;">
    	<form action="" method="post" enctype="multipart/form-data">
        <b>Selecione o tipo de cadastro</b><br />
        	<label>Cadastro Novo </label><input type="radio" name="tipo_cadastro" value="Novo" />
            <label>Atualização </label><input type="radio" name="tipo_cadastro" value="Atualização" checked="checked" autofocus="autofocus"/>
    	<table>
          <tr>
            <td colspan="11" align="center"><img src="images/logo.jpg" width="200" height="60" /><br />
              <span>Silpa Pe&ccedil;as e Equipamentos LTDA</span></td>
          </tr>
          <tr>
            <td colspan="11" align="center" class="subtitulo">DADOS DA EMPRESA</td>
          </tr>
          <tr>
            <td colspan="5" bgcolor="#CCCCCC">Nome*:</td>
            <td colspan="6"><span id="fis_nome">
              <input type="text" name="fis_nome" value="<?php echo $fis_nome ?>"/>
            <span class="textfieldRequiredMsg">Digite seu Nome.</span></span></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">RG*:</td>
            <td colspan="9"><span id="fis_rg">
              <input type="text" name="fis_rg" value="<?php echo $fis_rg;?>" />
            <span class="textfieldRequiredMsg">Digite seu RG.</span></span></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">CPF*:</td>
            <td colspan="9"><span id="fis_cpf">
              <input type="text" name="fis_cpf" value="<?php echo $fis_cpf;?>"/>
            <span class="textfieldRequiredMsg">Digite seu CPF.</span></span></td>
          </tr>
          <tr>
            <td colspan="5" bgcolor="#CCCCCC">Endere&ccedil;o (Rua, Av, etc...)*:</td>
            <td colspan="3"><span id="fis_address">
              <input type="text" name="fis_address" value="<?php echo $fis_address;?>"/>
            <span class="textfieldRequiredMsg">Digite seu Endereço.</span></span></td>
            <td width="16%" bgcolor="#CCCCCC">N&ordm;*:</td>
            <td width="16%"><span id="fis_numero">
              <input type="text" name="fis_numero" value="<?php echo $fis_numero;?>"/>
            <span class="textfieldRequiredMsg">Digite o número.</span></span></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">Cidade*:</td>
            <td colspan="4"><span id="fis_city">
              <input type="text" name="fis_city" value="<?php echo $fis_city;?>"/>
            <span class="textfieldRequiredMsg">Digite sua cidade.</span></span></td>
            <td bgcolor="#CCCCCC">UF*:</td>
            <td><span id="fis_estado_select">
              <select name="fis_estado" id="estado">
                <option value=""></option>
                <?php
					$result= mysql_query("SELECT sigla,descricao FROM estados ORDER BY descricao");
				    while($rows = mysql_fetch_array($result)){
					   $sigla =  $rows[0];
					   $estado = $rows[1];
                             ?>
                <option value="<?php echo $estado;?>" id="<?php echo $sigla;?>2"><?php echo strtoupper($estado);?></option>
                <?php
   					}
			?>
              </select>
            <span class="selectRequiredMsg">Selecione um estado.</span></span></td>
            <td bgcolor="#CCCCCC">CEP*:</td>
            <td colspan="5"><span id="fis_cep">
              <input type="text" name="fis_cep" value="<?php echo $fis_cep?>" />
            <span class="textfieldRequiredMsg">Digite seu CEP.</span></span></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">Bairro*:</td>
            <td colspan="5"><span id="fis_bairro">
              <input type="text" name="fis_bairro" value="<?php echo $fis_bairro?>" />
            <span class="textfieldRequiredMsg">Digite o bairro.</span></span></td>
            <td bgcolor="#CCCCCC">Complemento:</td>
            <td colspan="3"><input type="text" name="fis_complemento" value="<?php echo $fis_complemento?>" /></td>
          </tr>
        	<tr>
        	  <td colspan="11" align="center" class="subtitulo">ATIVIDADES E DADOS</td>
      	  </tr>
          <tr>
        	  <td colspan="5" bgcolor="#CCCCCC">Data de Nascimento*:</td>
              <td colspan="6"><span id="data_nasc">
                <input type="text" name="fis_data_nasc" value="<?php echo $fis_data_nasc;?>" />
            <span class="textfieldRequiredMsg">Data de Nascimento Obrigatório</span></span></td>
      	  </tr>
          <tr>
        	  <td colspan="5" bgcolor="#CCCCCC">Profissão*:</td>
              <td colspan="6"><span id="profissao">
                <input type="text" name="fis_profissao" value="<?php echo $fis_profissao;?>" />
            <span class="textfieldRequiredMsg">Campo profissão obrigatório</span></span></td>
      	  </tr>
          <tr>
        	  <td colspan="11" align="center" class="subtitulo">COMUNICAÇÃO</td>
      	  </tr>
          <tr>
            <td colspan="2" bgcolor="#CCCCCC">DDD*:</td>
            <td colspan="5" bgcolor="#CCCCCC">N&ordm; do Telefone 1*:</td>
            <td colspan="2" bgcolor="#CCCCCC">N&ordm; do Telefone 2:</td>
            <td colspan="2" bgcolor="#CCCCCC">Fax:</td>
          </tr>
          <tr>
            <td colspan="2"><span id="ddd">
              <input type="text" name="fis_ddd" value="<?php echo $fis_ddd;?>"/>
            <span class="textfieldRequiredMsg">DDD é Obrigatório</span></span></td>
            <td colspan="5"><span id="numero1_fis">
              <input type="text" name="fis_numero1" value="<?php echo $fis_numero1;?>" />
            <span class="textfieldRequiredMsg">Telefone é obrigatório</span></span></td>
            <td colspan="2"><input type="text" name="fis_numero2" value="<?php echo $fis_numero2;?>"/></td>
            <td colspan="2"><input type="text" name="fis_fax" value="<?php echo $fis_fax;?>" /></td>
          </tr>
          <tr>
        	  <td colspan="5" bgcolor="#CCCCCC">E-mail*:</td>
              <td colspan="6"><span id="email_fis">
                <input type="text" name="fis_email" value="<?php echo $fis_email;?>" />
            <span class="textfieldRequiredMsg">Email Obrigatório</span></span></td>
      	  </tr>
          <tr>
        	  <td colspan="5" bgcolor="#CCCCCC">Endereço de Cobrança*:</td>
              <td colspan="6"><span id="end_cobra">
                <input type="text" name="fis_end_cobranca" value="<?php echo $fis_end_cobranca;?>" />
            <span class="textfieldRequiredMsg">Endereço de cobrança é um campo obrigatório</span></span></td>
      	  </tr>
          <tr>
          	<td bgcolor="#CCCCCC">UF*:</td>
          	<td><span id="fis_estado_cob">
          	  <select name="fis_estado_cobranca" id="estado">
          	    <option value="<?php echo $fis_estado_cobranca;?>"><?php echo strtoupper($fis_estado_cobranca);?></option>
          	    <?php
                        $result= mysql_query("SELECT sigla,descricao FROM estados ORDER BY descricao");
                        while($rows = mysql_fetch_array($result))echo "<option value=\"$rows[1]\" id=\"$rows[0]\">$rows[1]</option>";
                ?>
       	    </select>
       	    <span class="selectRequiredMsg" style="font-size:12px;">Selecione o Estado.</span></span></td>
            <td bgcolor="#CCCCCC">Cidade*:</td>
            <td colspan="5"><span id="fis_city_cob">
              <input type="text" name="fis_city_cobranca" value="<?php echo $fis_city_cobranca;?>"/>
            <span class="textfieldRequiredMsg">Digite a cidade.</span></span></td>
            <td bgcolor="#CCCCCC">CEP*:</td>
            <td colspan="2"><span id="fis_cep_cob">
              <input type="text" name="fis_cep_cobranca" value="<?php echo $fis_cep_cobranca;?>"/>
            <span class="textfieldRequiredMsg">Digite o CEP.</span></span></td>
          </tr>
          <tr>
        	  <td colspan="11" align="center" class="subtitulo">CONTATOS</td>
      	  </tr>
          <tr>
            <td colspan="11" bgcolor="#CCCCCC" class="subsub">ENVIO ARQUIVO XML:</td>
          </tr>
          <tr>
            <td colspan="5" bgcolor="#CCCCCC">E-mail*:</td>
            <td colspan="6"><span id="emailxml">
              <input type="text" name="fis_emailxml" value="<?php echo $fis_emailxml;?>" />
            <span class="textfieldRequiredMsg">E-mail para o XML Obrigatório</span></span></td>
          </tr>
          <tr>
            <td colspan="11" align="center" class="subtitulo">REFERÊNCIAS BANCÁRIAS</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3" align="center" bgcolor="#CCCCCC">Banco</td>
            <td align="center" bgcolor="#CCCCCC">Agência</td>
            <td colspan="2" align="center" bgcolor="#CCCCCC">Conta</td>
            <td colspan="2" align="center" bgcolor="#CCCCCC">Telefone</td>
            <td colspan="2" align="center" bgcolor="#CCCCCC">Gerente</td>
          </tr>
          <tr>
            <td width="3%" bgcolor="#CCCCCC">1&ordm;</td>
            <td colspan="3"><input type="text" name="fis_banco1" value="<?php echo $fis_banco1;?>"/></td>
            <td><input type="text" name="fis_agencia1" value="<?php echo $fis_agencia1;?>"/></td>
            <td colspan="2"><input type="text" name="fis_conta1" value="<?php echo $fis_conta1;?>"/></td>
            <td colspan="2"><input type="text" name="fis_telefone_banco_1" value="<?php echo $fis_telefone_banco_1;?>"/></td>
            <td colspan="2"><input type="text" name="fis_gerente_conta_1" value="<?php echo $fis_gerente_conta_1;?>"/></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">2&ordm;</td>
            <td colspan="3"><input type="text" name="fis_banco2" value="<?php echo $fis_banco2;?>"/></td>
            <td><input type="text" name="fis_agencia2"  value="<?php echo $fis_agencia2;?>"/></td>
            <td colspan="2"><input type="text" name="fis_conta2" value="<?php echo $fis_conta2;?>"/></td>
            <td colspan="2"><input type="text" name="fis_telefone_banco_2" value="<?php echo $fis_telefone_banco_2;?>"/></td>
            <td colspan="2"><input type="text" name="fis_gerente_conta_2" value="<?php echo $fis_gerente_conta_2;?>"/></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">3&ordm;</td>
            <td colspan="3"><input type="text" name="fis_banco3" value="<?php echo $fis_banco3;?>"/></td>
            <td><input type="text" name="fis_agencia3" value="<?php echo $fis_agencia3;?>" /></td>
            <td colspan="2"><input type="text" name="fis_conta3" value="<?php echo $fis_conta3;?>"/></td>
            <td colspan="2"><input type="text" name="fis_telefone_banco_3" value="<?php echo $fis_telefone_banco_3;?>" /></td>
            <td colspan="2"><input type="text" name="fis_gerente_conta_3" value="<?php echo $fis_gerente_conta_3;?>"/></td>
          </tr>
          <tr>
            <td colspan="11" align="center" class="subtitulo">REFER&Ecirc;NCIAS COMERCIAIS</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="5" align="center" bgcolor="#CCCCCC">Fornecedores</td>
            <td colspan="3" align="center" bgcolor="#CCCCCC">CNPJ</td>
            <td colspan="2" align="center" bgcolor="#CCCCCC">Telefone</td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">1&ordm;</td>
            <td colspan="5"><input type="text" name="fis_fornecedor1" value="<?php echo $fis_fornecedor1;?>" /></td>
            <td colspan="3"><input type="text" name="fis_fornecedor_cnpj1" value="<?php echo $fis_fornecedor_cnpj1;?>"/></td>
            <td colspan="2"><input type="text" name="fis_fornecedor_telefone1" value="<?php echo $fis_fornecedor_telefone1;?>"/></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">2&ordm;</td>
            <td colspan="5"><input type="text" name="fis_fornecedor2" value="<?php echo $fis_fornecedor2;?>" /></td>
            <td colspan="3"><input type="text" name="fis_fornecedor_cnpj2" value="<?php echo $fis_fornecedor_cnpj2;?>"/></td>
            <td colspan="2"><input type="text" name="fis_fornecedor_telefone2" value="<?php echo $fis_fornecedor_telefone2;?>"/></td>
          </tr>
          <tr>
            <td bgcolor="#CCCCCC">3&ordm;</td>
            <td colspan="5"><input type="text" name="fis_fornecedor3" value="<?php echo $fis_fornecedor3;?>" /></td>
            <td colspan="3"><input type="text" name="fis_fornecedor_cnpj3" value="<?php echo $fis_fornecedor_cnpj3;?>"/></td>
            <td colspan="2"><input type="text" name="fis_fornecedor_telefone3" value="<?php echo $fis_fornecedor_telefone3;?>"/></td>
          </tr>
          <tr>
            <td colspan="10" align="center">
                <div id="declaracao">
                	<h3>DECLARAÇÃO</h3>
                	<p>Declaramos estar cientes e expressamente de acordo que as informações e documentos adicionais anexados ao presente sejam utilizados para a abertura e manutenção de cadastro, análise e controles internos.</p><br />
                	<p>Declaramos que as informações prestadas são verídicas e estamos cientes de que a omissão ou declaração falsa configura-se "Crime de falsidade ideológica".</p><br />
                    <p>Comprometo-me de informar eventuais mudanças de endereço, contratuais e outras que ocorreram.</p>
                    <br /><br /><b><?php echo date("d/m/Y") ?></b>
                </div><!--Declaração-->
                <br />
                <span id="sprycheckbox2">
                <input type="checkbox" name="declara2" value="Concordo" checked="checked"/><b> Aceito os termos acima descritos</b><br />
            <span class="checkboxRequiredMsg">Você aceita os termos acima descritos?</span></span></td>
          </tr>
          <tr>
            <td colspan="10" align="center"><h2>Upload de Arquivos <b>Obrigatórios</b></h2></td>
          </tr>
          <tr>
            <td colspan="7" align="right"><b>RG*</b></td>
            <td colspan="5" align="left">
            	<input type="file" name="fis_arq_rg"/>
            </td>
          </tr>
          <tr>
            <td colspan="7" align="right"><b>CPF*</b></td>
            <td colspan="5" align="left"><input type="file" name="fis_arq_cpf" /></td>
          </tr>
          <tr>
            <td colspan="7" align="right"><b>Comprovante de Endereço*</b></td>
            <td colspan="5" align="left"><input type="file" name="fis_arq_compro_end" /></td>
          </tr>
          <tr>
            <td colspan="7" align="right"><b>Outros</b></td>
            <td colspan="5" align="left"><input type="file" name="foutros" /></td>
          </tr>
        	<tr>
            	<td colspan="11" align="center">
                    <input type="hidden" name="envia_fisica" value="fisica" />
                    <input type="submit" name="enviar_fisica" value="Enviar Cadastro" class="btncadastro" />
                </td>
            </tr>
        </table>
        </form>
       <p>TODOS OS CAMPOS ASSINALADOS COM * SÃO OBRIGATÓRIOS</p>
    </div><!--Cadastro Fisica-->
</div><!--Content-->
<script type="text/javascript">
var sprytextfield2 = new Spry.Widget.ValidationTextField("razao_social", "none", {validateOn:["blur"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("nome_fantasia", "none", {validateOn:["blur"]});
var sprytextfield1 = new Spry.Widget.ValidationTextField("cnpj", "none", {validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["blur"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["blur"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {validateOn:["blur"]});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["blur"]});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {validateOn:["blur"]});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "none", {validateOn:["blur"]});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "none", {validateOn:["blur"]});
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10", "none", {validateOn:["blur"]});
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11", "none", {validateOn:["blur"]});
var sprytextfield13 = new Spry.Widget.ValidationTextField("sprytextfield13", "none", {validateOn:["blur"]});
var sprytextfield14 = new Spry.Widget.ValidationTextField("sprytextfield14", "none", {validateOn:["blur"]});
var sprytextfield16 = new Spry.Widget.ValidationTextField("sprytextfield16", "none", {validateOn:["blur"]});
var sprytextfield17 = new Spry.Widget.ValidationTextField("sprytextfield17", "none", {validateOn:["blur"]});
var sprytextfield19 = new Spry.Widget.ValidationTextField("sprytextfield19", "none", {validateOn:["blur"]});
var sprytextfield20 = new Spry.Widget.ValidationTextField("sprytextfield20", "none", {validateOn:["blur"]});
var sprytextfield21 = new Spry.Widget.ValidationTextField("sprytextfield21", "none", {validateOn:["blur"]});
var sprytextfield22 = new Spry.Widget.ValidationTextField("sprytextfield22", "none", {validateOn:["blur"]});
var sprytextfield23 = new Spry.Widget.ValidationTextField("sprytextfield23", "none", {validateOn:["blur"]});
var sprytextfield24 = new Spry.Widget.ValidationTextField("sprytextfield24", "none", {validateOn:["blur"]});
var sprytextfield25 = new Spry.Widget.ValidationTextField("sprytextfield25", "none", {validateOn:["blur"]});
var sprytextfield26 = new Spry.Widget.ValidationTextField("sprytextfield26", "none", {validateOn:["blur"]});
var sprytextfield27 = new Spry.Widget.ValidationTextField("sprytextfield27", "none", {validateOn:["blur"]});
var sprytextfield28 = new Spry.Widget.ValidationTextField("sprytextfield28", "none", {validateOn:["blur"]});
var sprytextfield29 = new Spry.Widget.ValidationTextField("sprytextfield29", "none", {validateOn:["blur"]});
var sprytextfield30 = new Spry.Widget.ValidationTextField("sprytextfield30", "none", {validateOn:["blur"]});
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1", {validateOn:["blur"]});
var spryradio2 = new Spry.Widget.ValidationRadio("spryradio2", {validateOn:["blur"]});
var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1", {validateOn:["blur"]});
var sprytextfield15 = new Spry.Widget.ValidationTextField("fis_cpf", "none", {validateOn:["blur"]});
var sprytextfield18 = new Spry.Widget.ValidationTextField("fis_rg", "none", {validateOn:["blur"]});
var sprytextfield31 = new Spry.Widget.ValidationTextField("fis_nome", "none", {validateOn:["blur"]});
var sprytextfield32 = new Spry.Widget.ValidationTextField("data_nasc", "none", {validateOn:["blur"]});
var sprytextfield33 = new Spry.Widget.ValidationTextField("profissao", "none", {validateOn:["blur"]});
var sprytextfield34 = new Spry.Widget.ValidationTextField("ddd", "none", {validateOn:["blur"]});
var sprytextfield35 = new Spry.Widget.ValidationTextField("numero1_fis", "none", {validateOn:["blur"]});
var sprytextfield36 = new Spry.Widget.ValidationTextField("email_fis");
var sprytextfield37 = new Spry.Widget.ValidationTextField("end_cobra", "none", {validateOn:["blur"]});
var sprytextfield38 = new Spry.Widget.ValidationTextField("emailxml", "none", {validateOn:["blur"]});
var sprycheckbox2 = new Spry.Widget.ValidationCheckbox("sprycheckbox2");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {validateOn:["blur"]});
var sprytextfield12 = new Spry.Widget.ValidationTextField("sprytextfield12", "none", {validateOn:["blur"]});
var sprytextfield39 = new Spry.Widget.ValidationTextField("sprytextfield39", "none", {validateOn:["blur"]});
var spryselect3 = new Spry.Widget.ValidationSelect("fis_estado_cob", {validateOn:["blur"]});
var sprytextfield40 = new Spry.Widget.ValidationTextField("fis_city_cob", "none", {validateOn:["blur"]});
var sprytextfield41 = new Spry.Widget.ValidationTextField("fis_cep_cob", "none", {validateOn:["blur"]});
var sprytextfield42 = new Spry.Widget.ValidationTextField("fis_address", "none", {validateOn:["blur"]});
var sprytextfield43 = new Spry.Widget.ValidationTextField("fis_numero", "none", {validateOn:["blur"]});
var sprytextfield44 = new Spry.Widget.ValidationTextField("fis_city", "none", {validateOn:["blur"]});
var spryselect4 = new Spry.Widget.ValidationSelect("fis_estado_select", {validateOn:["blur"]});
var sprytextfield45 = new Spry.Widget.ValidationTextField("fis_cep", "none", {validateOn:["blur"]});
var sprytextfield46 = new Spry.Widget.ValidationTextField("fis_bairro", "none", {validateOn:["blur"]});
</script>
</body>
</html>