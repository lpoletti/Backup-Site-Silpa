<?php include"header.php"; ?>
<div id="box_content">
    <div id="sidebar">
     <?php include"menu_painel.php"; ?>
     </div><!--Sidebar-->
    <div id="conteudo">
    <span class="caminho">Home &raquo; Lista de Posts</span>
<?php
if(isset($_POST['excluir_post']) && $_POST['excluir_post'] == 'excluir'){
	$posts_meta = $_POST['id_do_post'];
	
	$pega_imagem = mysql_query("SELECT thumb, categoria, tipo FROM silpa_posts WHERE id = '$posts_meta'")
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
			$del = unlink("$thumb_meta");
			
				$deletar_post = mysql_query("DELETE FROM silpa_posts WHERE id = '$posts_meta'")
				                or die(mysql_error());
								
				if($deletar_post >= '1'){
					echo "<div class=\"ok\">Post removido com sucesso!</div>";
				}else{
					echo "<div class=\"no\">Erro ao remover, tente novamente!</div>";
				}
			
		}
	}			
}
?>
    <table width="100%" border="0" cellpadding="0" cellspacing="1" class="tabela">
      <tr align="center">
        <td bgcolor="#CCCCCC">Data:</td>
        <td bgcolor="#CCCCCC">Categoria:</td>
        <td bgcolor="#CCCCCC">Titulo do Post:</td>
        <td bgcolor="#CCCCCC">Editar:</td>
        <td bgcolor="#CCCCCC">Excluir:</td>
      </tr>
<?php
$pag = "$_GET[pag]";
if($pag >= '1'){
 $pag = $pag;
}else{
 $pag = "1";
}

$maximo = '15'; //RESULTADOS POR PÁGINA
$inicio = ($pag * $maximo) - $maximo;

$noticias = mysql_query("SELECT id, thumb, titulo, texto_titulo, especificacao, texto_especificacao, categoria, tipo, data, visitas FROM silpa_posts ORDER BY categoria LIMIT $inicio, $maximo")
            or die(mysql_error());
if(@mysql_num_rows == '0'){
	echo "Não encontramos noticias neste momento";//SE NÃO TIVER LINHAS NO BANCO A MENSAGEM APARECE
}else{
		
	while($res_noticias=mysql_fetch_array($noticias)){//TRANSFORMA $NOTICIAS NUM ARRAY
		$id_do_post = $res_noticias[0];
		$thumb = $res_noticias[1];
		$titulo = $res_noticias[2];
		$texto_titulo = $res_noticias[3];
		$especificacao = $res_noticias[4];
		$texto_especificacao = $res_noticias[5];
		$categoria = $res_noticias[6];
		$tipo = $res_noticias[7];
		$data = $res_noticias[8];
		$visitas = $res_noticias[9];
?>
      <tr>
        <td align="center" bgcolor="#999999" height="30" class="pad_td"><?php echo date('d/m/y', strtotime($data));?></td>
        <td align="center" bgcolor="#999999" class="pad_td"><?php echo $categoria;?></td>
        <td bgcolor="#999999" class="pad_td"><?php echo $titulo;?></td>
        <td bgcolor="#999999">
        <form name="editar_posts" action="editar_post.php" enctype="multipart/form-data" class="lista_posts" method="post">
        <input type="hidden" name="id_do_post" value="<?php echo $id_do_post;?>" />
        <input type="submit" name="editar" value="Editar" class="editar_btn" />
        </form>        
        </td>
        <td bgcolor="#999999">
        <form name="excluir_posts" action="" enctype="multipart/form-data" class="lista_posts" method="post">
        <input type="hidden" name="id_do_post" value="<?php echo $id_do_post;?>" />
        <input type="hidden" name="excluir_post" value="excluir" />
        <input type="submit" name="excluir" value="Excluir" class="excluir_btn" />
        </form>
        </td>
      </tr>
<?php
	}
}
?>
    </table>
<div class="paginator">
<?php

//USE A MESMA SQL QUE QUE USOU PARA RECUPERAR OS RESULTADOS
//SE TIVER A PROPRIEDADE WHERE USE A MESMA TAMBÉM
$sql_res = mysql_query("SELECT * FROM silpa_posts");
$total = mysql_num_rows($sql_res);

$paginas = ceil($total/$maximo);
$links = '5'; //QUANTIDADE DE LINKS NO PAGINATOR

echo "<a href=\"listar_posts.php?pag=1\">Primeira Página</a>&nbsp;&nbsp;&nbsp;";

for ($i = $pag-$links; $i <= $pag-1; $i++){
if ($i <= 0){
}else{
echo"<a href=\"listar_posts.php?pag=$i\">$i</a>&nbsp;&nbsp;&nbsp;";


}
}echo "$pag &nbsp;&nbsp;&nbsp;";

for($i = $pag +1; $i <= $pag+$links; $i++){
if($i > $paginas){
}else{
echo "<a href=\"listar_posts.php?pag=$i\">$i</a>&nbsp;&nbsp;&nbsp;";
}
}
echo "<a href=\"listar_posts.php?pag=$paginas\">Última página</a>&nbsp;&nbsp;&nbsp;";
?>
</div>
    </div><!--Conteudo-->
   </div><!--box_content-->
<?php include "footer.php";?>