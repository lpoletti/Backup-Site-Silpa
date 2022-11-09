<?php include"header.php"; ?>
<div id="box_content">
    <div id="sidebar">
     <?php include"menu_painel.php"; ?>
     </div><!--Sidebar-->
    <div id="conteudo">
    <span class="caminho">Home &raquo; Lista de Manuais</span> 
    <a href="novo_manual.php" class="novo_btn">Novo Manual</a><a href="envia_manual.php" class="novo_btn">Envia Manual</a>   
     <table width="100%" border="0" cellspacing="1" cellpadding="5">
      <tr>
        <td align="center" bgcolor="#999999">Manuais:</td>
        <td align="center" bgcolor="#999999">Listar:</td>
        <td align="center" bgcolor="#999999">Excluir:</td>
      </tr>
      
      <?php
	  if(isset($_POST['excluir_manual'])&& $_POST['excluir_manual'] == 'excluir_manual'){
		  $pasta_del = $_POST['pasta_del'];
		  $dir_del = @rmdir('../uploads/manuais/'.$pasta_del);
		  if($dir_del >= 1){
		  $manual_del = mysql_query("DELETE FROM categorias WHERE pasta = '$pasta_del'")
		  				or die(mysql_error());
			  if($manual_del >= 1){
				  echo "<div class=\"ok\">Manual deletado com sucesso!!!</div>";
			  }else{
				echo "<div class=\"no\">Erro ao deletar o manual!!!</div>";  
			  }
		  }else{
			  echo "<div class=\"no\">Delete os arquivos contidos na pasta</div>";
		  }
	  }
      $sql = mysql_query("SELECT id, titulo, pasta FROM categorias ORDER BY titulo")
             or die(mysql_error());
      if(@mysql_num_rows == '0'){
          echo "Não existem registros a serem exibidos";
      }else{
          while($res_noticias = mysql_fetch_array($sql)){
            $id_manual = $res_noticias[0];
            $titulo = $res_noticias[1];
            $pasta = $res_noticias[2];  
      ?>
      <tr>
        <td bgcolor="#999999"><?php echo $titulo;?></td>
        <td align="center" bgcolor="#999999">
         <form action="listar_manuais_arquivo.php" method="post" enctype="multipart/form-data" class="lista_posts">
          <input type="hidden" name="titulo_manuais" value="<?php echo $titulo;?>" />
          <input type="hidden" name="pasta_edit" value="<?php echo $pasta;?>" />
          <input type="submit" name="listar" value="Listar" class="editar_btn" />
         </form>
        </td>
        <td align="center" bgcolor="#999999">
         <form action="" method="post" enctype="multipart/form-data" class="lista_posts">
          <input type="hidden" name="pasta_del" value="<?php echo $pasta;?>" />
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