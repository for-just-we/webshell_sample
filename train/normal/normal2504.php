<?php
function convertByte($s) {
	if($s >= 1073741824)
		return sprintf('%1.2f',$s / 1073741824 ).' GB';
	elseif($s >= 1048576)
		return sprintf('%1.2f',$s / 1048576 ) .' MB';
	elseif($s >= 1024)
		return sprintf('%1.2f',$s / 1024 ) .' KB';
	else
		return $s .' B';
}

convertByte('1234');
?>