<?php include"header.php"; ?>
<div id="box_content">
    <div id="sidebar">
     <?php include"menu_painel.php"; ?>
     </div><!--Sidebar-->
    <div id="conteudo">
    <?php
	if(isset($_POST['pasta_edit'])&& isset($_POST['titulo_manuais'])){
	$pasta_dest = $_POST['pasta_edit'];
	$titulo = $_POST['titulo_manuais'];	
	}
	?>
    <span class="caminho">Home &raquo; Arquivos de Manuais</span> 
    <a href="envia_manual.php" class="novo_btn">Upload de Manual</a>
    <?php
		if(!empty($_POST['alterar'])&& $_POST['alterar'] == 'Alterar'){
			$titulo_alterado = $_POST['nome_manual'];
			$pasta_dest = $_POST['pasta_comp'];
			$query_altera_titulo = mysql_query("UPDATE categorias SET titulo = '$titulo_alterado' WHERE pasta = '$pasta_dest'");
			if(!$query_altera_titulo){
				$msg = "Deu erro";
			}
			else $msg = "<div class=\"ok\">Alterado</div>";
		}
	?>
    <form method="post" action="">
    	<input type="hidden" name="pasta_comp" value="<?php echo $pasta_dest;?>" />
    	<input type="text" name="nome_manual" value="<?php echo $titulo;?>" />
        <input type="submit" name="alterar" value="Alterar" /><b><br /><?php if(!empty($msg))echo $msg;?></b>
    </form>    
     <table width="100%" border="0" cellspacing="1" cellpadding="5">
      <tr>
      	<td align="center" bgcolor="#999999">Tipo:</td>
        <td align="center" bgcolor="#999999">Manuais:</td>
        <td align="center" bgcolor="#999999">Excluir:</td>
      </tr>
      
      <?php	  
	  if(isset($_POST['excluir_manual'])&& $_POST['excluir_manual'] == 'excluir_manual'){
			$manual_arquivo = $_POST['manual_del'];
			$pasta_manual = mysql_query("SELECT pasta FROM manuais WHERE arquivo = '$manual_arquivo'")
							or die(mysql_error());
			$pega_manual = mysql_fetch_array($pasta_manual);
			$pasta_del_manual = $pega_manual[0];
			
			chdir("../uploads/manuais/".$pasta_del_manual."/");
			unlink("$manual_arquivo");
			$del_manual = mysql_query("DELETE FROM manuais WHERE arquivo = '$manual_arquivo'")
						  or die(mysql_error());
	  }
      $sql = mysql_query("SELECT arquivo, pasta, level FROM manuais WHERE pasta = '$pasta_dest' ORDER BY arquivo")
             or die(mysql_error());
      if(@mysql_num_rows == '0'){
          echo "Não existem registros a serem exibidos";
      }else{
          while($res_noticias = mysql_fetch_array($sql)){
            $arquivo = $res_noticias[0];
			$pasta = $res_noticias[1];
			$level = $res_noticias[2];
      ?>
      <tr>
      	<td bgcolor="#999999"><?php echo strtoupper($level);?></td>
        <td bgcolor="#999999"><?php echo $arquivo;?></td>       
        <td align="center" bgcolor="#999999">
         <form action="" method="post" enctype="multipart/form-data" class="lista_posts">
          <input type="hidden" name="manual_del" value="<?php echo $arquivo;?>" />
          <input type="hidden" name="pasta_edit" value="<?php echo $pasta;?>" />
          <input type="hidden" name="excluir_manual" value="excluir_manual" />
          <input type="submit" name="excluir" value="Excluir" class="excluir_btn" />
         </form>
        </td>
      </tr>
      <?php
          }
      }
      ?>
      </tr>
    </table>

    </div><!--Conteudo-->
   </div><!--box_content-->
<?php include "footer.php";?>