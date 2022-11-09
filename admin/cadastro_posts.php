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
if(isset($_POST['cadastrar_post']) && $_POST['cadastrar_post'] == 'cad'){
	
	$img                 = $_FILES['thumb'];
	$codigo              = $_POST['codigo'];
	$titulo              = $_POST['titulo'];
	$texto_titulo        = $_POST['texto_titulo'];
	$especificacao       = $_POST['especificacao'];
	$texto_especificacao = $_POST['texto_especificacao'];
	$categoria           = $_POST['categoria'];
	$tipo                = $_POST['tipo'];
	
	if($categoria == 'produtos'){
	$pasta = chdir("../uploads/".$categoria."/".$tipo);
	}else{
	$pasta = chdir("../uploads/".$categoria);
	}
	/*$permitido = array('image/jpg','image/jpeg','image/png');
		
		require("scripts/funcao_upload.php");
		  $name = $img['name'];
		  $tmp = $img['tmp_name'];
		  $type = $img['type'];
		  $data = date('Y/m/d H:i:s');
		  
		  
			  Redimensionar($tmp, $name, 500, '../uploads/'.$pasta);*/
			  $name = $img['name'];
			  $tmp = $img['tmp_name'];
			  $data = date('Y/m/d H:i:s');
		if (move_uploaded_file($tmp,$name)) {
		} else {
			print "<div class=\"no\">Possivel ataque de upload!</div>";
		}			  
		  $cadastrar_noticias = mysql_query("INSERT INTO silpa_posts (thumb, codigo, titulo, texto_titulo, especificacao, texto_especificacao, categoria, tipo, data)
		                        VALUES ('$name', '$codigo', '$titulo', '$texto_titulo','$especificacao', '$texto_especificacao', '$categoria', '$tipo', '$data')")
		                        or die(mysql_error());
								
		  if($cadastrar_noticias >= '1'){
			  echo "<div class=\"ok\">Seu post foi cadastrado com sucesso!</div>";
		  }else{
			  echo "<div class=\"no\">Erro ao cadastrar o post!</div>";
		  }
		  
}
?>

      <form name="cadastrar_posts" id="cadastrar_posts" method="post" action="" enctype="multipart/form-data">
       <fieldset>
       	 <label>
          <span>Selecione a Categoria</span>
           <select name="categoria" id="categoria">
            <option value="-1">Selecione a Categoria</option>
            <option value="destaques" id="destaques">Destaques</option>
            <option value="lancamentos" id="lancamentos">Lan&ccedil;amentos</option>
            <option value="produtos" id="produtos">Produtos</option>
            <option value="noticias" id="noticias">Noticias</option>
           </select>
         </label>
         <div id="tipo" style="display:none;">
         <label>
          <span>Fam&iacute;lia do Item</span>
           <select name="tipo" id="tipo">
            <option value="-1">Selecione a Fam&iacute;lia</option>
            <option value="eixos" id="eixos">Eixos</option>            
            <option value="freios" id="freios">Freios</option>
            <option value="suspensoes" id="suspensoes">Suspens&otilde;es</option>
            <option value="componentes" id="componentes">Componentes</option>
           </select>
         </label>
         </div><!--Tipo-->
       
         <label>
          <span>Imagem de Exibi&ccedil;&atilde;o</span>
           <input type="file" name="thumb" />
         </label>
         
         <div id="tipo_cod" style="display:none">
         <label>
          <span>C&oacute;digo</span>
           <input type="text" name="codigo" />
         </label>
         </div>
         
         <label>
          <span>Titulo</span>
           <input type="text" name="titulo" />
         </label>
         
         <label>
          <span>Descri&ccedil;&atilde;o do Item</span>
           <textarea name="texto_titulo"></textarea>
         </label>
         
         <div id="tipo_espec" style="display:none;">
         <label>
          <span>Titulo da Especifica&ccedil;&atilde;o</span>
           <input type="text" name="especificacao" />
         </label>
         
         
         <label>
          <span>Descri&ccedil;&atilde;o da especifica&ccedil;&atilde;o</span>
           <textarea name="texto_especificacao" rows="5"></textarea>
         </label>
         </div>
         
         <input type="hidden" name="cadastrar_post" value="cad" />
         <input type="submit" value="Cadastrar" name="Cadastrar" class="cadastrar_btn" />
       </fieldset>
      </form>
    </div><!--Conteudo-->
   </div><!--box_content-->
<?php include "footer.php";?>