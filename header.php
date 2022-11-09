<?php 
if (!isset($_SESSION)) {
session_start();
}
ob_start();
require_once('Connections/config.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['login'])) {
  $loginUsername=$_POST['login'];
  $password=$_POST['senha'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "index.php?topicos=nav/manuais";
  $MM_redirectLoginFailed = "index.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_config, $config);
  
  $LoginRS__query=sprintf("SELECT `user`, senha FROM silpa_usersmanuais WHERE `user`=%s AND senha=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $config) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include"Connections/config.php";
$conexao = mysql_connect("$hostname_config","$username_config","$password_config")
          or die(mysql_error());
$db = mysql_select_db("$database_config")
      or die(mysql_error());
?>
<?php include"scripts/limita_palavra.php"; ?>
<?php
$pgatual = $_GET['topicos'];
?>
<title>Silpa Peças e Equipamentos Rodoviários | Qualidade, Confiança e Tradição</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content="Silpa,Implementos rodoviários,semirreboque,reboque,graneleiro,baú lonado,canavieiro,carga seca,terceiro eixo,basculante,bitrem,rodotrem,dolly,porta container,sider,caminhão,quinta roda,porta tora,tanque,boiadeiro,furgão,eixo,freio,componente,suspensão,suspensões,freios,eixos,componentes">
<meta name="description" content="A Silpa é um dos maiores fabricantes de implementos rodoviários da América Latina,  com uma linha diversificada de semirreboques, bitrens, rodotrens, furgões, tanques, baús lonados e basculantes, entre outros..">
<meta name="abstract" content="Com mais de quatro décadas de experiência na fabricação de Peças e Componentes para Implementos Rodoviários, a Silpa conquistou todo o mercado brasileiro.">
<meta name="Author" content="Luan Poletti feat Rafael Sartori">
<meta name="Language" content="Portuguese">
<meta name="Robots" content="all">
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="scripts/shadowbox-3.0.3/shadowbox.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="nav/timeline_silpa/css/style.css" type="text/css" media="screen" />
<link rel="shortcut icon" href="images/icones/logo-ico.ico" type="image/x-icon" />
<?php include"scripts.php"; ?>
</head>

<body onload="hideCarga();">
<!-- div de carga enquanto carrega o resultado-->
	<div class="loading" id="carga" style="display:none; position:absolute; top:50%; left:50%; z-index:50000; border-radius:20px;">
		<img class="imgloading" src="images/loading.gif" alt="Carregando">
	</div>
 <div id="box">
 
  <div id="header">
  <a href="index.php?topicos=nav/home">
   <img src="images/header.jpg" alt="top"/>
  </a>
  </div><!--Header-->
  
  <div id="menu">
   <ul>
    <li><a href="index.php?topicos=nav/home"><img src="images/icones/home.ico" width="20px" height="20px" alt="Home" />Home</a></li>
    <li><a href="#"><img src="images/icones/produtos.ico" width="20px" height="20px" alt="Produtos" />Produtos</a>
     <ul>
      <!--<li><a href="index.php?topicos=nav/page&amp;pagina=eixos"><img src="images/icones/Eixo Tubular Roda Disco.ico" width="30px" height="30px" alt="Eixos" /><p>Eixos</p></a></li>-->
	  <li><a href="index.php?topicos=nav/single&topicosingle=43"><img src="images/icones/Eixo Tubular Roda Disco.ico" width="30px" height="30px" alt="Eixos" /><p>Eixos</p></a></li>
      <li><a href="index.php?topicos=nav/page&amp;pagina=freios"><img src="images/icones/0201.png" width="30px" height="30px" alt="Freios" /><p>Freios</p></a></li>
      <li><a href="index.php?topicos=nav/page&amp;pagina=suspensoes"><img src="images/icones/0301.png" width="30px" height="30px" alt="suspensões" /><p>Suspensões</p></a></li>
      <li><a href="index.php?topicos=nav/page&amp;pagina=componentes"><img src="images/icones/0401.png" width="30px" height="30px" alt="Componentes" /><p>Componentes</p></a></li>
      <li><a href="index.php?topicos=nav/page&pagina=download"><img src="images/icones/catalog.ico" width="30px" height="30px" alt="Catalogo" /><p>Catálogo</p></a></li>      
     </ul>
    </li>
    <li><a href="index.php?topicos=nav/maparepre"><img src="images/icones/representante.ico" width="20px" height="20px" alt="representantes" />Representantes</a></li>
    <?php
	$select_arquivo_kit=mysql_query("SELECT arquivo FROM concessionaria")
		or die(mysql_error());
	$rows=mysql_fetch_array($select_arquivo_kit);
	$arquivo_concessionaria_kit=$rows[0];
	$select_arquivo_caixa=mysql_query("SELECT arquivo FROM concessionaria_caixa")
		or die(mysql_error());
	$rows=mysql_fetch_array($select_arquivo_caixa);
	$arquivo_concessionaria_caixa=$rows[0];
	?>
    <li><a href="#"><img src="images/icones/concessionarias.ico" width="20px" height="20px" alt="Concessionarias" />Concessionárias</a>
     <ul>
      <li><a href="uploads/concessionariaskit/<?php echo $arquivo_concessionaria_kit;?>" target="_blank"><img src="images/icones/concessionarias.ico" width="20px" height="20px" alt="concessionárias" />Adaptação de E.V.A</a></li>
      <li><a href="uploads/concessionariascaixa/<?php echo $arquivo_concessionaria_caixa;?>" target="_blank"><img src="images/icones/concessionarias.ico" width="20px" height="20px" alt="concessionárias" />Adaptação de DIF</a></li>     
     </ul>
    </li>
    <li class="selected"><a href="index.php?topicos=nav/contato"><img src="images/icones/contato.ico" width="20px" height="20px" alt="contato" />Contato</a></li>
   </ul>
   <form name="search" action="index.php?topicos=nav/search" method="post" onsubmit="showCarga();">
    <input type="text" name="pesquisa" value="Código ou Descrição" onfocus="this.value='';" onblur="this.value='Código ou Descrição'" />
    <input type="submit" name="Procurar" value="Buscar" class="search_btn" />
   </form>
  </div><!--Menu-->
  
  <div id="content">