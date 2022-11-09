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
    <span class="caminho">Home &raquo; Editor de Representante</span>
     
     <h1>Edite seu Representante</h1>
<?php
if(isset($_POST['editar_repre']) && $_POST['editar_repre'] == 'edit'){
	
	$id_editar            = $_POST['id_repre'];
	$representada         = $_POST['representada'];
	$contato              = $_POST['contato'];
	$email                = $_POST['email'];
	$telefone             = $_POST['telefone'];
	$estado               = $_POST['estado'];
					  
		  $cadastrar_repre = mysql_query("UPDATE silpa_repre SET representada = '$representada', contato = '$contato', email = '$email', telefone = '$telefone', estado = '$estado' WHERE id = '$id_editar'")
		                        or die(mysql_error());
								
		  if($cadastrar_repre >= '1'){
			  echo "<div class=\"ok\">O representante foi editado com sucesso!</div>";
		  }else{
			  echo "<div class=\"no\">Erro ao editar o representante!</div>";
		  }
}
?>
<?php
$id_repre = $_POST['id_repre'];

$con_repre = mysql_query("SELECT id, representada, contato, email, telefone, estado FROM silpa_repre WHERE id ='$id_repre'")
            or die(mysql_error());
if(@mysql_num_rows == '0'){
	echo "Não encontramos representantes neste momento";//SE NÃO TIVER LINHAS NO BANCO A MENSAGEM APARECE
}else{
		
	while($res_repre=mysql_fetch_array($con_repre)){//TRANSFORMA $NOTICIAS NUM ARRAY
		$id_do_repre = $res_repre[0];
		$representada = $res_repre[1];
		$contato = $res_repre[2];
		$email = $res_repre[3];
		$telefone = $res_repre[4];
		$estado = $res_repre[5];
?>
      <form name="editar_repre" id="editar_repre" method="post" action="" enctype="multipart/form-data">
       <fieldset>
       	 
         <label>
          <span>Estado</span>
           <select name="estado" id="estado">
            <option value="<?php echo $estado;?>"><?php echo strtoupper($estado);?></option>
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
           <input type="text" name="representada" value="<?php echo $representada;?>" />
         </label>
         
         <label>
          <span>Contato</span>
           <input type="text" name="contato" value="<?php echo $contato;?>" />
         </label>
         
         <label>
          <span>Email</span>
           <input type="text" name="email" value="<?php echo $email;?>" />
         </label>
         
         <label>
          <span>Telefone</span>
           <input type="text" name="telefone" value="<?php echo $telefone;?>" />
         </label>
         
         <input type="hidden" name="id_repre" value="<?php echo $id_repre;?>" />
         <input type="hidden" name="editar_repre" value="edit" />
         <input type="submit" value="Editar" name="Editar" class="cadastrar_btn" />
       </fieldset>
      </form>
<?php
	}
}
?>
    </div><!--Conteudo-->
   </div><!--box_content-->
<?php include "footer.php";?>