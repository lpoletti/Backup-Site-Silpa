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
    <span class="caminho">Home &raquo; Cadastro de Representante</span>
     
     <h1>Cadastro de Representante</h1>
<?php
if(isset($_POST['cadastrar_repre']) && $_POST['cadastrar_repre'] == 'cad'){
	
	$representada         = $_POST['representada'];
	$contato              = $_POST['contato'];
	$email                = $_POST['email'];
	$telefone             = $_POST['telefone'];
	$estado               = $_POST['estado'];
					  
		  $cadastrar_repre = mysql_query("INSERT INTO silpa_repre (representada, contato, email, telefone, estado)
		                        VALUES ('$representada', '$contato', '$email', '$telefone','$estado')")
		                        or die(mysql_error());
								
		  if($cadastrar_repre >= '1'){
			  echo "<div class=\"ok\">O representante foi cadastrado com sucesso!</div>";
		  }else{
			  echo "<div class=\"no\">Erro ao cadastrar o representante!</div>";
		  }
		  
}
?>
      <form name="cadastrar_repre" id="cadastrar_repre" method="post" action="" enctype="multipart/form-data">
       <fieldset>
       	 
         <label>
          <span>Estado</span>
           <select name="estado" id="estado">
            <option value="-1">Selecione o Estado</option>
            <?php
   $query = "SELECT sigla, descricao FROM estados ORDER BY descricao";
   $result = mysql_query($query);
   while ($rows = mysql_fetch_array($result)){
	   $sigla = $rows[0];
	   $estado = $rows[1];
			 ?>
            <option value="<?php echo $sigla;?>" id="<?php echo $sigla;?>"><?php echo strtoupper($estado);?></option>
            <?php
   }
			?>
           </select>
         </label>
         
                
         <label>
          <span>Representada</span>
           <input type="text" name="representada" />
         </label>
         
         <label>
          <span>Contato</span>
           <input type="text" name="contato" />
         </label>
         
         <label>
          <span>Email</span>
           <input type="text" name="email" />
         </label>
         
         <label>
          <span>Telefone</span>
           <input type="text" name="telefone" />
         </label>
         
         <input type="hidden" name="cadastrar_repre" value="cad" />
         <input type="submit" value="Cadastrar" name="Cadastrar" class="cadastrar_btn" />
       </fieldset>
      </form>
    </div><!--Conteudo-->
   </div><!--box_content-->
<?php include "footer.php";?>