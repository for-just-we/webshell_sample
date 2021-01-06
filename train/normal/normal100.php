<?php
$HOSTNAME = "localhost";

function logon() {
	global $PHP_SELF;

	setcookie( "mysql_web_admin_username" );
	setcookie( "mysql_web_admin_password" );
	echo "<html>\n";
	echo "<head>\n";
	echo "<title>MySQL Web Interface</title>\n";
	echo "</head>\n";
	echo "<body>\n";
	echo "<table width=100% height=100%><tr><td><center>\n";
	echo "<table cellpadding=2><tr><td bgcolor=#a4a260><center>\n";
	echo "<table cellpadding=20><tr><td bgcolor=#ffffff><center>\n";
	echo "<h1>MySQL Web Interface</h1>\n";
	echo "<form action='$PHP_SELF'>\n";
	echo "<input type=hidden name=action value=logon_submit>\n";
	echo "<table cellpadding=5 cellspacing=1>\n";
	echo "<tr><td>Username </td><td> <input type=text 
name=username></td></tr>\n";
	echo "<tr><td>Password </td><td> <input type=password 
name=password></td></tr>\n";
	echo "</table><p>\n";
	echo "<input type=submit value='Enter'>\n";
	echo "<input type=reset value='Clear'><br>\n";
	echo "</form>\n";
	echo "</center></td></tr></table>\n";
	echo "</center></td></tr></table>\n";
	echo "<p><hr width=300>\n";
	echo "<font size=2>\n";
	echo "Copyleft &copy; since 1999,\n";
	echo "<a href='mailto:smkim76@icqmail.com'>SooMin Kim</a><br>\n";
	echo "<a href='http://popeye.snu.ac.kr/~smkim/mysql'>Hompage<a> is 
available<br>";
	echo "</font>\n";
	echo "</center></td></tr></table>\n";
	echo "</body>\n";
	echo "</html>\n";
}

logon();

?>