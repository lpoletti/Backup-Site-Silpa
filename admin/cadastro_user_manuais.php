<?php include"scripts/restrict_no.php"; ?>
<?php include"header.php"; ?>
<div id="box_content">
    <div id="sidebar">
     <?php include"menu_painel.php"; ?>
     </div><!--Sidebar-->
    <div id="conteudo">
    <?php
	if(isset($_POST['cadastro_user_manual']) && $_POST['cadastro_user_manual'] == 'cad'){
		$user_manual = strtolower($_POST['user_manual']);
		$senha_manual = strtolower($_POST['senha_manual']);
		$level_manual = strtolower($_POST['level']);
		$verif_cad = mysql_query("SELECT user FROM silpa_usersmanuais WHERE user = '$user_manual'")
					 or die(mysql_error());
		$res_verif = mysql_fetch_array($verif_cad);
		$user_verif = $res_verif[0];
		if($user_manual == $user_verif){
			echo "<div class=\"no\">O usu�rio $user_verif ja existe no sistema!!!</div>";
		}else{
		$insert_cad = mysql_query("INSERT INTO silpa_usersmanuais (user, senha, level) VALUES ('$user_manual','$senha_manual','$level_manual')")
					  or die(mysql_error());
		if($insert_cad >= 1){
			echo "<div class=\"ok\">Cadastro efetuado com sucesso!!!</div>";
		}else{
			echo "<div class=\"no\">Erro ao cadastrar o usu�rio dos manuais</div>";
		}
		}//Verifica��o se existe no banco
	}
	?>
     <form action="" enctype="multipart/form-data" method="post" onsubmit="showCarga()">
     <label>
     Usu�rio:
     <input name="user_manual" type="text" />
     </label>
     <label>
     Senha:
     <input name="senha_manual" type="password" />
     </label>
     <label>
         <span>Tipo de manual:</span>
          <select name="level">
            <option value="-1">Selecione o Destino</option>
            <?php 
			$query_level = mysql_query("SELECT level FROM silpa_usersmanuais GROUP BY level")
			or die(mysql_error());
			while ($level=mysql_fetch_array($query_level)){
				$level_manuais = $level[0];
			?>
            <option value="<?php echo $level_manuais;?>"><?php echo strtoupper($level_manuais);?></option>
            <?php
			}
			?>
         </label>
     <input type="hidden" name="cadastro_user_manual" value="cad" />
     <input type="submit" name="envia_cad_manual" value="Enviar" class="cadastrar_btn" />
     </form>
     <!--AQUI � A SEPARA��O DO CADASTRO COM A LISTA DE USU�RIOS-->
     <table width="100%" border="0" cellspacing="1" cellpadding="5">
      <tr>
        <td align="center" bgcolor="#999999">Usu�rio:</td>
        <td align="center" bgcolor="#999999">Excluir:</td>
      </tr>
      
      <?php
	  if(isset($_POST['excluir_user'])&& $_POST['excluir_user'] == 'excluir_user'){
		  $usuario_manual = $_POST['usuario_manual'];
		  $manual_del = mysql_query("DELETE FROM silpa_usersmanuais WHERE user = '$usuario_manual'")
		  				or die(mysql_error());
			  if($manual_del >= 1){
				  echo "<div class=\"ok\">Usu�rio deletado com sucesso!!!</div>";
			  }else{
				echo "<div class=\"no\">Erro ao deletar o usu�rio!!!</div>";  
			  }
	  }
      $sql = mysql_query("SELECT user, level FROM silpa_usersmanuais ORDER BY user")
             or die(mysql_error());
      if(@mysql_num_rows == '0'){
          echo "N�o existem registros a serem exibidos";
      }else{
          while($res_noticias = mysql_fetch_array($sql)){
            $user_manual = $res_noticias[0];
            $level_user_manual = $res_noticias[1];  
      ?>
      <tr>
        <td bgcolor="#999999"><?php echo strtoupper($user_manual);?></td>
        <td align="center" bgcolor="#999999">
         <form action="" method="post" enctype="multipart/form-data" class="lista_posts">
          <input type="hidden" name="usuario_manual" value="<?php echo $user_manual;?>" />
          <input type="hidden" name="excluir_user" value="excluir_user" />
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