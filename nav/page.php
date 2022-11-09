<div id="page_content">
  <div id="page">
<?php
$pagina = $_GET['pagina'];
$pagina_sql = mysql_query("SELECT
						id,
						pagina,
						content,
						produtos
						FROM silpa_page
						WHERE pagina = '$pagina'")
or die(mysql_error("Pagina em Manutenção!!!"));
if(@mysql_num_rows($pagina_sql) <= '0'){
	echo "$pagina em manutenção";
}else{
	
while($res_pagina=mysql_fetch_array($pagina_sql)){
	$id = $res_pagina[0];
	$pagina = $res_pagina[1];
	$content = $res_pagina[2];
	$produtos = $res_pagina[3];
?>
    <h1><?php echo $pagina;?></h1>
<?php
if($produtos == 'sim'){
?>
<?php
$pagina_sql = mysql_query("SELECT id, thumb, titulo, categoria, tipo
						FROM silpa_posts WHERE tipo = '$pagina'")
or die(mysql_error("Pagina de Produtos em Manutenção!!!"));
if(@mysql_num_rows($pagina_sql) <= '0'){
	echo "$pagina em manutenção";
}else{
	
while($res_pagina=mysql_fetch_array($pagina_sql)){
	$id = $res_pagina[0];
	$thumb = $res_pagina[1];
	$titulo = $res_pagina[2];
	$categoria = $res_pagina[3];
	$tipo = $res_pagina[4];
?>
<div id="produtos">
 <a href="index.php?topicos=nav/single&amp;topicosingle=<?php echo $id;?>">       
  <img src="uploads/<?php echo $categoria;?>/<?php echo $tipo;?>/<?php echo $thumb;?>" width="200px" height="150px" alt="<?php echo $titulo;?>" />
 </a>
 <a href="index.php?topicos=nav/single&amp;topicosingle=<?php echo $id;?>">
 <p><?php echo $titulo;?></p>
 <span>Clique e saiba mais</span>
 </a>
</div>
<?php
}//loop dos produtos
}//else do loop dos produtos
?>
<?php
}else if($produtos == 'download'){
?>
<?php
$pagina_sql = mysql_query("SELECT id, thumb, titulo, categoria, tipo
						FROM silpa_posts WHERE categoria = '$pagina'")
or die(mysql_error("Pagina de Download em Manutenção!!!"));
if(@mysql_num_rows($pagina_sql) <= '0'){
	echo "$pagina em manutenção";
}else{	
while($res_pagina=mysql_fetch_array($pagina_sql)){
	$id = $res_pagina[0];
	$thumb = $res_pagina[1];
	$titulo = $res_pagina[2];
	$categoria = $res_pagina[3];
	$tipo = $res_pagina[4];
?>
    <a href="uploads/<?php echo $categoria;?>/<?php echo $thumb;?>"><?php echo $titulo;?></a><br />
<?php
}//loop dos produtos
}//else do loop dos produtos
?>
<?php
}else{
?>
<?php
}
?>
<?php
}//fecha while page
}//fecha else do array page
?>
  </div><!--page-->
 </div><!--Page Content-->