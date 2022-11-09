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
    <span class="caminho">Home &raquo; Cadastro de Manuais</span>
     
     <h1>Cadastro de Manuais</h1>
<?php
if(isset($_POST['cadastrar_manuais']) && $_POST['cadastrar_manuais'] == 'manu'){
	
	$titulo00 = $_POST['titulo'];
	$descricao00 = $_POST['descricao'];
	$arquivo00 = $_FILES['arquivo'];
	
	if($categoria == 'produtos'){
	$pasta = "$categoria/$tipo";
	}else{
	$pasta = "$categoria";
	}
	$permitido = array('image/jpg','image/jpeg','image/png');
		
		require("scripts/funcao_upload.php");
		  $name = $img['name'];
		  $tmp = $img['tmp_name'];
		  $type = $img['type'];
		  $data = date('Y/m/d H:i:s');
		  
			  Redimensionar($tmp, $name, 500, '../uploads/'.$pasta);			  
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
      <form name="manuais_posts" id="manuais_posts" method="post" action="" enctype="multipart/form-data">
       <fieldset>
         <label>
          <span>Manuais</span>
           <select name="categoria" id="categoria">
            <option value="-1">Selecione o Manual</option>
<?php
            $noticias = mysql_query("SELECT id, titulo, arquivo, descricao, descricao01, arquivo01, descricao02, arquivo02, descricao03, arquivo03, descricao04, arquivo04, descricao05, arquivo05, descricao06, arquivo06, descricao07, arquivo07, descricao08, arquivo08, categoria_manuais, pasta FROM silpa_manuais ORDER BY id")
            or die(mysql_error());
if(@mysql_num_rows == '0'){
	echo "Não encontramos noticias neste momento";//SE NÃO TIVER LINHAS NO BANCO A MENSAGEM APARECE
}else{
		
	while($res_noticias=mysql_fetch_array($noticias)){//TRANSFORMA $NOTICIAS NUM ARRAY
		$id_manual = $res_noticias[0];
		$titulo = $res_noticias[1];
		$arquivo = $res_noticias[2];
		$descricao = $res_noticias[3];
		$descricao01 = $res_noticias[4];
		$arquivo01 = $res_noticias[5];
		$descricao02 = $res_noticias[6];
		$arquivo02 = $res_noticias[7];
		$descricao03 = $res_noticias[8];
		$arquivo03 = $res_noticias[9];
		$descricao04 = $res_noticias[10];
		$arquivo04 = $res_noticias[11];
		$descricao05 = $res_noticias[12];
		$arquivo05 = $res_noticias[13];
		$descricao06 = $res_noticias[14];
		$arquivo06 = $res_noticias[15];
		$descricao07 = $res_noticias[16];
		$arquivo07 = $res_noticias[17];
		$descricao08 = $res_noticias[18];
		$arquivo08 = $res_noticias[19];
		$categoria_manuais = $res_noticias[20];
		$pasta = $res_noticias[21];		
?>
            <option value="<?php echo $titulo;?>" id="<?php echo $titulo;?>"><?php echo $titulo;?></option>
<?php
	}
}
?>
           </select>
         </label>
         
       	 <div id="field_arquivo">         
         <label>
          <span>Descrição do Item</span>
           <input type="text" name="descricao00" value="<?php echo $descricao;?>" />
         </label>
         
         <label>
          <span>Arquivo para upload | (<?php echo $arquivo;?>)</span>
           <input type="file" name="arquivo00"/>
         </label>
         </div><!--Field Arquivo-->
         
         <div id="field_arquivo">
         <label>
          <span>Descrição do Item 01</span>
           <input type="text" name="descricao01" value="<?php echo $descricao01;?>" />
         </label>
         
         <label>
          <span>Arquivo para upload 01 | (<?php echo $arquivo01;?>)</span>
           <input type="file" name="arquivo01" />
         </label>
         </div><!--Field Arquivo-->
         
         <div id="field_arquivo">
         <label>
          <span>Descrição do Item 02</span>
           <input type="text" name="descricao02" />
         </label>
         
         <label>
          <span>Arquivo para upload 02</span>
           <input type="file" name="arquivo02" />
         </label>
         </div><!--Field Arquivo-->
         
         <div id="field_arquivo">            
         <label>
          <span>Descrição do Item 03</span>
           <input type="text" name="descricao03" />
         </label>
         
         <label>
          <span>Arquivo para upload 03</span>
           <input type="file" name="arquivo03" />
         </label>
         </div><!--Field Arquivo-->
         
         
         <div id="field_arquivo">            
         <label>
          <span>Descrição do Item 04</span>
           <input type="text" name="descricao04" />
         </label>
         
         <label>
          <span>Arquivo para upload 04</span>
           <input type="file" name="arquivo04" />
         </label>
         </div><!--Field Arquivo-->
         
         <div id="field_arquivo">            
         <label>
          <span>Descrição do Item 05</span>
           <input type="text" name="descricao05" />
         </label>
         
         <label>
          <span>Arquivo para upload 05</span>
           <input type="file" name="arquivo05" />
         </label>
         </div><!--Field Arquivo-->
         
         <div id="field_arquivo">            
         <label>
          <span>Descrição do Item 06</span>
           <input type="text" name="descricao06" />
         </label>
         
         <label>
          <span>Arquivo para upload 06</span>
           <input type="file" name="arquivo06" />
         </label>
         </div><!--Field Arquivo-->
         
         <div id="field_arquivo">            
         <label>
          <span>Descrição do Item 07</span>
           <input type="text" name="descricao07" />
         </label>
         
         <label>
          <span>Arquivo para upload 07</span>
           <input type="file" name="arquivo07" />
         </label>
         </div><!--Field Arquivo-->
         
         <div id="field_arquivo">            
         <label>
          <span>Descrição do Item 08</span>
           <input type="text" name="descricao08" />
         </label>
         
         <label>
          <span>Arquivo para upload 08</span>
           <input type="file" name="arquivo08" />
         </label>
         </div><!--Field Arquivo-->
         
         <input type="hidden" name="cadastrar_manuais" value="manu" />
         <input type="submit" value="Cadastrar" name="Cadastrar" class="cadastrar_btn" />
       </fieldset>
      </form>
    </div><!--Conteudo-->
   </div><!--box_content-->
<?php include "footer.php";?>