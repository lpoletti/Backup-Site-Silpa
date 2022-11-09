<div id="page_content">
  <div id="page">
<?php

$topicosingle = $_GET['topicosingle'];

$noticias = mysql_query("SELECT thumb, titulo, texto_titulo, especificacao, texto_especificacao, categoria, tipo, data, visitas FROM silpa_posts WHERE id = '$topicosingle'")
            or die('Em manutenção, desculpe-nos o transtorno!!!'.mysql_error());
if(@mysql_num_rows == '0'){
	echo "NÃ£o encontramos noticias neste momento";//SE NÃƒO TIVER LINHAS NO BANCO A MENSAGEM APARECE
}else{
		
	while($res_noticias=mysql_fetch_array($noticias)){//TRANSFORMA $NOTICIAS NUM ARRAY
		$thumb = $res_noticias[0];
		$titulo = $res_noticias[1];
		$texto_titulo = $res_noticias[2];
		$especificacao = $res_noticias[3];
		$texto_especificacao = $res_noticias[4];
		$categoria = $res_noticias[5];		
		$tipo = $res_noticias[6];
		$data = $res_noticias[7];
		$visitas = $res_noticias[8];
?>
<?php
if($categoria == 'produtos'){
?>

    <h1><?php echo $titulo;?></h1>
    <a href="uploads/<?php echo $categoria;?>/<?php echo $tipo;?>/<?php echo $thumb;?>" rel="shadowbox" title="<?php echo $titulo;?>"><img src="uploads/<?php echo $categoria;?>/<?php echo $tipo;?>/<?php echo $thumb;?>" width="360px" height="270px" class="alignright" alt="<?php echo $titulo;?>" /></a>
    <div class="desc">
    <p><?php echo $texto_titulo;?></p>
    <b><?php echo $especificacao;?></b>
    <p><?php echo $texto_especificacao;?></p>
    <div id="produtos_single">
        <span><a href="index.php?topicos=nav/page&amp;pagina=download"><?php echo 'Para mais informações sobre ' .strtolower($titulo). ' faça o download do nosso catálogo';?></a></span>
    </div><!--Produtos Single-->
</div><!--Desc-->
<?php
}else if($categoria == 'noticias'){
?>
	<h1><?php echo $titulo;?></h1>
    <a href="uploads/<?php echo $categoria;?>/<?php echo $thumb;?>" rel="shadowbox" title="<?php echo $titulo;?>"><img src="uploads/<?php echo $categoria;?>/<?php echo $thumb;?>" width="360px" class="alignright" alt="<?php echo $titulo;?>" /></a>
    <div class="desc">
    <p><?php echo $texto_titulo;?></p>
    <b><?php echo $especificacao;?></b>
    <p><?php echo $texto_especificacao;?></p>
    </div><!--Desc-->
<?php
}else{
?>
    <h1><?php echo $titulo;?></h1>
    <a href="uploads/<?php echo $categoria;?>/<?php echo $thumb;?>" rel="shadowbox" title="<?php echo $titulo;?>"><img src="uploads/<?php echo $categoria;?>/<?php echo $thumb;?>" width="360px" height="270px" class="alignright" alt="<?php echo $titulo;?>" /></a>
    <div class="desc">
    <p><?php echo $texto_titulo;?></p>
    <b><?php echo $especificacao;?></b>
    <p><?php echo $texto_especificacao;?></p>
    <div id="produtos_single">
        <span><a href="index.php?topicos=nav/page&amp;pagina=download"><?php echo 'Para mais informações sobre ' .strtolower($titulo). ' faça o download do nosso catálogo';?></a></span>
    </div><!--Produtos Single-->
    </div><!--Desc-->
<?php
}
?>
<?php
}
}
?>
  </div><!--page-->
 </div><!--Page Content-->
<?php
$add_visitas = $visitas + 1;
$up_visitas = mysql_query("UPDATE silpa_posts SET visitas = '$add_visitas' WHERE id = '$topicosingle'")
              or die(mysql_error());
?>