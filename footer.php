</div><!--Content-->
  <div id="clear"></div><!--Clear-->
  
  <div id="footer">
   <div id="footer_login">
   <table border="0">
      <form name="login_manuais" action="<?php echo $loginFormAction; ?>" method="POST" onsubmit="showCarga();">
	    <tr>
	      <td colspan="3"><h1>¡Årea Restrita</h1></td>
        </tr>
	    <tr>
	      <td>Usu·rio:</td>
	      <td><input type="text" name="login" /></td>
          <td rowspan="2"><input type="submit" value="Logar" name="Logar" class="btn_login" /></td>         
        </tr>
	    <tr>
	      <td>Senha:</td>
	      <td><input type="password" name="senha" autocomplete="off" /></td>
        </tr>
        </form>
      </table>
   </div><!--Footer_Login-->
   <p>RS 122 - KM 82 - n∫ 06 - Caxias do Sul / RS<br>
   Bairro: Novo PerÌmetro - CEP: 95043-730<br>
   Email para Contato:<a href="mailto:silpa@silpa.com.br">silpa@silpa.com.br</a><br>
   Email da Nfe: <a href="mailto:nfe@silpa.com.br">nfe@silpa.com.br</a><br>
   Tel:(54)21011333 - Fax:(54)21011336</p><br />
  </div><!--Footer-->
  <div id="copy">
  <p>Copyright &copy; <?php echo date('Y')?> Dominio Silpa&reg; - Todos os Direitos Reservados.</p><span>Desenvolvido por Silpa PeÁas e Equipamentos :)</span><br /><p>Imagens meramente ilustrativas.</p>
  </div><!--Copy-->
<!--acrescente na sua pagina principal substitua 3700 pelo tempo que quiser em segundos-->
<?php
include 'contador.php';
   if (isset($_COOKIE['counte'])) {
      $counte = $_COOKIE['counte'] + 1;
  } else {
    $counte = 1;
    $a++;
}
setcookie('counte', "$counte", time()+3700);
$abre =@fopen("contador.php","w");
$ss ='<?php $a='.$a.'; ?>';
$escreve =fwrite($abre, $ss);
?> 
 </div><!--Box-->
</body>
</html>