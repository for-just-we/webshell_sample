<?php
function logon_submit() {
	global $username, $password, $PHP_SELF;

	setcookie( "mysql_web_admin_username", $username );
	setcookie( "mysql_web_admin_password", $password );
	echo "<html>";
	echo "<head>";
}

logon_submit();
?>