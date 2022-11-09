<ul>
<?php
//SELECIONA A CATEGORIA E SETA OS LIMITES DE POSTS
if($recuperar =='destaques'){
	$limit = '0,5';
	$quando = 'destaques';
}else if($recuperar == 'lancamentos'){
	$limit = '0,4';
	$quando = 'lancamentos';
}else if($recuperar == 'noticias'){
	$limit = '0,3';
	$quando = 'noticias';
}else if($recuperar == 'company'){
	$limit = '0,1';
	$quando = 'company';
}

//$NOTICIAS RECEBE A CONSULTA DO BANCO DE DADOS
$noticias = mysql_query("SELECT id, thumb, titulo, texto_titulo, especificacao, texto_especificacao, categoria, data FROM silpa_posts WHERE categoria = '$quando' ORDER BY data DESC LIMIT $limit" )
            or die(mysql_error("Em manutenção, desculpe-nos o transtorno!!!"));
if(@mysql_num_rows == '0'){
	echo "Não encontramos noticias neste momento";//SE NÃƒO TIVER LINHAS NO BANCO A MENSAGEM APARECE
}else{
		
	while($res_noticias=mysql_fetch_array($noticias)){//TRANSFORMA $NOTICIAS NUM ARRAY
		$id_do_post = $res_noticias[0];
		$thumb = $res_noticias[1];
		$titulo = $res_noticias[2];
		$texto_titulo = $res_noticias[3];
		$especificacao = $res_noticias[4];
		$texto_especificacao = $res_noticias[5];
		$categoria = $res_noticias[6];
		$data = $res_noticias[7];
?>
<?php
if($recuperar == 'destaques'){
?>
 <li>
  <a href="index.php?topicos=nav/single&amp;topicosingle=<?php echo $id_do_post;?>">       
    <img src="uploads/<?php echo $categoria;?>/<?php echo $thumb;?>" width="500px" height="375px" align=
    "left" alt="<?php echo $titulo; ?>" /></a>
    <div id="sobre">
     <ul>
      <li>
      <a href="index.php?topicos=nav/single&amp;topicosingle=<?php echo $id_do_post;?>">
       <h3><?php echo $titulo; ?></h3>
            <p>
            <?php echo $texto_titulo; ?>
            
            <div id="leia_mais">Leia Mais >></div>
            </p>
            </a>
      </li>
     </ul>
    </div><!--Sobre-->
 </li>
<?php
}else if($recuperar == 'lancamentos'){
?>
<li>
    <a href="index.php?topicos=nav/single&amp;topicosingle=<?php echo $id_do_post;?>">
    <img src="uploads/<?php echo $categoria;?>/<?php echo $thumb;?>" width=
    "200px" height="150px" alt="<?php echo $titulo; ?>" />
    <p><?php echo strip_tags(trim(str_truncate($titulo, 23, $rep=TRUNC_BEFORE_LENGHT))); ?></p>
    </a>
</li>
<?php
}else if($recuperar == 'company'){
?>
<a href="nav/timeline_silpa/horizontal.html" title="Linha do tempo Silpa..." rel="shadowbox">
    <img src="uploads/<?php echo $categoria;?>/<?php echo $thumb;?>" width="300" title="Saiba a História da Silpa clicando na imagem..." height="180" align="right" /></a>
    <p><?php echo strip_tags(trim(str_truncate($texto_titulo, 1300, $rep=TRUNC_BEFORE_LENGHT))); ?></p>
<?php
}else if($recuperar == 'noticias'){
?>
<li><a href="index.php?topicos=nav/single&amp;topicosingle=<?php echo $id_do_post;?>"><span><?php echo $titulo;?><br /></span><?php echo strip_tags(trim(str_truncate($texto_titulo, 139, $rep=TRUNC_BEFORE_LENGHT))); ?><?php echo "...";?></a><p><b>Data: <?php echo date('d/m/Y', strtotime($data));?></b> - <a href="index.php?topicos=nav/single&amp;topicosingle=<?php echo $id_do_post;?>">Leia Mais>></a></p></li>
<?php
}
?>
<?php
	}
}
?>
</ul>