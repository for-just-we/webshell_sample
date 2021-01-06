<?php
$safe_mode=@ini_get('safe_mode');
echo (($safe_mode)?("<div>Safe_mode: <b><font color=green>ON</font></b>"):("Safe_mode: <b><font color=red>OFF</font></b>"));
echo "    ";
// phpversion
echo "Php version<font color=\"green\"> : ".@phpversion()."</font>";
echo "    ";
die();
?>