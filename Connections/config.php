<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_config = "localhost";
$database_config = "silpa";
$username_config = "silpa";
$password_config = "silpa2010";
$config = mysql_connect($hostname_config, $username_config, $password_config) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
