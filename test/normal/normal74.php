<?php
function logon_submit() {
	global $username, $password, $PHP_SELF;

	setcookie( "mysql_web_admin_username", $username );
	setcookie( "mysql_web_admin_password", $password );
	echo "<html>";
	echo "<head>";
	echo "<META HTTP-EQUIV=Refresh CONTENT='0; URL=$PHP_SELF?action=listDBs'>";
	echo "</head>";
	echo "</html>";
}

logon_submit();
exit;
?>