<?php include"scripts/restrict_no.php"; ?>
<?php include"header.php"; ?>
<div id="box_content">
    <div id="sidebar">
     <?php include"menu_painel.php"; ?>
     </div><!--Sidebar-->
    <div id="conteudo">
    <?php
	if(isset($_POST['conce'])&& $_POST['conce'] == 'alteracao'){
		$arquivo_alterado = $_FILES['arquivo']['name'];
		$arquivo_velho_id = mysql_query("SELECT arquivo FROM concessionaria_caixa")
			  or die(mysql_error());
		$rows=mysql_fetch_array($arquivo_velho_id);
		$arquivo_velho = $rows[0];
		chdir("../uploads/concessionariascaixa/");
		if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$_FILES['arquivo']['name'])) {
		@unlink($arquivo_velho);
		mysql_query("DELETE FROM concessionaria_caixa WHERE arquivo = '$arquivo_velho'");
		$insert_arquivo_alterado=mysql_query("INSERT INTO concessionaria_caixa (arquivo) VALUES ('$arquivo_alterado')")
			or die(mysql_error());
		echo "<div class=\"ok\">Arquivo alterado com sucesso</div>";
		}else{
			echo"<div class=\"no\">Erro ao alterar o arquivo</div>";
		}
	}
	?>
    <?php
	$arquivo_velho_id = mysql_query("SELECT arquivo FROM concessionaria_caixa")
			  or die(mysql_error());
		echo "<span>Arquivo Atual<br>";
		$rows=mysql_fetch_array($arquivo_velho_id);
		$arquivo_velho = $rows[0];
		echo $arquivo_velho;
		echo "</span>"
	?>
     <form action="" method="post" enctype="multipart/form-data">
         <span>Enviar o arquivo:</span> <input type="file" name="arquivo">
         <input type="hidden" name="MAX_FILE_SIZE" value="10240000" />
         <input type="hidden" name="conce" value="alteracao" />
         <input type="submit" value="Alterar" name="alterar" class="cadastrar_btn" />
     </form>
    </div><!--Conteudo-->
   </div><!--box_content-->
<?php include "footer.php";?>