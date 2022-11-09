<div id="page_content">
  <div id="page">
  <h1>Sua pesquisa foi: <?php echo $pesquisa;?></h1>
<?php
if(isset($_GET['pesquisa'])){
	$pesquisa = $_GET['pesquisa'];
}else{
    $pesquisa = $_POST['pesquisa'];
}
$_SESSION['nada'] = $pesquisa;
$noticias = mysql_query("SELECT 
                         id, 
						 thumb,
						 codigo, 
						 titulo, 
						 texto_titulo, 
						 especificacao, 
						 texto_especificacao, 
						 categoria,
						 tipo, 
						 data 
						 FROM silpa_posts 
						 WHERE LOWER(codigo) LIKE LOWER('%".$pesquisa."%') OR LOWER(titulo) LIKE LOWER('%".$pesquisa."%') OR LOWER(texto_titulo) LIKE LOWER('%".$pesquisa."%') OR LOWER(especificacao) LIKE LOWER('%".$pesquisa."%') OR LOWER(texto_especificacao) LIKE LOWER('%".$pesquisa."%')
						 ORDER BY titulo ASC")
            or die('Erro na consulta ao Banco!!'.mysql_error());
if(@mysql_num_rows == '0'){
	echo "NÃ£o encontramos noticias neste momento";//SE NÃƒO TIVER LINHAS NO BANCO A MENSAGEM APARECE
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
?>
<h2 class="subtitulo"><?php echo $titulo;?> - Código: <?php echo $codigo;?></h2>
<div id="pesquisa">
<?php
if($categoria == 'produtos'){
?>
<a href="index.php?topicos=nav/single&amp;topicosingle=<?php echo $id_do_post;?>">
<p>
<img src="uploads/<?php echo $categoria;?>/<?php echo $tipo;?>/<?php echo $thumb;?>" width="100" height="75" align="left"><?php echo strip_tags(trim(str_truncate($texto_titulo, 250, $rep=TRUNC_BEFORE_LENGHT))); ?>
</p>
</a>
<?php
}else if($categoria =='download'){
	echo '<a href="index.php?topicos=nav/page&pagina=download">Clique aqui e faça o download do catálogo</a>';
}else if(strlen($_SESSION['nada']) == 10){
	echo "Para consultar o código $pesquisa você precisa fazer o download do nosso catálogo<br>";
	echo '<a href="index.php?topicos=nav/page&pagina=download">Clique aqui e faça o download do catálogo</a>';	
}else{
?>
<a href="index.php?topicos=nav/single&amp;topicosingle=<?php echo $id_do_post;?>">
<p>
<img src="uploads/<?php echo $categoria;?>/<?php echo $thumb;?>" width="100" height="75" align="left"><?php echo strip_tags(trim(str_truncate($texto_titulo, 250, $rep=TRUNC_BEFORE_LENGHT))); ?>
</p>
</a>
<?php
}
?>
</div><!--Pesquisa-->
<?php
}//fecha while page
}//fecha else do array page
?>
  </div><!--page-->
 </div><!--Page Content-->