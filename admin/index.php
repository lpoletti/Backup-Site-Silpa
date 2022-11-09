<?php include "scripts/restrict_no.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login - Gerenciador de Sites</title>
<link href="styleadmin.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../images/icones/logo-ico.ico" type="image/x-icon" />
<?php include "scripts.php";?>
</head>
<body onload="hideCarga()">
<!-- div de carga enquanto carrega o resultado-->
	<div class="loading" id="carga" style="display:none; position:absolute; top:50%; left:50%; z-index:50000; border-radius:20px;">
		<img class="imgloading" src="../images/loading.gif" alt="Carregando">
	</div>
<div id="header">
    <div id="header_content">
    <a href="../index.php" onclick="showCarga()">
     <img src="../images/silpa logooriginal.png" width="375px" height="120px" border="0" />
     </a>
    </div><!--Header Content-->
   </div><!--Header-->
<div id="login">
 <form action="<?php echo $loginFormAction; ?>" method="POST" name="login_painel" onsubmit="showCarga()">
  <fieldset>
   <legend>Para gerenciar o site você precisa estar logado</legend>
    <label>
     <span>Usuário:</span>
     <input type="text" name="login" autofocus />
    </label>
    <label>
     <span>Senha:</span>
     <input type="password" name="password" autocomplete="off" />
    </label>
    <input type="submit" name="logar" value="Logar" class="login_btn" />
  </fieldset>
 </form>
</div><!--Login-->
</body>
</html>