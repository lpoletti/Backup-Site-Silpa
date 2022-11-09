<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "index.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<?php include"header.php"; ?>
<div id="box_content">
    <div id="sidebar">
     <?php include"menu_painel.php"; ?>
     </div><!--Sidebar--> 
    <div id="conteudo">
    <?php	
		$pastas = mysql_query("SELECT pasta FROM categorias ORDER BY pasta")
			  or die(mysql_error());
	if(isset($_POST['envio']) && $_POST['envio'] == 'envio'){
		$dir_manuais = $_POST['destino'];
		$level_destino = $_POST['level'];
		// Nas versões do PHP anteriores a 4.1.0, deve ser usado $HTTP_POST_FILES
		// ao invés de $_FILES.		
		$arquivo = $_FILES['arquivo']['name'];
		//$uploaddir = '../upload/manuais/'.$dir_manuais.'/';
		chdir("../uploads/manuais/".$dir_manuais."/");
		//$uploadfile = $uploaddir . $_FILES['arquivo']['name'];
		print "<pre>";
		if (move_uploaded_file($_FILES['arquivo']['tmp_name'],$_FILES['arquivo']['name'])) {
			$insert_manual = mysql_query("INSERT INTO manuais (descricao, arquivo, pasta,level) VALUES ('$arquivo','$arquivo','$dir_manuais','$level_destino')")
							 or die(mysql_error());
			print "<div class=\"ok\">O arquivo é valido e foi carregado com sucesso. Aqui esta alguma informação:\n";
			print_r($_FILES);
			echo "Pasta ao qual foi enviado: ".$dir_manuais;
			print "</div>";
		} else {
			print "<div class=\"no\">Possivel ataque de upload! Aqui esta alguma informação:\n";
			print_r($_FILES);
			echo "Pasta da tentativa de envio: ".$dir_manuais;
			print "</div>";
		}
		print "</pre>";
	}
?>
    <span class="caminho">Home &raquo; Envia Manuais</span>
        
     <h1>Envia Manuais</h1>
        <form action="" method="post" enctype="multipart/form-data" onsubmit="showCarga()">
        <span>Enviar o arquivo:</span> <input type="file" name="arquivo" size="20"><br>        
        <label>
          <span>Selecione o destino do Manual:</span>
           <select name="destino">
            <option value="-1">Selecione o Destino</option>
            <?php
   			while ($rows = mysql_fetch_array($pastas)){
	  		$pasta_manuais = $rows[0];
			?>
            <option value="<?php echo $pasta_manuais;?>"><?php echo $pasta_manuais;?></option>
            <?php
			}
			?>
           </select>
         </label>
         <label>
         <span>Tipo de manual:</span>
          <select name="level">
            <option value="-1">Selecione o Destino</option>
            <?php 
			$query_level = mysql_query("SELECT level FROM silpa_usersmanuais GROUP BY level")
			or die(mysql_error());
			while ($level=mysql_fetch_array($query_level)){
				$level_manuais = $level[0];
			?>
            <option value="<?php echo $level_manuais;?>"><?php echo strtoupper($level_manuais);?></option>
            <?php
			}
			?>
         </label>
         <input type="hidden" name="envio" value="envio" />
         <input type="hidden" name="MAX_FILE_SIZE" value="10240000" />
         <input type="submit" value="Enviar" class="cadastrar_btn">
        </form>
    </div><!--Conteudo-->
   </div><!--box_content-->
<?php include "footer.php";?>