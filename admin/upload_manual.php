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
    <span class="caminho">Home &raquo; Envia Manuais</span>
     <?php 
	 echo "<pre>";
print_r($_FILES);
echo "</pre>";
	   
     $diretorio = "teste/";


if (!is_dir($diretorio)){ echo "Pasta $diretorio nao existe";} 


else { echo "A Pasta Existe<br>";


				$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;
				
					for ($k = 0; $k < count($arquivo['name']); $k++)
						{
						   $destino = $diretorio."/".$arquivo['name'][$k];

						    if (move_uploaded_file($arquivo['tmp_name'][$k], $destino)) {echo "MOVEUUUUUU<br>"; }
									
						    else {echo "NAOOOO MOVEU";}
						}		

				

} // fecha else
?>
    </div><!--Conteudo-->
   </div><!--box_content-->
<?php include "footer.php";?>