<?php


function SomaStats($categoria){
	$con = mysqli_connect('localhost','silpa','silpa2010','silpa');
	$sql = "SELECT SUM(visitas) as visitas FROM silpa_posts WHERE categoria = '$categoria'";
	
	if(!$query_sql = mysqli_query($con,$sql)){
		return "erro na consulta no banco";
	}else{
		$query_sql = mysqli_query($con,$sql);
		$somaCategoria = mysqli_fetch_row($query_sql);
		return $somaCategoria[0];
	}
}
$arrayMaior[] = SomaStats('destaques');
$arrayMaior[] = SomaStats('lancamentos');
$arrayMaior[] = SomaStats('produtos');
$arrayMaior[] = SomaStats('noticias');
$maior = 0;
for($i = 0; $i < count($arrayMaior); $i++){
	if($maior < $arrayMaior[$i]){
		$maior = $arrayMaior[$i];
	}
}

echo "<p style=\"background:#FF0000;\">Destaque: ".SomaStats('destaques')."</p>";
echo "<p style=\"background:#00FF00;\">Lançamentos: ".SomaStats('lancamentos')."</p>";
echo "<p style=\"background:#FF00FF;\">Produtos: ".SomaStats('produtos')."</p>";
echo "<p style=\"background:#FFFF00; margin-bottom:10px;\">Noticias: ".SomaStats('noticias')."</p>";

?>
<html>
	<head>
		<title>Statisticas do Site</title>
	</head>
	<body>
		<div id="stats">
			<canvas id="canvasStats" width="210px" height="<?php echo $maior/100; ?>px" style="border:1px solid #000000; padding-top:10px;">
			</canvas>
		
		</div>
	</body>
	<script>
		var c=document.getElementById("canvasStats");
		var ctx=c.getContext("2d");
		ctx.fillStyle="#FF0000";
		ctx.fillRect(30,<?php echo $maior/100-(SomaStats('destaques')/100) ?>,30,<?php echo (SomaStats('destaques')/100); ?>);
		ctx.fillStyle="#00FF00";
		ctx.fillRect(70,<?php echo $maior/100-(SomaStats('lancamentos')/100) ?>,30,<?php echo (SomaStats('lancamentos')/100); ?>);
		ctx.fillStyle="#FF00FF";
		ctx.fillRect(110,<?php echo $maior/100-(SomaStats('produtos')/100) ?>,30,<?php echo (SomaStats('produtos')/100); ?>);
		ctx.fillStyle="#FFFF00";
		ctx.fillRect(150,<?php echo $maior/100-(SomaStats('noticias')/100) ?>,30,<?php echo (SomaStats('noticias')/100); ?>);
	</script>
</html>