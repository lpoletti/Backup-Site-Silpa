<?php

if (!isset($_SESSION)) {
  session_start();
}

ob_start();
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 

  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 



  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 

  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 

    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "index.php?topicos=nav/home";

if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   

  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>

<div id="close_manuais" style="margin:5px; float:right;">
    Sair 
    <a href="index.php?topicos=nav/logoff"><img src="images/logout.png" width="15" height="15" border="0" align="absmiddle" /></a>
</div>
<div id="list_manuais">
<?php
    $user = $_SESSION['MM_Username'];
?>
    <h3 align=\"center\">Seja Bem vindo <?php echo strtoupper($user);?></h3>
<ul>
<?php
    
    $query_level = mysql_query("SELECT user, level FROM silpa_usersmanuais WHERE user = '$user'")
	or die(mysql_error());

	$level_user = mysql_fetch_array($query_level);
	list($usuario,$level) = $level_user;
                
    
    $categrias = mysql_query("SELECT titulo, pasta FROM categorias ORDER BY pasta")
    or die(mysql_error());

    if(@mysql_num_rows == '0'){
	    echo "Não encontramos noticias neste momento";//SE NÃO TIVER LINHAS NO BANCO A MENSAGEM APARECE
    }else{
	    while($res_categrias = mysql_fetch_array($categrias)){//TRANSFORMA $NOTICIAS NUM ARRAY
            list($titulo,$pasta)= $res_categrias;
            
            $query_level_count = mysql_query("SELECT COUNT(*) FROM manuais WHERE pasta = '$pasta' AND level = 'eva'")
            or die(mysql_error());
            
            $level_user_count = mysql_fetch_array($query_level_count);
            list($count) = $level_user_count;
            
            if($count == 0)continue;
            
            if($level == "eva"){
?>
                <li>
                    <a href="#"><?php echo $titulo;?></a>
                    <ul>
<?php
	                    $manuais = mysql_query("SELECT id, descricao, arquivo, pasta FROM manuais WHERE pasta = '$pasta' AND level = 'eva'")
                        or die(mysql_error());

	                    if(@mysql_num_rows == '0') echo "<li>Não foram encontrados manuais neste momento</li>";
	                    else{
		                    while($res_manuais = mysql_fetch_array($manuais)){
			                    list($id_manual,$descricao,$arquivo,$pasta) = $res_manuais;
?>
                                <li>
                                    <a href="uploads/manuais/<?php echo $pasta;?>/<?php echo $arquivo;?>" target="_blank"><?php echo $descricao;?></a>
                                </li>
<?php
	    	                }
	                    }
?>
                    </ul>
                </li>
<?php
            }
            $query_level_count_dif = mysql_query("SELECT COUNT(*) FROM manuais WHERE pasta = '$pasta' AND level = 'dif'")
            or die(mysql_error());
            
            $level_user_count_dif = mysql_fetch_array($query_level_count_dif);
            list($count) = $level_user_count_dif;
            
            if($count == 0)continue;
            
            elseif($level == "dif"){
?>
                <li>
                    <a href="#"><?php echo $titulo;?></a>
   	                <ul>
<?php
	                    $manuais = mysql_query("SELECT id, descricao, arquivo, pasta, level FROM manuais WHERE pasta = '$pasta' AND level = 'dif'")
				        or die(mysql_error());
	                    if(@mysql_num_rows == '0'){
		                    echo "<li>Não foram encontrados manuais neste momento</li>";
	                    }else{
					        while($res_manuais = mysql_fetch_array($manuais)){
					            list($id_manual,$descricao,$arquivo,$pasta_dif,$level_manuais) = $res_manuais;
?>
    					        <li><a href="uploads/manuais/<?php echo $pasta_dif;?>/<?php echo $arquivo;?>" target="_blank"><?php echo $descricao;?></a></li>
<?php
					        }
		                }
?>
                    </ul>
                </li>
<?php
            }//fecha o if dos level dos tipo de de usuário

	    }//fecha while do noticia

    }//fecha o else do noticia
?>
    </ul>
</div>



