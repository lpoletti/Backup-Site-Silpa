<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_site_dinamico = "localhost";
$database_site_dinamico = "silpa";
$username_site_dinamico = "silpa";
$password_site_dinamico = "silpa2010";
$site_dinamico = mysql_connect($hostname_site_dinamico, $username_site_dinamico, $password_site_dinamico) or trigger_error(mysql_error(),E_USER_ERROR); 
?>