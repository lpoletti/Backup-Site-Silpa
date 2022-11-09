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
    <span class="caminho">Home &raquo; Editar Posts</span>
     
     <h1>Editar Posts</h1>
<?php
if(isset($_POST['editar_post']) && $_POST['editar_post'] == 'edit'){
	
	$id_editar           = $_POST['id_do_post'];
	$data_alterada   	 = $_POST['data_alterada'];
	$img                 = $_FILES['thumb'];
	$codigo              = $_POST['codigo'];
	$titulo              = $_POST['titulo'];
	$texto_titulo        = $_POST['texto_titulo'];
	$especificacao       = $_POST['especificacao'];
	$texto_especificacao = $_POST['texto_especificacao'];
	
	if(empty($_FILES['thumb']['name'])){
		$data = date('Y-d-m H:i:s',strtotime($data_alterada));
		$editar_posts = mysql_query("UPDATE silpa_posts SET codigo = '$codigo', titulo = '$titulo', texto_titulo = '$texto_titulo', especificacao = '$especificacao', texto_especificacao = '$texto_especificacao', data = '$data' WHERE id = '$id_editar'")
		                or die(mysql_error());
		if($editar_posts >= '1'){
			  echo "<div class=\"ok\">Seu post foi atualizado com sucesso!</div>";
		  }else{
			  echo "<div class=\"no\">Erro ao atualizar o post!</div>";
		  }
	}else{
	
	$pega_imagem = mysql_query("SELECT thumb, categoria, tipo FROM silpa_posts WHERE id = '$id_editar'")
	               or die(mysql_error());
	if(@mysql_num_rows($pega_imagem) <= '0'){
		echo "<div class=\"no\">Erro ao selecionar o post</div>";
	}else{
		while($res_pega_imgem = mysql_fetch_array($pega_imagem)){
			$thumb_meta = $res_pega_imgem[0];
			$categoria_meta = $res_pega_imgem[1];
			$tipo_meta = $res_pega_imgem[2];
			if($categoria_meta == 'produtos'){
				chdir("../uploads/".$categoria_meta."/".$tipo_meta);
			}else{
				chdir("../uploads/".$categoria_meta);
			}
			$del = @unlink("$thumb_meta");
		}
	}
	$data = date('Y-d-m H:i:s',strtotime($data_alterada));
		$name = $_FILES['thumb']['name'];
		if (move_uploaded_file($_FILES['thumb']['tmp_name'],$_FILES['thumb']['name'])) {
			print "<div class=\"ok\">O arquivo é valido e foi carregado com sucesso.</div>";
		} else {
			print "<div class=\"no\">Possivel ataque de upload!</div>";
		}
			  
		  $editar_posts = mysql_query("UPDATE silpa_posts SET thumb = '$name', codigo = '$codigo', titulo = '$titulo', texto_titulo = '$texto_titulo', especificacao = '$especificacao', texto_especificacao = '$texto_especificacao', data = '$data' WHERE id = '$id_editar'")
		                or die(mysql_error());
		if($editar_posts >= '1'){
			  echo "<div class=\"ok\">Seu post foi atualizado com sucesso!</div>";
		  }else{
			  echo "<div class=\"no\">Erro ao atualizar o post!</div>";
		  }
	}
}
?>

<?php
$editar_post_id = $_POST['id_do_post'];

$noticias = mysql_query("SELECT id, thumb, codigo, titulo, texto_titulo, especificacao, texto_especificacao, categoria, tipo, data, visitas FROM silpa_posts WHERE id ='$editar_post_id'")
            or die(mysql_error());
if(@mysql_num_rows == '0'){
	echo "Não encontramos noticias neste momento";//SE NÃO TIVER LINHAS NO BANCO A MENSAGEM APARECE
}else{
		
	while($res_noticias=mysql_fetch_array($noticias)){//TRANSFORMA $NOTICIAS NUM ARRAY
		$id_do_post = $res_noticias[0];
		$thumb = $res_noticias[1];
		$codigo = $res_noticias[2];
		$titulo = $res_noticias[3];
		$texto_titulo = $res_noticias[4];
		$especificacao = $res_noticias[5];
		$texto_especificacao = $res_noticias[6];
		$categoria = $res_noticias[7];
		$tipo = $res_noticias[8];
		$data = $res_noticias[9];
		$visitas = $res_noticias[10];
		

//Linkando imagem para visualização
if($categoria == 'produtos'){
	$link_imagem = "../uploads/".$categoria."/".$tipo."/".$thumb;
	}else{
	$link_imagem = "../uploads/".$categoria."/".$thumb;
	}
?>



      <form name="editar_posts" id="editar_posts" method="post" action="" enctype="multipart/form-data">
       <fieldset>
       	 <label>
         	<span>Data(Altera para atualizar formato dd/mm/aaaa)</span>
         	<input type="text" name="data_alterada" value="<?php echo date('d/m/Y', strtotime($data));?>" />
         </label>   
         
         <label>
          <span>Imagem de Exibição (<font color="red">Altere somente se quiser altera-lá</font>)<a href="<?php echo $link_imagem;?>" target="_blank">Imagem</a></span>
           <input type="file" name="thumb" />
         </label>
         
         <?php if($categoria == 'noticias'){
			 echo "<div id=\"tipo_cod\" style=\"display:none\">";
		 }else{
			 echo "<div id=\"tipo_cod\">";
		 }
		 ?>
         <label>
          <span>C&oacute;digo</span>
           <input type="text" name="codigo" value="<?php echo $codigo;?>" />
         </label>
         </div>
         
         <label>
          <span>Titulo</span>
           <input type="text" name="titulo" value="<?php echo $titulo;?>" />
         </label>
         
         <label>
          <span>Descri&ccedil;&atilde;o do Item</span>
           <textarea name="texto_titulo"><?php echo $texto_titulo;?></textarea>
         </label>
         
          <?php if($categoria == 'noticias'){
			 echo "<div id=\"tipo_espec\" style=\"display:none\">";
		 }else{
			 echo "<div id=\"tipo_espec\">";
		 }
		 ?>
         <label>
          <span>Titulo da Especifica&ccedil;&atilde;o</span>
           <input type="text" name="especificacao" value="<?php echo $especificacao;?>" />
         </label>
         
         
         <label>
          <span>Descri&ccedil;&atilde;o da especifica&ccedil;&atilde;o</span>
           <textarea name="texto_especificacao" rows="5"><?php echo $texto_especificacao;?></textarea>
         </label>
         </div>
         
         <input type="hidden" name="id_do_post" value="<?php echo $id_do_post;?>" />
         <input type="hidden" name="editar_post" value="edit" />
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