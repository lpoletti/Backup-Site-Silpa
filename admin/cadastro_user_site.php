<?php include"scripts/restrict_no.php"; ?>
<?php include"header.php"; ?>
<div id="box_content">
    <div id="sidebar">
     <?php include"menu_painel.php"; ?>
     </div><!--Sidebar-->
    <div id="conteudo">
    	<?php
			header("Content-Type: text/html; charset=ISO-8859-1", true);
			if(isset($_POST['envio_user'])&& $_POST['envio_user'] == 'envio_user'){
				
				$user_adm = $_POST['user'];
				$crip_senha_adm = md5("19silpa73".md5($_POST['user_pass'])."silpa1973");
				
				$query_ver_user = mysql_query("SELECT usuario, senha FROM silpa_users")
					or die(mysql_error());
				$res_ver_user = mysql_fetch_array($query_ver_user);
				$bd_user_adm = $res_ver_user[0];
				$bd_pass_adm = $res_ver_user[1];
					
					if($user_adm == $bd_user_adm){
						echo "<div class=\"no\">J� existem registros com esse nome de usu�rio</div>";	
					}else{
						$ins_new_user = mysql_query("INSERT INTO silpa_users (usuario,senha) VALUES ('$user_adm','$crip_senha_adm')")
						or die(mysql_error());
						if($ins_new_user == 1){
							echo "<div class=\"ok\">Cadastro Efetuado com sucesso</div>";
						}else{
							echo "<div class=\"no\">Erro ao inserir o usu�rio</div>";
						}
					}
			}
		?>
        <form action="" method="post">
            Usu�rio: <input type="text" name="user" />
            Senha: <input type="password" name="user_pass" /><br />
            <input type="hidden" name="envio_user" value="envio_user" />
            <input type="submit" name="cadastrar_user" value="Cadastrar" class="cadastrar_btn"/>
        </form>
        
        
        
        <!--AQUI � A SEPARA��O DO CADASTRO COM A LISTA DE USU�RIOS-->
     <table width="100%" border="0" cellspacing="1" cellpadding="5">
      <tr>
        <td align="center" bgcolor="#999999">Usu�rio:</td>
        <td align="center" bgcolor="#999999">Excluir:</td>
      </tr>
      
      <?php
	  if(isset($_POST['excluir_user'])&& $_POST['excluir_user'] == 'excluir_user'){
		  $usuario_adm = $_POST['usuario_adm'];
		  $manual_del = mysql_query("DELETE FROM silpa_users WHERE usuario = '$usuario_adm'")
		  				or die(mysql_error());
			  if($manual_del >= 1){
				  echo "<div class=\"ok\">Usu�rio deletado com sucesso!!!</div>";
			  }else{
				echo "<div class=\"no\">Erro ao deletar o usu�rio!!!</div>";  
			  }
	  }
      $sql = mysql_query("SELECT usuario FROM silpa_users ORDER BY usuario")
             or die(mysql_error());
      if(@mysql_num_rows == '0'){
          echo "N�o existem registros a serem exibidos";
      }else{
          while($res_noticias = mysql_fetch_array($sql)){
            $user_adm = $res_noticias[0]; 
      ?>
      <tr>
        <td bgcolor="#999999"><?php echo strtoupper($user_adm);?></td>
        <td align="center" bgcolor="#999999">
         <form action="" method="post" enctype="multipart/form-data" class="lista_posts">
          <input type="hidden" name="usuario_adm" value="<?php echo $user_adm;?>" />
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