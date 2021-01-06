<?php
ob_start();
$tmp = ob_get_contents();
echo $tmp;
ob_clean();
echo "fuxx";
?>
