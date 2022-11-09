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
<script type="text/javascript" src="../scripts/jquery.js"></script>
<script type="text/javascript">
	$(function(){
		$("#categoria").change(function(){
		    if( $( this ).val() === 'produtos' ) {
			$("#tipo").show("slow");
			}else{
			$("#tipo").hide("slow");
			}
			if( $( this ).val() === 'noticias' ) {
			$("#tipo_espec").hide("slow");
			$("#tipo_cod").hide("slow");
			}else{
			$("#tipo_espec").show("slow");
			$("#tipo_cod").show("slow");
			}
		});  	  
	});
</script>
<div id="box_content">
    <div id="sidebar">
     <?php include"menu_painel.php"; ?>
     </div><!--Sidebar--> 
    <div id="conteudo">
    <span class="caminho">Home &raquo; Cadastro de Posts</span>
     
     <h1>Cadastro de Posts</h1>
     <?php
if(isset($_POST['pasta']) && $_POST['new'] == 'new'){
$pasta = $_POST['pasta'];
$titulo = $_POST['titulo'];
		if(file_exists("../uploads/manuais/$pasta")){
			echo "<div class=\"no\">A pasta \"".$pasta."\" já existe no sistema!!!</div>";
		}else{
		mkdir("../uploads/manuais/$pasta", 0700);
		echo "<div class=\"ok\">Pasta ".$pasta." criada com sucesso!!!</div>";
$insert = mysql_query("INSERT INTO categorias (titulo, pasta) VALUES ('$titulo','$pasta')")
          or die(mysql_error());
		}
}
?>

<form action="" method="post">
  <table border=0>
    <tr><td>Nome da Pasta(Sem acentos e/ou caraceteres especiais)</td></tr><tr><td><input type="text" name="pasta" size="20"><br></td></tr>
	<tr><td>Titulo</td></tr><tr><td><input type="text" name="titulo" size="20"><br></td></tr>
    <tr>
      <td colspan=2>
       <input type="hidden" name="new" value="new" />
       <input type="submit" value="Criar pasta!" class="cadastrar_btn">
      </td>
    </tr>
  </table>
</form>
    </div><!--Conteudo-->
   </div><!--box_content-->
<?php include "footer.php";?>