<?php include"scripts/restrict_no.php"; ?>
<?php include"header.php"; ?>
<div id="box_content">
    <div id="sidebar">
     <?php include"menu_painel.php"; ?>
     </div><!--Sidebar-->
    <div id="conteudo">
    <span class="caminho">Home &raquo; Lista de Representante</span>
    <?php
	
	if(isset($_POST['excluir_repre']) && $_POST['excluir_repre'] == 'excluir'){
	$id_repre = $_POST['id_repre'];
	
	$del_repre = mysql_query("DELETE FROM silpa_repre WHERE id = '$id_repre'")
			     or die(mysql_error());
	if($del_repre >= '1'){
		echo "<div class=\"ok\">Representante deletado com sucesso</div>";
	}else{
		echo "<div class=\"no\">Erro ao deletar o representante</div>";
	}
	}
	?> 
    <a href="cadastro_repre.php" class="novo_btn">Criar Novo Representante</a>
    <table width="100%" border="0" cellspacing="1" cellpadding="5">
      <tr>
        <td align="center" bgcolor="#999999">Representada:</td>
        <td align="center" bgcolor="#999999">Estado:</td>
        <td align="center" bgcolor="#999999">Editar:</td>
        <td align="center" bgcolor="#999999">Excluir:</td>
      </tr>
     <?php
      $sql = mysql_query("SELECT * FROM silpa_repre ORDER BY representada")
             or die(mysql_error());
      if(@mysql_num_rows == '0'){
          echo "Não existem registros a serem exibidos";
      }else{
          while($res_repre = mysql_fetch_array($sql)){
			  $id_repre       = $res_repre['0'];
			  $representada   = $res_repre['1'];
			  $contato        = $res_repre['2'];
			  $email          = $res_repre['3'];
			  $telefone       = $res_repre['4'];
			  $estado         = $res_repre['5'];
	 ?>
      <tr>
        <td bgcolor="#999999"><?php echo $representada;?></td>
        <td align="center" bgcolor="#999999"><?php echo strtoupper($estado);?></td>
        <td align="center" bgcolor="#999999">
         <form name="editar_repre" action="editar_repre.php" method="post" enctype="multipart/form-data" class="lista_posts">
          <input type="hidden" name="id_repre" value="<?php echo $id_repre;?>" />
          <input type="submit" name="editar" value="Editar" class="editar_btn" />
         </form>
        </td>
        <td align="center" bgcolor="#999999">
         <form action="" method="post" enctype="multipart/form-data" class="lista_posts">
          <input type="hidden" name="id_repre" value="<?php echo $id_repre;?>" />
          <input type="hidden" name="excluir_repre" value="excluir" />
          <input type="submit" name="excluir" value="Excluir" class="excluir_btn" />
         </form>
        </td>
      </tr>
	 
	 <?php
		  }
	  }
	 ?>
     </table>
    </div><!--Conteudo-->
   </div><!--box_content-->
<?php include "footer.php";?>