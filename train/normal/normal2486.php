<?php
$HOSTNAME = "localhost";

function logon() {
	global $PHP_SELF;

	setcookie( "mysql_web_admin_username" );
	setcookie( "mysql_web_admin_password" );
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