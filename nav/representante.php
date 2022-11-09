<div id="representantes">
<a href="index.php?topicos=nav/maparepre">Escolha outra região</a>
<?php

$repre = $_GET['repre'];

$noticias = mysql_query("SELECT id ,representada, contato, email, telefone, estado FROM silpa_repre WHERE estado = '$repre'")
            or die(mysql_error("Em manutenção, desculpe-nos o transtorno!!!"));
if(@mysql_num_rows == '0'){
	echo "Não encontramos noticias neste momento";//SE NÃƒO TIVER LINHAS NO BANCO A MENSAGEM APARECE
}else{
		
	while($res_noticias=mysql_fetch_array($noticias)){//TRANSFORMA $NOTICIAS NUM ARRAY
		$id = $res_noticias[0];
		$representada = $res_noticias[1];
		$contato = $res_noticias[2];
		$email = $res_noticias[3];
		$telefone = $res_noticias[4];
		$estado = $res_noticias[5];
?>
<h3><?php echo $representada;?> - <?php echo strtoupper($estado);?></h3>
<p><b>Contato:</b> <?php echo $contato;?> | <b>Email:</b> <a href="mailto:<?php echo $email;?>"><?php echo $email;?></a> | <b>Telefone:</b> <?php echo $telefone;?></p>
<?php
}
}
?>
</div><!--Representante-->